<?php
    session_start();
    require 'connection.php';

?>
<?php
    $cars = array('audi.jpeg','benz.jpeg','bmw.jpeg','ferrari-monza.jpeg','hondacivic.jpeg','alto.jpg','coupe.jpg','ferrari.jpg','jaguar.jpg','lamborgini.jpg','police.jpg','suzuki.jpg');
    $imgaddress = array();
    $imgcat = 'cars';
    $home = 'resources/images/';
    $query = "";
    for($x=0; $x < sizeof($cars); $x++) {
        $imgaddress =  mysqli_real_escape_string($con, $home . $cars[$x]);
        $path_parts = pathinfo($imgaddress);
        $imgname = $path_parts['filename'];
        $query .= "INSERT INTO images(imgname, imgcat, imgaddress) VALUES('$imgname','$imgcat','$imgaddress');";
        
    }
    mysqli_multi_query($con, $query);
  
    
    
?>