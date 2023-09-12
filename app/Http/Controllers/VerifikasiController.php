<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
   public function in($id)
   {
        $ad = Registrasi::all()->where('id', $id);
        return $ad;
   }
}
