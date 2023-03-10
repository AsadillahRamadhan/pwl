<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hobby;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hobbies = [
            [
                'nama' => 'Programming',
                'tingkat_kesukaan' => '50'
            ],
            [
                'nama' => 'Bermain Game',
                'tingkat_kesukaan' => '25'
             ],
            [
                'nama' => 'Bermain Basket',
                'tingkat_kesukaan' => '25'
            ]
            ];

            foreach($hobbies as $hobby){
                Hobby::create($hobby);
            }

    }
}
