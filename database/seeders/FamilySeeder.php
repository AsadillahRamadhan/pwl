<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Family;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $families = [
            [
                'nama' => 'Novan Candra Wicaksono',
                'status' => 'Ayah',
                'tanggal_lahir' => '1983-11-14'
            ],
            [
                'nama' => 'Meridiana Tri Ayuningtyas',
                'status' => 'Ibu',
                'tanggal_lahir' => '1984-02-25'
            ],
            [
                'nama' => 'Muhammad Haidar Rizky',
                'status' => 'Adik',
                'tanggal_lahir' => '2007-03-17'
            ],
            [
                'nama' => 'Muhammad Alfarizi Firdaus',
                'status' => 'Adik',
                'tanggal_lahir' => '2009-02-16'
            ],
            [
                'nama' => 'Muhammad Asadillah Ramadhan',
                'status' => 'Pemilik Web',
                'tanggal_lahir' => '2005-10-20'
            ]
            ];
            foreach($families as $family){
                Family::create($family);
            }

    }
}
