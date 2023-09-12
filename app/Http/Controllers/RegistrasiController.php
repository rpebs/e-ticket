<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('landing_page.index');
    }

    public function register(Request $request)
    {
        try {
            $validate = $request->validate([
                'nama' => 'required',
                'no_wa' => 'required|numeric',
                'tanggal' => 'required|date',
                'korwil' => 'required',
                'korda' => 'required',
                'harga' => 'numeric',
                'jml_peserta' => 'numeric',
                'jml_anak' => 'numeric',
                'bukti' => 'required',
                'bukti.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5000',
                'status' => ''
            ]);

            $jml = $request->jml_peserta;

            $bukti = $request->file('bukti');
            $filename = $bukti->storeAs('bukti', $request->tanggal . '-' . $request->nama . '-' . $request->korwil . '-' . $request->korda . '-' . random_int(1, 100) . '.' . $bukti->getClientOriginalExtension());
            $validate['bukti'] = $filename;
            $validate['status'] = 'Belum Verifikasi';
            $startDate1 = \Carbon\Carbon::createFromFormat('Y-m-d', '2023-06-30');
            $endDate1 = \Carbon\Carbon::createFromFormat('Y-m-d', '2023-09-30');
            $startDate2 = \Carbon\Carbon::createFromFormat('Y-m-d', '2023-10-01');
            $endDate2 = \Carbon\Carbon::createFromFormat('Y-m-d', '2023-10-19');
            $startDate3 = \Carbon\Carbon::createFromFormat('Y-m-d', '2023-10-20');
            $endDate3 = \Carbon\Carbon::createFromFormat('Y-m-d', '2023-10-22');
            $check = Carbon::now()->between($startDate1, $endDate1);
            // dd($check);
            if (Carbon::now()->between($startDate1, $endDate1)) {
                $validate['harga'] = 800000 * $jml;
            } else if (Carbon::now()->between($startDate2, $endDate2)) {
                $validate['harga'] = 1000000 * $jml;
            } else if (Carbon::now()->between($startDate3, $endDate3)) {
                $validate['harga'] = 1500000 * $jml;
            } else {
                return 'Pendaftaran Ditutup';
            }

            // dd($validate);


            Registrasi::create($validate);

            return view('landing_page.success', ['data' => $validate]);
        } catch (Exception $e) {
        }
    }

    public function success()
    {
        return view('landing_page.success');
    }
}
