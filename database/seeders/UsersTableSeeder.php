<?php
namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'cod_user' => rand(1000,9999).rand(1000,9999),
            'name' => 'Admin Admin',
            'email' => 'admin@material.com',
            'email_verified_at' => now(),
            'api_token' => Str::random(60),
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
  public function run1()
    {
        DB::table('estoques')->insert([
            'name' => 'Admin Admin',
            'cod_item' => '10001144',
            'produto' => 'teste',
            'nota_fiscal' => '123123',
            'lote' => '12312312',
            'vencimento' => '01-02-21',
            'und_medida' => 'Kg',
            'quantidade' => '123',


            // 'email' => 'admin@material.com',
            // 'email_verified_at' => now(),
            // 'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }




}
