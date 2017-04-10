<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(UsersTableSeeder::class);
        $this->command->info('The Users table has been seeded!');
        $this->call(BoardsTableSeeder::class);        
        $this->command->info('The Boards table has been seeded!');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

class UsersTableSeeder extends Seeder {
    public function run() {
        App\User::truncate();
        factory(App\User::class,10)->create();
    }
}

