<?php 

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              //index dosen

              $jadwal = Jadwal::all();
              return view('jadwal.index', compact('jadwal'));
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //Push data ke database
       $dataMahasiswa = Mahasiswa::all();
       $dataDosen = Dosen::all();
       $jadwal = new jadwal;
       return view('jadwal.create', compact('jadwal', 'dataMahasiswa', 'dataDosen'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           

        $jadwal = new Jadwal();
        $jadwal->mahasiswa_id = $request->mahasiswa_id;
        $jadwal->dosen_id = $request->dosen_id;
        $jadwal->judul = $request->judul;
        $jadwal->deskripsi = $request->deskripsi;
        $jadwal->awal = $request->awal;
        $jadwal->akhir = $request->akhir;
        $jadwal->create_at = $request->create_at;
        $jadwal->update_at = $request->update_at;
        $jadwal->save();
    
        return redirect()->route('jadwal.index');
    }

    /**
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }
}

 ?>