<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matkul;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $matkuls = [
            [
                'nama_matkul' => 'Proyek 1',
                'nama_dosen' => 'Rudy Ariyanto, ST., M.Cs.',
                'hari' => 'Senin'
            ],
            [
                'nama_matkul' => 'Manajemen Proyek',
                'nama_dosen' => 'Candra Bella Vista, S.Kom., M.T.',
                'hari' => 'Selasa'
            ],
            [
                'nama_matkul' => 'Jaringan Komputer',
                'nama_dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
                'hari' => 'Selasa'
            ],
            [
                'nama_matkul' => 'Kewarganegaraan',
                'nama_dosen' => 'Widaningsih, S.H., M.H.',
                'hari' => 'Rabu'
            ],
            [
                'nama_matkul' => 'Pemrograman Web Lanjut',
                'nama_dosen' => 'Moch. Zawaruddin Abdullah, S.ST., M.Kom.',
                'hari' => 'Rabu'
            ],
            [
                'nama_matkul' => 'Praktikum Jaringan Komputer',
                'nama_dosen' => 'Kadek Suarjuna Batubulan, S.Kom., M.T.',
                'hari' => 'Kamis'
            ],
            [
                'nama_matkul' => 'Statistika Komputasi',
                'nama_dosen' => 'Elok Nur Hamdana, S.T, M.T.',
                'hari' => 'Kamis'
            ],
            [
                'nama_matkul' => 'Business Intelligence',
                'nama_dosen' => 'Endah Septa Sintiya, S.Pd., M.Kom.',
                'hari' => 'Jumat'
            ],
            [
                'nama_matkul' => 'Analisis dan Desain Berorentasi Objek',
                'nama_dosen' => 'Ariadi Retno Tri Hayati Ririd, S.Kom., M.Kom.',
                'hari' => 'Jumat'
            ]
            ];

            foreach($matkuls as $matkul){
                Matkul::create($matkul); 
            }
        
    }
}
