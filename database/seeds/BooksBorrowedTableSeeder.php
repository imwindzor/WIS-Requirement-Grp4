<?php

use Illuminate\Database\Seeder;

class BooksBorrowedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $BorrowedBook= factory(\App\BorrowedBook::class, 5)->create();
    }
}
