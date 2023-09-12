<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class DRegister extends Controller
{
    public function index()
    {
        return view('admin.data_register.index');
    }

    public function show()
    {
        $query = DB::table('registrasis')->get();

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                // $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editKaryawan">Edit</a>';
                if ($data->status == 'Sudah Verifikasi') {

                    $btn = ' <button data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Verifikasi" class="btn btn-success btn-sm" disabled>Verifikasi</button>';
                } else {

                    $btn = ' <a href="/data/register/verifikasi/' . $data->id . '" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Verifikasi" class="btn btn-success btn-sm">Verifikasi</a>';
                }


                return $btn;
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }
}
