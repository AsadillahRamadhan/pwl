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
        return view('hobby', [
            'data' => $data
        ]);
    }
}
