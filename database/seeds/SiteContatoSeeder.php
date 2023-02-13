<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'sistema SG';
        $contato->telefone = '(14)99885-5252';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato= 1;
        $contato->mensagem = 'Teste testando';
        $contato->save();
        */

        factory(SiteContato::class, 100)->create();
    }
}
