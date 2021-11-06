<?php include('valida-cpf.php');

$cpfjson = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_NUMBER_INT);


if ( valida_cpf( "' $cpfjson();'" ) ) {
    
  echo'{ "criador":"@gustavonup", "result":{ "result":"CPF VALIDO" } } ';

} else {
 echo'{ "criador":"@gustavonup", "result":{ "result":"CPF INVALIDO" } } ';
}
?>
