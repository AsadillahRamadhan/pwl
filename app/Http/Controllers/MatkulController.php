<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;
class MatkulController extends Controller
{
    function index(){
        return view('matkul.matkul', [
            'matkuls' => Matkul::all()
        ]);
    }

    public function create()
    {
        return view('matkul.create_matkul', [
            'url_form' => url('/matkul')
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_matkul' => 'required|string|max:50',
            'nama_dosen' => 'required|string',
            'hari' => 'required|string'
        ]);
        $data = Matkul::create($request->except(['_token']));

        return redirect('matkul')
            ->with('success', 'Matkul Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $matkul = Matkul::find($id);
        return view('matkul.create_matkul', [
            'matkul' => $matkul,
            'url_form' => url('/matkul/' . $id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_matkul' => 'required|string|max:50',
            'nama_dosen' => 'required|string',
            'hari' => 'required|string'
        ]);

        $data = Matkul::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('matkul')->with('success', 'Matkul Berhasil Diedit');
    }

    public function destroy($id)
    {
        Matkul::where('id', '=', $id)->delete();
        return redirect('matkul')->with('success', 'Matkul Berhasil Dihapus');
    }
}
