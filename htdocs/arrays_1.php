<!DOCTYPE html>
<html>
  <head>
    <title>Arrays - Review</title>
  </head>
  <body>
    <?php
    //Different formats of defining an array
    //$foo = array("a", "b", 3); 
    $foo = ["a", "b", 3 ];

    echo "<p> The first element of the array is: $foo[0] </p>";

    echo "<p> This is my array: $foo </p>"; //What is wrong with this way of printing array elements?
    
    //No line break, unless you specify it directly, or use an element that forces the break: 

    echo "$foo[0]";
    echo "$foo[1]";
    echo "<p>$foo[2]</p>";
    echo "$foo[0]<br/>";
    echo "$foo[1]";
    echo"<p>------------------------</p>";
    //print out the elements of the array:

    //using for
    for($i=0; $i<count($foo); $i++){
      echo $foo[$i];
    }
    echo"<p>------------------------</p>";
      
    //using foreach
    foreach($foo as $f){
      echo $f;
    }
    echo"<p>------------------------</p>";
    
    //using built-in functions
    echo implode( ', ', $foo);
    echo"<p>------------------------</p>";
    echo print_r($foo);
    echo"<p>------------------------</p>";

    //what happens with these lines?
    $foo[] = "d";  
    $foo[2] = "c"; 
    $foo[25] = "z"; 

    //using built-in functions
    echo implode( ', ', $foo);
    echo"<p>------------------------</p>";
    echo print_r($foo);
    echo"<p>------------------------</p>";

    echo "$foo[4]";
    unset($foo[4]); //what happens with this line?

    
    if(isset($foo[4])){
      unset($foo[4]);
      echo implode( ', ', $foo);
    }else{
      echo "No such element exists";
    }
    
    echo implode( ', ', $foo);
    
    echo"<p>------------------------</p>";

    echo count( $foo);
    echo"<p>------------------------</p>";
    $foo[2] = 0;

    sort($foo);    
    echo "$foo[1]"; //in-place sort
    echo"<p>------------------------</p>";

    $items = array(
      [1,2,3],
      [4,5,6],
      [7,8,9]
    );

    foreach($items as $item){
      echo implode( ', ', $item);
      // foreach($item as $i){
      //   echo "$i,";
      // }
      echo "<br/>";
    }

    ?>
  </body>
</html>