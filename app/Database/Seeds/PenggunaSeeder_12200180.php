<?php

namespace App\Database\Seeds;

use App\Models\PenggunaModel_12200180;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder_12200180 extends Seeder
{
    public function run()
    {
        $data = [
        [
            'nama'      =>'DonnyPrasetyo',
            'password'  =>md5('12200180')
        ],
        [
            'nama'      =>'creator',
            'password'  =>md5('23456')
        ],
        [
            'nama'      =>'12200180',
            'password'  =>md5('Donny Prasetyo')  
        ]
        ];

        
        $p = new PenggunaModel_12200180();
        $p->insertBatch($data); 
    }
}
