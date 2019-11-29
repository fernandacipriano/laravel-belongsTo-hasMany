<?php

use Illuminate\Database\Seeder;
use App\Cliente;
use App\Pedido;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cliente::class, 5)->create()->each(function (Cliente $cliente) {
            factory(Pedido::class, 10)->create([
                'cliente_id' => $cliente->id
            ]);
        });
    }
}
