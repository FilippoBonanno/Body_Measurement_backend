<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Faker\Generator as Faker;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        Cliente::create([
            'img' => 'https://picsum.photos/id/237/200/300',
            'nome' => 'Mario',
            'cognome' => 'Rossi',
            'cellulare' => '3331234567',
            'email' => 'mario.rossi@example.com',
            'eta' => 30,
            'peso' => 75.5,
            'altezza' => 180,
            'massa_magra' => 65.5,
            'massa_grassa' => 10.0,
            'massa_ossea' => 2.5,
            'testa' => 58.0,
            'collo' => 40.0,
            'spalle' => 50.0,
            'petto' => 100.0,
            'bicipite_dx' => 35.0,
            'bicipite_sx' => 34.5,
            'avambraccio_dx' => 30.0,
            'avambraccio_sx' => 29.5,
            'polso_dx' => 18.0,
            'polso_sx' => 17.5,
            'vita' => 85.0,
            'fianchi' => 90.0,
            'coscia_dx' => 60.0,
            'coscia_sx' => 59.5,
            'polpaccio_dx' => 40.0,
            'polpaccio_sx' => 39.5,
        ]);

        for ($i = 0; $i < 10; $i++) {

            $newCliente = new Cliente();
            $newCliente->img = $faker->imageUrl(200, 300);
            $newCliente->nome = $faker->firstName;
            $newCliente->cognome = $faker->lastName;
            $newCliente->cellulare = $faker->phoneNumber;
            $newCliente->email = $faker->email;
            $newCliente->eta = $faker->numberBetween(1, 100);
            $newCliente->peso = $faker->numberBetween(1, 200);
            $newCliente->altezza = $faker->numberBetween(1, 200);
            $newCliente->massa_magra = $faker->numberBetween(1, 200);
            $newCliente->massa_grassa = $faker->numberBetween(1, 200);
            $newCliente->massa_ossea = $faker->numberBetween(1, 200);
            $newCliente->testa = $faker->numberBetween(1, 200);
            $newCliente->collo = $faker->numberBetween(1, 200);
            $newCliente->spalle = $faker->numberBetween(1, 200);
            $newCliente->petto = $faker->numberBetween(1, 200);
            $newCliente->bicipite_dx = $faker->numberBetween(1, 200);
            $newCliente->bicipite_sx = $faker->numberBetween(1, 200);
            $newCliente->avambraccio_dx = $faker->numberBetween(1, 200);
            $newCliente->avambraccio_sx = $faker->numberBetween(1, 200);
            $newCliente->polso_dx = $faker->numberBetween(1, 200);
            $newCliente->polso_sx = $faker->numberBetween(1, 200);
            $newCliente->vita = $faker->numberBetween(1, 200);
            $newCliente->fianchi = $faker->numberBetween(1, 200);
            $newCliente->coscia_dx = $faker->numberBetween(1, 200);
            $newCliente->coscia_sx = $faker->numberBetween(1, 200);
            $newCliente->polpaccio_dx = $faker->numberBetween(1, 200);
            $newCliente->polpaccio_sx = $faker->numberBetween(1, 200);
            $newCliente->save();
        }
    }
}
