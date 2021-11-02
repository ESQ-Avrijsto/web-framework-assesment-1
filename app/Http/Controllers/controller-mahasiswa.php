<?php 

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
/**
    
     */
class MahasiswaController extends Controller
{
    /**
  
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $mahasiswa = new Mahasiswa;
         return view('mahasiswa.create', compact('mahasiswa'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->tahun_masuk = $request->tahun_masuk;
        $mahasiswa->create_at = $request->create_at;
        $mahasiswa->update_at = $request->update_at;
        $mahasiswa->save();
    
        return redirect()->route('mahasiswa.index');
    
        
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show',compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $mahasiswa = mahasiswa::find($id); 
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
       
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->tanggal_lahir = $request->tanggal_lahir;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->tahun_masuk = $request->tahun_masuk;
        $mahasiswa->create_at = $request->create_at;
        $mahasiswa->update_at = $request->update_at;
        $mahasiswa->save();
        return redirect('mahasiswa');
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')
        ->with('Selamat!', 'Data berhasil dihapus :)');
    }
}

 ?>