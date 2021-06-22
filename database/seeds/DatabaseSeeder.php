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
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // $this->call(UsersTableSeeder::class);
        \App\Empleado::create([
            'id'=>1,
            'nombre'=> "Gabriel",
            'codigo'=> "33256",
            'ap_paterno'=> "Vazquez",
            'ap_materno'=> "Ruiz",
            'email'=> "Gabriel.vazquezruiz@gmail.com",
            'tipoContrato'=> 1,
            'estado'=> true
        ]);
    }
}
