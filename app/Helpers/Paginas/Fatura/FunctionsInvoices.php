<?php
namespace App\Helpers\Paginas\Fatura;

class FunctionsInvoices
{


//     public static function teste(){

//   return 'aqui';

//     }

    public static function List_Invocies_Client($cod_user,$name_client){

        //   $name_client=  old('name', auth()->user()->name);



        $servidor = "127.0.0.1";
        $usuario = "root";
        // $senha = "SgCVC4104@";
        $senha = "";
        $dbname = "prevoip";

        //Criar a conexao
        $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);






        $sql = "SELECT * FROM faturas WHERE cod_cliente = '$cod_user' ";
        $resultado1 = mysqli_query($conn, $sql) or die("Erro ao retornar dados");

        while ($registro1 = mysqli_fetch_array($resultado1)) {


        //   echo "<br>-----------------inicio-----------------------<br>";












        $value = $registro1['Valor'];
        $cod_envio = $registro1['cod_envio'];

        $mes = $registro1['mes'];
        $vencimento = $registro1['vencimento'].'/'.$registro1['mes'];

        $dir_pdf = 'http://sip.prevoip.com.br:81/'.$registro1['dir_pdf'];





        $situacao = $registro1['Pagamento'];
        if($registro1['Pagamento']=="NÃ£o Pago"){

          $situacao="Não Pago";
        }


        echo "

        <tr>
                            <td> $cod_envio</td>
                            <td> $name_client </td>
                            <td> $mes </td>
                            <td>R$: $value </td>
                            <td> $situacao</td>
                            <td> $vencimento</td>
                            <td width='65px' align='center'>";


                              echo '
                              <a id="'.$dir_pdf.'"  onclick="openpdf(this.id)" ><span class="fa fa-file-pdf-o text-danger"></span> </a>
                              ';
                             echo ' </td>';

        if($situacao=='Não Pago'){


          echo            "

                            <td  width='65px' align='center'>
                              <i class='fa fa-times text-danger'></i></td>

                          </tr>

        ";

        }

        if($situacao=='Pago'){


        echo            "
                        <td  width='65px' align='center'>  <i class='fa fa-check-square-o text-success'></i></td>

                      </tr>

        ";

        }














        }
    }
}
