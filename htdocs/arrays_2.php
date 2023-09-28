<!DOCTYPE html>
<html>
  <head>
    <title>Arrays - Review - Part 2</title>
  </head>
  <body>
    <?php

    
      $grades = array("Peter"=>"75", "Ben"=>"87", "Joe"=>"63");
      echo implode( ', ', $grades); //prints values
      
      foreach($grades as $name => $grade){
        echo "<p> $name got $grade</p>";
      }
      echo"<p>------------------------</p>";

      $companies = [
  			"Amz" => ["name" => "Amazon", "rate"=>4.5],
        "App" => ["name" => "Apple", "rate"=>4.6]
        ];
      echo "<select>";
      foreach($companies as $id => $company){
        echo "<option value=$id>".$company['name']."</option>";
  
      }
    echo "</select>";

    ?>
  </body>
</html>