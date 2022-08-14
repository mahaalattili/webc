<?php
// function IsPrime($n)
// {
//  for($x=2; $x<$n; $x++)
//    {
//       if($n %$x ==0)
// 	      {
// 		   return 0;
// 		  }
//     }
//   return 1;
//    }
// $a = IsPrime(3);
// if ($a==0)
// echo 'This is not a Prime Number.....'."\n";
// else
// echo 'This is a Prime Number..'."\n";




// function isFac($n){
 
// $f=1;
// for($i=$n;$i>=1;$i--){
//    $f=$n*($n-1);
// }
// echo "factorial is: ".$f;

// }
// isFac(3);
function isPalindrom($g){
    if(strrev($g)==$g){
        echo "is palindrom";
    }else{
        echo "is not palindrom";  
    }
}
isPalindrom("maha");
echo "<br>";
isPalindrom("11211");
?>