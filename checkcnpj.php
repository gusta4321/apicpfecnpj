<?php include('valida-cnpj.php');

$cnpjjson = filter_input(INPUT_GET, 'cnpj', FILTER_SANITIZE_NUMBER_INT);


if ( valida_cnpj( "' $cpfcnpj();'" ) ) {
    
  echo'{ "criador":"@gustavonup", "result":{ "result":"CNPJ VALIDO" } } ';

} else {
 echo'{ "criador":"@gustavonup", "result":{ "result":"CNPJ INVALIDO" } } ';
}
?>
