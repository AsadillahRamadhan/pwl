<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Family;
use Illuminate\Support\Facades\DB;

class FamilyController extends Controller
{
    function index(){
        return view('family.family', [
            'family' => DB::table('families')->orderBy('tanggal_lahir')->get()
        ]);
    }

    public function create()
    {
        return view('family.create_family', [
            'url_form' => url('/keluarga')
        ]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'status' => 'required|string',
            'tanggal_lahir' => 'required|date'
        ]);
        $data = Family::create($request->except(['_token']));

        return redirect('keluarga')
            ->with('success', 'Keluarga Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $family = Family::find($id);
        return view('family.create_family', [
            'family' => $family,
            'url_form' => url('/keluarga/' . $id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'status' => 'required|string',
            'tanggal_lahir' => 'required|date'
        ]);

        $data = Family::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('keluarga')->with('success', 'Keluarga Berhasil Diedit');
    }

    public function destroy($id)
    {
        Family::where('id', '=', $id)->delete();
        return redirect('keluarga')->with('success', 'Keluarga Berhasil Dihapus');
    }
}
