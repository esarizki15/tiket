<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Categori;
use App\Tiket;
use App\Transaksi;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory(User::class,20)->create();
        // factory(Categori::class,20)->create();
        // factory(Tiket::class,20)->create();
        factory(Transaksi::class,20)->create();


    }
}