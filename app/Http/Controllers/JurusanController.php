<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)

    {
        $jumlahbaris=2;
        $katakunci= $request->katakunci;
        if(strlen($katakunci)) {

            $data4=jurusan::where('nama','like',"%$katakunci%")
            ->orwhere('prodi','like',"%$katakunci%")
           
            ->paginate($jumlahbaris);
        }else{
            $data4 = jurusan::orderBy('nama', 'desc')->paginate($jumlahbaris);

        }

      
        return view('about_jurusan')->with('data4', $data4);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        return view('create_data_jurusan');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     Session::Flash('id', $request->id);
     Session::Flash('nama', $request->nama);
     Session::Flash('prodi', $request->prodi);
        
        $request->validate([
            'id'=> 'required',
            'nama'=> 'required',
            'prodi'=>'required',

        ],[
            'id.required',
            'nama.required',
            'prodi.required',
        ]);
        $data4 = [
            'id'=> $request->id,
            'nama'=> $request->nama,
            'prodi'=> $request->prodi,
           

        ];
        jurusan::create($data4);
        return redirect()->to('create_data_jurusan')->with('success', 'Berhasil menambahkan data');
    
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
     * 
     * @param iniy $id
     */
    public function edit( $id)

    {
        $data4 = jurusan::where('nama', $id)->first();
        return view('edit')->with('data4', $data4);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)


    {

        $request->validate([
          
            'id'=> 'required',
            'nama'=> 'required',

            'prodi'=>'required',

        ],[
            'id'=> 'required',
            'nama.required'=> 'nama wajib di isi',
            'prodi.required'=> 'nama wajib di isi',
            
        ]);
        $data4 = [
            'id'=> $request->id,
            'nama'=> $request->nama,
            'prodi'=> $request->prodi,

        ];
        jurusan::where('nama',$id )->update($data4);
        return redirect()->to('jurusan')->with('success', 'Berhasil melakukan update data data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        jurusan::where('id',$id)->delete();
    return redirect()->to('hapus_jurusan')->with('success', 'berhasil melakukan delete');
    }
}
