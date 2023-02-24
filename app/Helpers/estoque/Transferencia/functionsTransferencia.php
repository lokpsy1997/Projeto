<?php
namespace App\Helpers\estoque\Transferencia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\estoque\movimento\Movimentacao;









class functionsTransferencia
{
    public static function array_unique_multidimensional($input)
    {
        $array=$input;
        $ids = array_column($array, 'cod_item');
        $ids = array_unique($ids);
        return $array = array_filter($array, function ($key, $value) use ($ids) {


            return in_array($value, array_keys($ids));
        }, ARRAY_FILTER_USE_BOTH);


    }
    // public static function saldo_item($cod)
    public static function saldo_item(Request $request)
    {



        $local_estoque=$request['rel']['local_deposito'];

        $estoque = Movimentacao::where('cod_item',$request['rel']['cod_item'])->get();

        $dados = json_decode($estoque, True);
        $dados_unique = functionsTransferencia::array_unique_multidimensional($dados);

        if(empty($dados_unique)):
            return 0;
    endif;
        // dd($dados_unique);


        $itens_saldos = [];

        foreach ($dados_unique as $item) {

            $itens = DB::table('movimentacao')->where([
                ['cod_item', '=', $item['cod_item']],
                ['tipo_mov', '=', 'Saida'],
                ['local_atual', '=', $local_estoque],

            ])->get();

            $value_Saida = 0;

            foreach ($itens as $item_saida) :
                $value_Saida = $value_Saida + $item_saida->quantidade;
            // echo "<br>";

            endforeach;

            $cod_item = Movimentacao::where([
                ['cod_item', '=', $item['cod_item']],
                ['tipo_mov', '=', 'Entrada'],
                ['local_atual', '=', $local_estoque],
            ])->get();

            $value_entrada = 0;

            foreach ($cod_item as $item_entrada) :
                $value_entrada = $value_entrada + $item_entrada->quantidade;
            // echo $item->quantidade;
            // echo "<br>";
            endforeach;

            return   $saldo = ($value_entrada - $value_Saida);

        }

        //  $saldo;

    }


// public static function buscar_entrada($cod){

//     $cod_item = Movimentacao::where([
//         ['cod_item', '=', $item->cod_item],
//         ['tipo_mov', '=', 'Entrada'],
//         ['local_atual', '=', 'Deposito'],
//     ])->get();
//     $value_entrada=0;

// // var_dump($cod_item);
// foreach($cod_item as $item):
// //         echo "<br>";
// //           echo '-----------------------';
// // echo$$value->quantidade;
// //         echo '-----------------------';
// //         echo "<br>";
// // echo $value ;
// // dd($value);
//         $value_entrada=$value_entrada+$item->quantidade ;
//     endforeach;
//     echo  $value_entrada;
//   echo "<br>";
//     echo '-----------------------';
//     echo "<br>";
// endforeach;

// }
public static function relatoriodetalhado(Request $request)
{

    $itens = DB::table('movimentacao')->where([
        ['cod_item', '=', $request->cod],
        // ['tipo_mov', '=', 'Saida'],
        ['local_atual', '=',  $request->local],

    ])->orderBy('created_at', 'DESC')->get();
return view('estoque.saldo.poritem',compact('itens'));

}

public static function destroy(Request $request)
{



    try
    {
        $itens = DB::table('movimentacao')->where([
            ['cod_item', '=', $request->cod],
            ['cod_transfer', '=', $request->cod_transfer],

        ])->get();


        // dd($itens);

        foreach ($itens as $item){
        $Movimentacao = Movimentacao::findOrFail($item->id);
        $Movimentacao->delete();
        }


        return response()->json(['Deletado com Sucesso...'],200);


    }
       catch (\Exception $e)
    {

        return response()->json(['Não foi possível Deletar esse Item'.$e->getMessage()],400);

    }


}


}
