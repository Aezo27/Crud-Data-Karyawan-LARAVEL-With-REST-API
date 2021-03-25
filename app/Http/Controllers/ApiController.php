<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data_pegawai;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function index()
    {
        $pegawai = DB::select('SELECT public."select_data"()');
        $isi = str_replace(['(', ')'], '', $pegawai[0]->select_data);
        $array = explode(',', $isi);
        $data = array(
            "nama" => $array[0],
            "nip" => $array[1]
        );
        dd($data['nama']);
        // dd($pegawai[0]->select_data);
    }
    public function nama($id)
    {
        $pegawai = DB::select('SELECT public."nama"(:id)', [
            'id' => $id,
        ]);
        return $pegawai;
    }
    public function tambah_data(Request $request){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            'kelamin' => 'required',
            'divisi' => 'required',
        ]);
        $pegawai = DB::statement('SELECT public."insert_data"(:nama, :nip, :alamat, :kelamin, :divisi)', [
            'nama' => $request->nama,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'kelamin' => $request->kelamin,
            'divisi' => $request->divisi,
        ]);
        if ($pegawai) {
            return "Data berhasil ditambahkan";
        } else {
            return "Data gagal ditambahkan";
        } 
    }
    public function delete_data(Request $request, $id){
        $pegawai = DB::statement('SELECT public."delete_data"(:id)', [
            'id' => $id,
        ]);
         if ($pegawai) {
            return "Data berhasil dihapus";
        } else {
            return "Data gagal dihapus";
        } 
    }
    public function update_data(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id' => 'required',
            'nama' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            'kelamin' => 'required',
            'divisi' => 'required',
        ]);
        $pegawai =  DB::statement('SELECT public."update_data"(:id ,:nama, :nip, :alamat, :kelamin, :divisi)', [
            'id' => $request->id,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'kelamin' => $request->kelamin,
            'divisi' => $request->divisi,
        ]);
         if ($pegawai) {
            return "Data berhasil diubah";
        } else {
            return "Data gagal diubah";
        } 
    }
    
}
