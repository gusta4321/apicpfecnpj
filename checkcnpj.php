<?php include('valida-cnpj.php');

$cnpjjson = filter_input(INPUT_GET, 'cnpj', FILTER_SANITIZE_NUMBER_INT);


if ( valida_cnpj( "' $cnpjjson();'" ) ) {
    
  echo'{ "criador":"@gustavonup", "result":{ "result":"CNPJ VALIDO" } } ';

} else {
 echo'{ "criador":"@gustavonup", "result":{ "result":"CNPJ INVALIDO" } } ';
}
?>
