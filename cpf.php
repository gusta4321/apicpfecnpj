{
   "criador":"@gustavonup",
   "result":{
      "result":"<?php $num = array();
    $num[9]=$num[10]=$num[11]=0;
    for ($w=0; $w > -2; $w--){
        for($i=$w; $i < 9; $i++){
            $x=($i-10)*-1;
            $w==0?$num[$i]=rand(0,9):'';
            ($w==0?$num[$i]:'');
            ($w==-1 && $i==$w && $num[11]==0)?
                $num[11]+=$num[10]*2    :
                $num[10-$w]+=$num[$i-$w]*$x;
        }
        $num[10-$w]=(($num[10-$w]%11)<2?0:(11-($num[10-$w]%11)));
        $num[10-$w];
    }  echo "$num[0]$num[1]$num[2].$num[3]$num[4]$num[5].$num[6]$num[7]$num[8]-$num[10]$num[11]";?>"
   }
}
