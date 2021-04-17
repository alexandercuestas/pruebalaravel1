<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Creamos usuario manual
        App\User::create([
          'name' => 'Alexander Cuestas',
          'email' => 'alexander.cuestas@hotmail.com',
          'document' => '1031124745',
          'password' => Hash::make('123456')
        ]);

        // Creamos ejemplos de CreateEmails
        factory(App\Email::class, 24)->create();
    }
}
