<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsultasi;

class KonsultasiController extends Controller
{
    public function getData(){
        $data = Konsultasi::join("pasien", "pasien.idPasien", "konsultasi.idPasien")->join("dokter", "dokter.idDokter", "konsultasi.idDokter")->get(["nama_pasien", "penyakit", "nama_dokter",]);
        return response()->json([
            "data" => $data
        ]);
    }

    public function updateData(Request $request){
        // $request->validate([

        // ]);
        
        // $data = Konsultasi::find($request->id);
        // $data;
    }
}
