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
            'Sigla' => 'FINA',
            'DescSetor' => 'O setor financeiro é responsável pelo funcionamento...',
        ]);
    }
}
