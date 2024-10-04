<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Faker\Generator as Faker;
use App\Models\User;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Recupera gli utenti esistenti
        $filippo = User::where('email', 'bonanno_filippo@outlook.com')->first();
        $luca = User::where('email', 'luca@lambia.it')->first();


        // Crea clienti per Filippo
        for ($i = 0; $i < 5; $i++) {
            $cliente = new Cliente();
            $cliente->user_id = $filippo->id; // Collega il cliente a Filippo
            $cliente->img = $faker->imageUrl(200, 300);
            $cliente->nome = $faker->firstName;
            $cliente->cognome = $faker->lastName;
            $cliente->cellulare = $faker->phoneNumber;
            $cliente->email = $faker->email;
            $cliente->eta = $faker->numberBetween(18, 65);
            $cliente->peso = $faker->numberBetween(50, 100);
            $cliente->altezza = $faker->numberBetween(150, 200);
            $cliente->massa_magra = $faker->numberBetween(30, 80);
            $cliente->massa_grassa = $faker->numberBetween(10, 30);
            $cliente->massa_ossea = $faker->numberBetween(2, 5);
            $cliente->testa = $faker->numberBetween(50, 70);
            $cliente->collo = $faker->numberBetween(30, 50);
            $cliente->spalle = $faker->numberBetween(40, 60);
            $cliente->petto = $faker->numberBetween(80, 120);
            $cliente->bicipite_dx = $faker->numberBetween(30, 40);
            $cliente->bicipite_sx = $faker->numberBetween(30, 40);
            $cliente->avambraccio_dx = $faker->numberBetween(25, 35);
            $cliente->avambraccio_sx = $faker->numberBetween(25, 35);
            $cliente->polso_dx = $faker->numberBetween(15, 20);
            $cliente->polso_sx = $faker->numberBetween(15, 20);
            $cliente->vita = $faker->numberBetween(70, 90);
            $cliente->fianchi = $faker->numberBetween(80, 100);
            $cliente->coscia_dx = $faker->numberBetween(50, 70);
            $cliente->coscia_sx = $faker->numberBetween(50, 70);
            $cliente->polpaccio_dx = $faker->numberBetween(30, 45);
            $cliente->polpaccio_sx = $faker->numberBetween(30, 45);
            $cliente->save();
        }

        // Crea clienti per Luca
        for ($i = 0; $i < 5; $i++) {
            $cliente = new Cliente();
            $cliente->user_id = $luca->id; // Collega il cliente a Luca
            $cliente->img = $faker->imageUrl(200, 300);
            $cliente->nome = $faker->firstName;
            $cliente->cognome = $faker->lastName;
            $cliente->cellulare = $faker->phoneNumber;
            $cliente->email = $faker->email;
            $cliente->eta = $faker->numberBetween(18, 65);
            $cliente->peso = $faker->numberBetween(50, 100);
            $cliente->altezza = $faker->numberBetween(150, 200);
            $cliente->massa_magra = $faker->numberBetween(30, 80);
            $cliente->massa_grassa = $faker->numberBetween(10, 30);
            $cliente->massa_ossea = $faker->numberBetween(2, 5);
            $cliente->testa = $faker->numberBetween(50, 70);
            $cliente->collo = $faker->numberBetween(30, 50);
            $cliente->spalle = $faker->numberBetween(40, 60);
            $cliente->petto = $faker->numberBetween(80, 120);
            $cliente->bicipite_dx = $faker->numberBetween(30, 40);
            $cliente->bicipite_sx = $faker->numberBetween(30, 40);
            $cliente->avambraccio_dx = $faker->numberBetween(25, 35);
            $cliente->avambraccio_sx = $faker->numberBetween(25, 35);
            $cliente->polso_dx = $faker->numberBetween(15, 20);
            $cliente->polso_sx = $faker->numberBetween(15, 20);
            $cliente->vita = $faker->numberBetween(70, 90);
            $cliente->fianchi = $faker->numberBetween(80, 100);
            $cliente->coscia_dx = $faker->numberBetween(50, 70);
            $cliente->coscia_sx = $faker->numberBetween(50, 70);
            $cliente->polpaccio_dx = $faker->numberBetween(30, 45);
            $cliente->polpaccio_sx = $faker->numberBetween(30, 45);
            $cliente->save();
        }
    }
}
