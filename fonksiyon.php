<?php

// küçük parçalara bölme işlemi funtion
function topla($a,$b)
{
    return $a+$b;
}

function karsilama_mesaji($isim)
{
    echo "Merhaba".$isim;
}

function hesap_makinesi($say1,$say2,$secim)
{
     if ($secim=="Topla") 
     {
     	$sonuc = $say1+$say2;
     }
     elseif ($secim=="Çıkar")
     {
     	$sonuc = $say1-$say2;
     }
     elseif ($secim=="Çarp") 
     {
     	$sonuc = $say1*$say2;
     }
     else
     {
     	$sonuc = $say1 / $say2;

     }

     return $sonuc;
}

function faktöriyel($sayi)
{ 
    $sonuc=1;
    for ($i=1; $i <=$sayi ; $i++) 
    { 
    	$sonuc *= $i;
    }
    return $sonuc;
}
?>