<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data_pegawai;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class PegawaiController extends Controller
{
    public function index()
    { 
        $client = new \GuzzleHttp\Client(['base_uri' => 'http://localhost:8001']);
        $request = $client->get('/api/data');
        $response = json_decode($request->getBody()->getContents());
        // dd($response);
        // $pegawai = Data_pegawai::all();
        return view('crud.index', compact('pegawai'));
    }
    public function tambah()
    {
        return view('crud.tambah');
    }
    public function tambah_data(Request $request){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            'kelamin' => 'required',
            'divisi' => 'required',
        ]);
            $client = new Client(['base_uri' => 'http://localhost:8001']);
            $response = $client->request('POST', 'api/tambah-data', ['form_params' => [
                'nama' => $request->nama,
                'nip' => $request->nip,
                'alamat' => $request->alamat,
                'kelamin' => $request->kelamin,
                'divisi' => $request->divisi,
            ]]);
        if ($response) {
            return redirect('/')->with([
                'notif'     => 'data berhasil ditambahkan',
                'alert'     => 'success'
            ]);
        } else {
            return back()->with([
                'notif'     => 'data gagal ditambahkan',
                'alert'     => 'error'
            ]);
        } 
    }
    public function delete_data(Request $request, $id){
        $client = new Client(['base_uri' => 'http://localhost:8001']);
        $response = $client->request('delete', 'api/hapus/'.$id);
        if ($response) {
             return back()->with([
                'notif'     => 'data berhasil dihapus',
                'alert'     => 'success'
            ]);
        } else {
            return back()->with([
                'notif'     => 'data gagal dihapus',
                'alert'     => 'error'
            ]);
        } 
    }
    public function edit($id)
    {
        $pegawai = Data_pegawai::where('id',$id)->firstOrFail();
        return view('crud.edit', compact('pegawai'));
    }
    public function update_data(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
            'kelamin' => 'required',
            'divisi' => 'required',
        ]);
 
        $client = new Client(['base_uri' => 'http://localhost:8001']);
        $response = $client->request('PUT', 'api/update-data', ['form_params' => [
            'id' => $request->id,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'kelamin' => $request->kelamin,
            'divisi' => $request->divisi,
        ]]);
        if ($response) {
            return redirect('/')->with([
                'notif'     => 'data berhasil diubah',
                'alert'     => 'success'
            ]);
        } else {
            return back()->with([
                'notif'     => 'data gagal diubah',
                'alert'     => 'error'
            ]);
        } 
    }
    
}
