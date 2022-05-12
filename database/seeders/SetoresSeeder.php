<?php

namespace Database\Seeders;

use App\Models\SetorCadastro;
use Illuminate\Database\Seeder;

class SetoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SetorCadastro::create([
            'Sigla' => 'INFO',
            'DescSetor' => 'O setor de informática é responsável pelo funcionamento...'
        ]);
    }
}
