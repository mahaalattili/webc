
<html>
   <?PHP 
   ///////////////////////////////(session 3)/////////////////////////// 
    // $x=2;
    // $y=10;
    // function test(){
    //     $z=5;
    //    global $x,$y;
    //    echo  "inside function"." x= $x"." " ." y= $y"; 
    //    echo "<br>";
    //    echo " z= $z"; 
    // }
    // test();
    // echo "<br>";
    // echo "outside function"." x= $x"." " ." y= $y";
    // echo "<br>";
    // echo " z= $z";


    ///////////////////////////////(session 4)///////////////////////////
    // $float_var=1.5;
    // $int_var=intval($float_var);//for casting
    // echo $int_var;
    // $str_var=strval($float_var);
    // var_dump($int_var);//for data type
    // var_dump($str_var);

    // $str="hello world";
    // $float=floatval($str);
    // var_dump($float);
    // echo "<br>";
    // echo strlen("hello world");
    // echo str_word_count("hello world");
    // echo strrev("hello world");
    // echo strpos("hello world","world");
    // echo str_replace("world","maha","hello world");
    // echo substr("hello world!",4,7);
    // $str="hello world!";
    // echo substr($str,0,strpos("$str","!")+1);
        ///////////////////////////////(session 5)///////////////////////////
        // $salary=2000;
        // $salary=$salary-($salary*0.05);
        // echo $salary;
           ///////////////////////////////(session 6)///////////////////////////
           $numbers = array(4, 6, 2, 22, 11);
           echo "Acending: \n";
            for($x=0 ; $x < count($numbers); $x++){
                sort($numbers);
                
                echo $numbers[$x].' ';
            }

            echo "Decending: \n";
            for($x=0 ; $x < count($numbers); $x++){
                rsort($numbers);
                
                echo $numbers[$x].' ';
            }
           echo "<br>";
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            asort($age);
            
            foreach($age as $x => $x_value) {
              echo "Key=" . $x . ", Value=" . $x_value;
              echo "<br>";
            }
            ksort($age);
            echo "<br>";
      foreach($age as $x => $x_value) {
       echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";}
        krsort($age);
        echo "<br>";
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";}


  echo "switch cases";
  echo "<br>" ;

  $color = "purple";

switch ($color) {
  case "purple":
    echo "my favorite color is purple!";
    break;
  case "blue":
    echo "my favorite color is blue!";
    break;
  case "green":
    echo "my favorite color is green!";
    break;
  default:
    echo "my favorite color is neither purple, blue, nor green!";
}

            

    ?> 
</html>

