<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrador',
            'usuario'            
        ];
        foreach($rols as $key => $value){
            DB::table('roles')->insert([
                'nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);     
        }
    }
}
