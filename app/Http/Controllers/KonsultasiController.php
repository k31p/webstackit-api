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

    public function updateData(Request $request, $id){
        try {
            $request->validate([
                'idPasien' => 'required',
                'penyakit' => 'required',
                'idDokter' => 'required',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "message" => $th->getMessage(),
            ], 400);
        }
        try {
            $data = Konsultasi::find($id);
            $data->idPasien = $request->idPasien;
            $data->penyakit = $request->penyakit;
            $data->idDokter = $request->idDokter;
            $data->save();

            return response()->json([
                "message" => "Data berhasil diubah"
            ]);
        } catch (\Exception $th) {
            return response()->json([
                "message" => $th->getMessage()
            ], 500);
        }
        
        
    }
}
