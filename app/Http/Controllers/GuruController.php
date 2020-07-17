<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Guru::all();
        // dd($data);
        return view ('index', compact('data'));
    }

    public function dashboard()
    {
        return view ('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $data = new Guru;

        $data->namaguru = $request->input('namaguru');
        $data->matapelajaran = $request->input('matapelajaran');
        $data->waktu = $request->input('waktu');

        if ($request->file('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $request->file->move('file', $filename);

            $data->file = $filename;
        }

        $data->save();
            
        Alert::success('Success', 'Data Berhasil Di Input');
        return redirect('/karyawan')->with('status','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $data)
    {
        // dd($datas);
        return view ('crud.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Guru::findOrFail($id);

        $this->validate($request, [
            'namaguru' => 'required',
            'matapelajaran' => 'required',
            'waktu' => 'required'
        ]);



        if ($request->file('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $request->file->move('file', $filename);

            $data->file = $filename;
        }

        $input = $request->all();

        $data->save();

        Alert::success('Success', 'Data Berhasil Di Edit');
        return redirect('/karyawan')->with('status','Data berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $data)
    {
        Guru::destroy($data->id);
        Alert::success('Success', 'Data Berhasil Di Hapus');
        return redirect('/karyawan');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $title = $_GET['keyword'];

        $data = Guru::where([ 
            ['nama', 'LIKE', '%' . $title . '%'],
        ])->get();

            // mengirim data pegawai ke view index
        return view('index', compact('data'));
    }
}
