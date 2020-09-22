<?php

use App\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Type::class, 10)->create();

        DB::table('users')->insert([
            'name' => 'Juan Fernando',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);


    }
}
