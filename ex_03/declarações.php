

<?php 


// verifica a idade da pessoa e imprime a categoria correspondente:
  // usando o if, elseif.

// Infantil: para idades entre 5 e 10 anos
// Juvenil: para idades entre 11 e 15 anos
// Junior: para idades entre 16 e 20 anos
// Profissional: para idades entre 21 e 25 anos

 $idade = 5;

if($idade >= 5 || $idade <= 10){
   echo "Infantil";
   }elseif($idade >= 11 || $idade <= 15){
     echo "Juvenil";
    }elseif ($idade >= 16 || $idade <= 20){
     echo "Junior";
     }elseif( $idade >= 21 || $idade <= 25){
       echo "Profissional";
 }

// pra fixar na mente:
//  >= maior igual 
// <= menor igual 
// == igual
// || ou true / false , false / true.
// && e true / true.
// === identico
// != diferente 
// !== não identico 
// "elseif não existe e apenas um 
// else acompanha o if -->



// verifica a idade da pessoa e imprime a categoria correspondente:
//   // usando o switch.

 $idade = 5;

 switch($idade){
   case $idade >= 5 || $idade <= 10:
       echo "Infantil";
        break;
     case ($idade >= 11 || $idade <= 15):
         echo "Juvenil";
         break;
         case ($idade >= 16 || $idade <= 20):
            echo "Junior";
             break;
            case ($idade >= 21 || $idade <= 25):
         default:
        echo "Idade não encontrada";
             }
          






// Sistema de restaurante 

// Calcula o valor total de um pedido de produtos em uma 
// lanchonete ou restaurante. O código verifica o código do
//  produto ($produto) e, com base 
//  nesse código, define o valor unitário do produto ($valor) e 
//  calcula o valor total do pedido ($total) 
// multiplicando o valor unitário pela quantidade de produtos.


 $produto = 103;
 $quantidade =20;

 switch($produto){
    case 100: 
         $valor = 1.70;
         $total = $valor * $quantidade;
           echo "Cachorro quente R$ $total";
         break;
    case 101:
         $valor = 2.30;
         $total = $valor * $quantidade;
          echo "Bauru simples R$ $total";
        break;
         case 102:
             $valor = 2.60;
             $total = $valor * $quantidade;
             echo "Bauru com ovo R$ $total";
             break;
             case 103:
                 $valor = 2.40;
                 $total = $valor * $quantidade;
                 echo "Hambúrguer R$ $total";
                 break;
                 case 104:
                     $valor = 2.50;
                    $total = $valor * $quantidade;
                     echo "Cheeseburguer R$ $total";
                     break;
                     case 105:
                         $valor = 1.00;
                         $total = $valor * $quantidade;
                         echo "Refrigerante R$ $total"; 
        
                        }

  
// Sistema de vendas de produtos

// verifica o valor de $codigo e imprime a categoria correspondente.

  $codigo= 1;

 if($codigo == 1){
     echo "Alimento não-Perecivel";
     }elseif($codigo == 2 || $codigo == 3 || $codigo == 4){
        echo "Alimento Perecivel";
       }elseif ($codigo == 5 || $codigo == 6){
         echo "Vestuario";
       }elseif($codigo ==7 ){
       echo "Higiene Pessoal";
       }elseif($codigo == 8 || $codigo == 15){
          echo "Limpeza e Utensilos Domésticos";
      }




      // classificando um produto em uma categoria baseada informções.

      $codigo = 2;

switch ($codigo) {
    case $codigo == 1:
      echo "Alimento não-Perecivel";         
      break;
   case ($codigo == 2 || $codigo == 3 || $codigo == 4):
       echo "Alimento Perecivel";
       break;
       case ($codigo == 5 || $codigo == 6):
           echo "Vestuario";
           break;
           case ($codigo ==7 ):
            echo "Higiene Pessoal";
            break;
            case ($codigo == 8 || $codigo == 15):
            echo "Limpeza e Utensilos Domésticos";
         default:
         echo "Não encontrada";
            }


          ?>