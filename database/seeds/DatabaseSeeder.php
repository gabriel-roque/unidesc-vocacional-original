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
         $this->call(UsersTableSeeder::class);
         $this->call(CidadesSeeder::class);
         $this->call(EMedioSeeder::class);
         $this->call(EFundamentalSeeder::class);
         $this->call(CursosSeeder::class);
         $this->call(QuestaoEnunciadoSeeder::class);
         $this->call(QuestaoOpcoesSeeder::class);
         $this->call(CursosCaracteristicaSeeder::class);
         $this->call(QuestaosSeeder::class);
    }
}
