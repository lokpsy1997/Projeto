<?php
namespace App\Helpers\estoque;
use App\Models\estoque;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class release
{



public static function teste($estoque){



// return $estoque;


// return $estoque[$id]['cod_item'];
  $id=$estoque['id'];

 DB::table('estoques')->insert([

    'name' =>  $estoque['name'],
 //   'name' => 'alterei para testet',
    'cod_item' => $estoque['cod_item'],
    'produto'  => $estoque['produto'],
    'nota_fiscal'  => $estoque['nota_fiscal'] ,
    'lote'  => $estoque['lote'] ,
    'vencimento'  => $estoque['vencimento'] ,
    'und_medida'  => $estoque['und_medida'] ,
    'quantidade'  => $estoque['quantidade'] ,
    'custo'  => $estoque['custo'] ,
    'preco'  => $estoque['preco'] ,
    'user_resp'   => $estoque['user_resp'] ,
    'user_lib' =>   $estoque['user_lib'] ,
    'user_conf' => $estoque['user_conf'] ,
    'setor' =>  $estoque['setor'] ,
    'liberacao' =>  $estoque['liberacao'] ,
    'tipo_mov' =>  $estoque['tipo_mov'] ,
    'de' =>  $estoque['de'] ,
    'para' =>   $estoque['para'] ,


    'created_at' => now(),
    'updated_at' => now()
]);


// estoque::whereId($id)->update($data);



    estoque::whereId($id)->update([


        'name' =>  $estoque['name'],
        //   'name' => 'alterei para testet',
           'cod_item' => $estoque['cod_item'],
           'produto'  => 'so testando33223',
           'nota_fiscal'  => $estoque['nota_fiscal'] ,
           'lote'  => $estoque['lote'] ,
           'vencimento'  => $estoque['vencimento'] ,
           'und_medida'  => $estoque['und_medida'] ,
           'quantidade'  => $estoque['quantidade'] ,
           'custo'  => $estoque['custo'] ,
           'preco'  => $estoque['preco'] ,
           'user_resp'   => $estoque['user_resp'] ,
           'user_lib' =>   $estoque['user_lib'] ,
           'user_conf' => $estoque['user_conf'] ,
           'setor' =>  $estoque['setor'] ,
           'liberacao' =>  $estoque['liberacao'] ,
           'tipo_mov' =>  $estoque['tipo_mov'] ,
           'de' =>  $estoque['de'] ,
           'para' =>   $estoque['para'] ,
]);

return redirect('/liberacao')->with('completed', 'estoque deleted');

// $storeData = $estoque->validate([
//     'name' => 'required|max:255',
//     'cod_item' => '|max:18',
//     'produto' => 'required|max:255',
//     'nota_fiscal' => '|max:16',
//     'lote' => ' |max:16',
//     'vencimento' => 'required|max:26',
//     'und_medida' => 'required|max:255',
//     'quantidade' => 'required|max:8',

//     'custo' => ' |max:8',
//     'preco' => ' |max:8',
//     'user_resp' => ' |max:255',
//     'user_lib' => ' |max:255',
//     'user_conf' => ' |max:255',
//     'setor' => ' |max:255',
//     'liberacao' => ' |max:255',
//     'tipo_mov' => ' |max:255',
//     'de' => ' |max:255',
//     'para' => ' |max:255',


// ]);

//  estoque::create($estoque);


}

}
