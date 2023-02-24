<?php
namespace App\Helpers\estoque;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use App\Models\estoque\movimento\Movimentacao;

class functionsEstoque
{



public static function buscar_entrada(Request $request){



dd($request);



    $cod_item = Movimentacao::where([
        ['cod_item', '=', $item->cod_item],
        // ['tipo_mov', '=', 'Entrada'],
        ['local_atual', '=', 'Deposito'],
    ])->get();
    $value_entrada=0;

// var_dump($cod_item);
foreach($cod_item as $item):
//         echo "<br>";
//           echo '-----------------------';
// echo$$value->quantidade;
//         echo '-----------------------';
//         echo "<br>";
// echo $value ;
// dd($value);
        $value_entrada=$value_entrada+$item->quantidade ;
    endforeach;
    echo  $value_entrada;
  echo "<br>";
    echo '-----------------------';
    echo "<br>";
// endforeach;

}

}
