<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        if (!User::where("email", "luca@lambia.it")->first()) {
            $mainUser = new User();
            $mainUser->name = "Luca";
            $mainUser->email = "luca@lambia.it";
            $mainUser->email_verified_at = now();
            $mainUser->password = Hash::make('1backdoor2big');
            $mainUser->save();
        }

        if (!User::where("email", "bonanno_filippo@outlook.com")->first()) {
            $filippo = new User();
            $filippo->name = "Filippo";
            $filippo->email = "bonanno_filippo@outlook.com";
            $filippo->email_verified_at = now();
            $filippo->password = Hash::make('Filippo17');
            $filippo->save();
        }

        if (!User::where("email", "123@outlook.com")->first()) {
            $mainUser = new User();
            $mainUser->name = "Baldo";
            $mainUser->email = "123@outlook.com";
            $mainUser->email_verified_at = now();
            $mainUser->password = Hash::make('Filippo17');
            $mainUser->save();
        }

        // Creazione di clienti per l'utente Filippo
        for ($i = 0; $i < 5; $i++) {
            $cliente = new Cliente();
            $cliente->user_id = $filippo->id; // Collega il cliente a Filippo
            $cliente->img = $faker->imageUrl(200, 300);
            $cliente->nome = $faker->firstName;
            $cliente->cognome = $faker->lastName;
            $cliente->cellulare = $faker->phoneNumber;
            $cliente->email = $faker->email;
            $cliente->eta = $faker->numberBetween(1, 100);
            $cliente->peso = $faker->numberBetween(1, 200);
            $cliente->altezza = $faker->numberBetween(1, 200);
            $cliente->massa_magra = $faker->numberBetween(1, 200);
            $cliente->massa_grassa = $faker->numberBetween(1, 200);
            $cliente->massa_ossea = $faker->numberBetween(1, 200);
            $cliente->testa = $faker->numberBetween(1, 200);
            $cliente->collo = $faker->numberBetween(1, 200);
            $cliente->spalle = $faker->numberBetween(1, 200);
            $cliente->petto = $faker->numberBetween(1, 200);
            $cliente->bicipite_dx = $faker->numberBetween(1, 200);
            $cliente->bicipite_sx = $faker->numberBetween(1, 200);
            $cliente->avambraccio_dx = $faker->numberBetween(1, 200);
            $cliente->avambraccio_sx = $faker->numberBetween(1, 200);
            $cliente->polso_dx = $faker->numberBetween(1, 200);
            $cliente->polso_sx = $faker->numberBetween(1, 200);
            $cliente->vita = $faker->numberBetween(1, 200);
            $cliente->fianchi = $faker->numberBetween(1, 200);
            $cliente->coscia_dx = $faker->numberBetween(1, 200);
            $cliente->coscia_sx = $faker->numberBetween(1, 200);
            $cliente->polpaccio_dx = $faker->numberBetween(1, 200);
            $cliente->polpaccio_sx = $faker->numberBetween(1, 200);
            $cliente->save();
        }
    }
}
