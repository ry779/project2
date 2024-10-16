<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *  @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        $jumlahbaris=4;
        $katakunci= $request->katakunci;
        if(strlen($katakunci)) {

            $data3=mahasiswa::where('nim','like',"%$katakunci%")
            ->orwhere('nama','like',"%$katakunci%")
            ->orwhere('jurusan','like',"%$katakunci%")
            ->paginate($jumlahbaris);
        }else{
            $data3 = mahasiswa::orderBy('nim', 'desc')->paginate($jumlahbaris);

        }

      
        return view('about')->with('data3', $data3);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nim', $request->nim);
        Session::flash('nama', $request->nama);
        Session::flash('jurusan', $request->jurusan);
        
        $request->validate([
            'nim'=> 'required|numeric|unique:mahasiswa,nim',
            'nama'=> 'required',
            'jurusan'=>'required',

        ],[
            'nim.required'=> 'nim wajib di isi',
            'nim.numeric'=> 'nim wajib di angka',
            'nim.unique'=> 'nim yang di isi kan sudah ada di database',
            'nama.required'=> 'nama wajib di isi',
            'jurusan.required'=> 'jurusan wajib di isi',
        ]);
        $data3 = [

            'nim'=> $request->nim,
            'nama'=> $request->nama,
            'jurusan'=> $request->jurusan,

        ];
        mahasiswa::create($data3);
        return redirect()->to('create')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param iniy $id
     */
    public function edit($id)
    {
    
        $data3 = mahasiswa::where('nim', $id)->first();
        return view('edit')->with('data3', $data3);
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\http\request  $request
     * @param int $id 
     * @return \Illuminate \Http\Response 
     */

    public function update(Request $request, $id)
    {
        $request->validate([
          
           
            'nim'=> 'required',
            'nama'=> 'required',

            'jurusan'=>'required',

        ],[
           
            'nim.required'=> 'nim wajib di isi',
            'nama.required'=> 'nama wajib di isi',
            'jurusan.required'=> 'jurusan wajib di isi',
        ]);
        $data3 = [
            
     
            'nama'=> $request->nama,
            'jurusan'=> $request->jurusan,

        ];
        mahasiswa::where('nim',$id )->update($data3);
        return redirect()->to('mahasiswa')->with('success', 'Berhasil melakukan update data data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    mahasiswa::where('nim',$id)->delete();
    return redirect()->to('mahasiswa')->with('success', 'berhasil melakukan delete');
    }
}
