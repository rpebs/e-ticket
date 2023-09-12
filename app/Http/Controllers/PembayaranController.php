<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Registrasi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class PembayaranController extends Controller
{
    public function index()
    {
        // $query = DB::table('pembayarans')->join('registrasis', 'id_registrasis', '=', 'registrasis.id')->select('nama', 'no_wa', 'kode', 'qrcode')->get();
        // dd($query);
        return view('admin.data_pembaryaran.index');
    }

    public function show()
    {
        $query = DB::table('pembayarans')->join('registrasis', 'id_registrasis', '=', 'registrasis.id')->select('pembayarans.id as id', 'nama', 'korwil', 'korda', 'no_wa', 'kode', 'qrcode', 'pembayarans.jml_peserta as peserta')->latest('pembayarans.created_at');

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                $btn = '<a href="https://api.whatsapp.com/send?phone=6283833116772&text=Selamat%20pembayaran%20anda%20untuk%20menghadiri%20acara%20HUT%20BRN%20KE-6%20telah%20diverivikasi.%0A%0ANama%20%3A%20' . $data->nama . '%0AKorwil%20%3A%20' . $data->korwil . '%0AKorda%20%3A%20' . $data->korda . '%0A%0ASilahkan%20Tunjukkan%20Barcode%20untuk%20tiket%20masuk%20anda%20di%20link%20dibawah%20ini.%0A%0ALink%20%3A%20http%3A%2F%2Flocalhost:8000/gettiket/' . $data->kode . '%0A%0A*Barcode%20tersebut%20akan%20digunakan%20untuk%20masuk%20kedalam%20acara dan hanya bisa digunakan
                ' . $data->peserta . ' kali saja*" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm" target="_blank">Kirim Link</a>';

                // $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="edit btn btn-warning btn-sm editJabatan">Atur Hotel</a>';

                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function getById($id)
    {


        $data = Pembayaran::where('id', $id)->first();

        return response()->json([
            'result' => $data,
        ]);
    }
    // public function sethotel(Request $request)
    // {
    //     try {
    //         $id = $request->id;

    //         $validate = $request->validate([
    //             'nama_hotel' => 'required',
    //             'no_kamar' => 'required',
    //         ]);

    //         Pembayaran::where('id', $id)->update($validate);

    //         Alert::success('Sukses', 'Hotel Berhasil Diatur !');

    //         return redirect()->back();
    //     } catch (Exception $e) {
    //         dd($e);
    //     }
    // }

    public function verifikasi($id, Request $request)
    {
        try {
            $validate = $request->validate([
                'id_registrasis' => '',
                'kode' => '',
                'jml_peserta' => '',
                'jml_scan' => '',
                'status_kirim' => '',
                'qrcode' => '',
                // 'nama_hotel' => '',
                // 'no_kamar' => '',
            ]);

            $peserta = Registrasi::where('id', $id)->first()->jml_peserta;
            $validate['jml_peserta'] = $peserta;
            $validate['jml_scan'] = 0;
            $validate['status_kirim'] = 'Belum';
            // $validate['nama_hotel'] = 'Belum Diatur';
            // $validate['no_kamar'] = 'Belum Diatur';
            $number = mt_rand(1000000000, 9999999999);

            $validate['id_registrasis'] = $id;
            $validate['kode'] = $number;

            $qr = QrCode::format('svg')->size('300')->generate($validate['kode']);
            $output =  'qrcodes/' . $validate['kode'] . '.svg';
            Storage::put($output, $qr);
            $validate['qrcode'] = $output;
            // dd($save);
            Pembayaran::create($validate);

            Registrasi::where('id', $id)->update(['status' => 'Sudah Verifikasi']);

            return redirect('/data_pembayaran');
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function cekqr($qrcode)
    {
        try {
            $cek = DB::table('pembayarans')->join('registrasis', 'id_registrasis', '=', 'registrasis.id')->select('nama', 'no_wa', 'kode', 'qrcode', 'pembayarans.jml_peserta as peserta', 'jml_scan')->where('kode', $qrcode)->get();

            // return response()->json([
            //     'result' => $cek,
            // ]);

            if ($cek->count() > 0) {
                if ($cek->first()->jml_scan < $cek->first()->peserta) {
                    $jmlscan = $cek->first()->jml_scan + 1;
                    Pembayaran::where('kode', $qrcode)->update(['jml_scan' => $jmlscan]);
                    return response()->json([
                        'result' => 'success',
                        'data' => $cek->first()
                    ]);
                } else {
                    return response()->json([
                        'result' => 'habis',
                        'data' => $cek->first()
                    ]);
                }
            } else {
                return response()->json([
                    'result' => 'gagal',
                ]);
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function gettiket($kode)
    {
        $data = DB::table('pembayarans')->join('registrasis', 'id_registrasis', '=', 'registrasis.id')->select('nama', 'korwil', 'korda', 'no_wa', 'kode', 'qrcode', 'pembayarans.jml_peserta as peserta')->where('kode', $kode)->first();

        // dd($data);
        return view('admin.qrcode', ['data' => $data]);
    }
}
