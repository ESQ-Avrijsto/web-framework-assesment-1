<?php 

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    
     /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          

           $dosen = Dosen::all();
           return view('dosen.index', compact('dosen'));
   
    }

    /**
     * .
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           
           $dosen = new Dosen;
           return view('dosen.create', compact('dosen'));
    }

    /**
     * .
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $dosen = new Dosen();
        $dosen->nama = $request->nama;
        $dosen->nidn = $request->nidn;
        $dosen->alamat = $request->alamat;
        $dosen->kontak = $request->kontak;
        $dosen->create_at = $request->create_at;
        $dosen->update_at = $request->update_at;
        $dosen->save();
    
        return redirect()->route('dosen.index');
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        return view('dosen.show',compact('dosen'));
    }
    
    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = dosen::find($id); 
        return view('dosen.edit', compact('dosen'));
    }

    /*
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dosen = Dosen::find($id);
        $dosen->nama = $request->nama;
        $dosen->nidn = $request->nidn;
        $dosen->alamat = $request->alamat;
        $dosen->kontak = $request->kontak;
        $dosen->create_at = $request->create_at;
        $dosen->update_at = $request->update_at;
        $dosen->save();
        return redirect('dosen');
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $dosen = Dosen::find($id);
        $dosen->delete();
        return redirect()->route('dosen.index')
        ->with('Selamat!', 'Data berhasil dihapus :)');
    }
}

 ?>