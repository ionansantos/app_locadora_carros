<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marcaImagePath = 'marcas';

        $marcas = [
            'Chevrolet' => 'chevrolet.png',
            'BMW' => 'bmw.png',
            'Ford' => 'ford.png',
            'Honda' => 'honda.png',
            'Hyundai' => 'hyundai.png',
            'Kia' => 'kia.png',
            'Nissan' => 'nissan.png',
            'Toyota' => 'toyota.png',
            'Volkswagen' => 'volkswagen.png',
        ];

        foreach ($marcas as $nomeMarca => $marcaImageName) {
            DB::table('marcas')->insert([
                'nome' => $nomeMarca,
                'imagem' => "$marcaImagePath/$marcaImageName",
            ]);

            // Armazenar a imagem no disco público
            Storage::disk('public')->put("$marcaImagePath/$marcaImageName", file_get_contents(public_path("marcas/$marcaImageName")));
        }
    }
}
