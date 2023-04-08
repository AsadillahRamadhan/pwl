<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hobby;
class HobbyController extends Controller
{
    function index(){
        $hobbies = Hobby::all();
        $labels = [];
        $data_num = [];
        $bg_color = [];
        $i = 1;
        foreach($hobbies as $hobby){
            array_push($labels, $hobby->nama);
            array_push($data_num, $hobby->tingkat_kesukaan);
            array_push($bg_color, 'rgba(' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ', ' . mt_rand(0, 255) . ', 0.6)');
            $i++;
        }
        $data = [
            'labels' => $labels,
            'datasets' => [
                [
                    'data' => $data_num,
                    'backgroundColor' => $bg_color
                ]
            ]
        ];
        return view('hobi.hobby', [
            'data' => $data,
            'hobi' => $hobbies
        ]);
    }

    public function create()
    {
        return view('hobi.create_hobby', [
            'url_form' => url('/hobi')
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'tingkat_kesukaan' => 'required|integer'
        ]);
        $data = Hobby::create($request->except(['_token']));

        return redirect('hobi')
            ->with('success', 'Hobi Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $hobi = Hobby::find($id);
        return view('hobi.create_hobby', [
            'hobi' => $hobi,
            'url_form' => url('/hobi/' . $id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'tingkat_kesukaan' => 'required|integer'
        ]);

        $data = Hobby::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('hobi')->with('success', 'Hobi Berhasil Diedit');
    }

    public function destroy($id)
    {
        Hobby::where('id', '=', $id)->delete();
        return redirect('hobi')->with('success', 'Hobi Berhasil Dihapus');
    }
}
