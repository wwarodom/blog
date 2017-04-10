<?php

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('boards')->delete();
        // $boards = [
        //     ["title" => 'Uve1',
        //     "body" => 'Osas1',],
        //     ["title" => 'Uve2',
        //     "body" => 'Osas2',],            
        // ];

        // foreach ($boards as $board) {
        //     App\Board::create($board);
        // }

        App\Board::truncate();
        factory(App\Board::class, 10)->create();       
    }
}
