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
        
        $final = array();
        foreach ($pegawai as $peg) {
            $isi = str_replace(['(', ')', '"'], '', $peg->select_data);
            $array = explode(',', $isi);
            $data = array(
                    "id" => $array[5],
                    "nama" => $array[0],
                    "nip" => $array[1],
                    "alamat" => $array[2],
                    "jenis_kelamin" => $array[3],
                    "divisi" => $array[4]
                );
            $final[] = $data;
        }
        return json_encode($final);
    }
    public function tambah_data(Request $request){
        // $validator = Validator::make($request->all(),[
        //     'nama' => 'required',
        //     'nip' => 'required',
        //     'alamat' => 'required',
        //     // 'kelamin' => 'required',
        //     // 'divisi' => 'required',
        // ]);
        // $pegawai = DB::statement('SELECT public."insert_data"(:nama, :nip, :alamat, :kelamin, :divisi)', [
        $pegawai = DB::statement('SELECT public."insert_data"(:nama, :nip, :alamat)', [
            'nama' => $request->nama,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            // 'kelamin' => $request->kelamin,
            // 'divisi' => $request->divisi,
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
        $pegawai =  DB::statement('SELECT public."update_data"(:id, :nama, :nip, :alamat, :kelamin, :divisi)', [
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
    public function whatsapp()
    {
        $pegawai = DB::select('SELECT public."whatsapp"()');
        
        $final = array();
        foreach ($pegawai as $peg) {
            $isi = str_replace(['(', ')', '"'], '', $peg->whatsapp);
            $array = explode(',', $isi);
            $data = array(
                    "id" => $array[0],
                    "nama" => $array[1],
                    "nomor" => $array[2],
                    "time" => $array[3],
                    "status" => $array[4],
                );
            $final[] = $data;
        }
        return json_encode($final);
    }
    public function update_whatsapp(Request $request)
    {
        $pegawai =  DB::statement('SELECT public."update_wa"(:id, :stts)', [
            'id' => $request->id,
            'stts' => $request->stts,
        ]);
        if ($pegawai) {
            return "Status berhasil diubah";
        } else {
            return "Status gagal diubah";
        } 
    }
}
