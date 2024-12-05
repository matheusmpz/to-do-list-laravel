<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planos')->insert([[
            'titulo'=>'Gratuito',
            'descricao'=>'Lorem ipsum dor lorem god of war champions league',
            'valor'=> 0.00
        ],
        [
            'titulo'=>'Premium',
            'descricao'=>'Lorem ipsum dor lorem god of war champions league',
            'valor'=> 29.00
        ],
        [
            'titulo'=>'Gold',
            'descricao'=>'Lorem ipsum dor lorem god of war champions league',
            'valor'=> 50.00
        ]
    ]);
    }
}