<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitors Count</title>
</head>
<body>
   <h1>Welcome to my page </h1>

   <hr>
   <footer>
    <?php
 $counter_name = "counter.txt";

 $f = fopen($counter_name,"r");
 $counterVal = fread($f, filesize($counter_name));
 fclose($f);
 
 $counterVal++;
 $f = fopen($counter_name, "w");
 fwrite($f, $counterVal);
 fclose($f); 
    ?>
    <em>No. of visitors : <?php echo $counterVal; ?></em>
</footer>
    
</body>
</html>