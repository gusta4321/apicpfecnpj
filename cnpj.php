{
   "criador":"@gustavonup",
   "result":{
      "result":"<?php


 


echo cGerador::cnpj(true)."";




class cGerador {

	

	public static function cnpj($compontos=false) : string
	{
	   $n1 = rand(0,9);
	   $n2 = rand(0,9);
	   $n3 = rand(0,9);
	   $n4 = rand(0,9);
	   $n5 = rand(0,9);
	   $n6 = rand(0,9);
	   $n7 = rand(0,9);
	   $n8 = rand(0,9);
	   $n9 = 0;
	   $n10= 0;
	   $n11= 0;
	   $n12= 1;
	   $d1 = $n12*2+$n11*3+$n10*4+$n9*5+$n8*6+$n7*7+$n6*8+$n5*9+$n4*2+$n3*3+$n2*4+$n1*5;
	   // $d1 = 11 - ( self::mod($d1,11) );
	   $d1 = 11 - $d1%11;

	   if ( $d1 >= 10 )
	   { 
		  $d1 = 0 ;
	   }
	   $d2 = $d1*2+$n12*3+$n11*4+$n10*5+$n9*6+$n8*7+$n7*8+$n6*9+$n5*2+$n4*3+$n3*4+$n2*5+$n1*6;
	   $d2 = 11 - $d2%11;

	   if ($d2>=10) { $d2 = 0 ;}

	   $retorno = '';

	   if ($compontos) {$retorno = ''.$n1.$n2.".".$n3.$n4.$n5.".".$n6.$n7.$n8."/".$n9.$n10.$n11.$n12."-".$d1.$d2;}
	   else {$retorno = ''.$n1.$n2.$n3.$n4.$n5.$n6.$n7.$n8.$n9.$n10.$n11.$n12.$d1.$d2;}

	   return $retorno;
	}
	
	
	public static function ie($compontos=false) : string
	{
		$n_1a8 = self::num_aleatorios(9-1);
		$n9 = self::calculaPrimeiroDigito($n_1a8);
		$n_10a11 = self::num_aleatorios(12-10);
		$ie = $n_1a8 . $n9 . $n_10a11;
		$n12= self::calculaSegundoDigito($ie);

		if ($compontos)
			return substr($ie,0,3).".".substr($ie,3,3).".".substr($ie,6,3).".".$n_10a11.$n12;
		else
			return $ie . $n12;
	}
	
	
	
	private static function num_aleatorios($qtde) {
		$str_n = '';
		for($i=0; $i<$qtde; $i++) {
			$str_n .= rand(0,9);
		}
		return $str_n;
	}
	
	
    private static function calculaPrimeiroDigito($ie_8_primeiros)
    {
       
		$corpo = $ie_8_primeiros;
        $pesos = [1, 3, 4, 5, 6, 7, 8, 10];
        $soma = 0;
        foreach (str_split($corpo) as $i => $item) {
            $soma += ($item * $pesos[$i]);
        }
        $dig = $soma % 11;

        $strDig = $dig . '';
        $length = strlen($strDig);

        return substr($dig, $length - 1, 1);
    }
	
  
    private static function calculaSegundoDigito($ie_11_primeiros)
    {
       
		$corpo = $ie_11_primeiros;
        $peso = 3;
        $soma = 0;
        foreach (str_split($corpo) as $item) {
            $soma += $item * $peso;
            $peso--;
            if ($peso == 1) {
                $peso = 10;
            }
        }

        $dig = $soma % 11;

        $strDig = $dig . '';
        $length = strlen($strDig);

        return substr($dig, $length - 1, 1);
    }	
}

?>"
   }
}
