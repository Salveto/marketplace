<?php 
    require 'connection.php';
?>


<?php
    $img = array();
    $name = array();
    if(isset($_GET['category'])) {
        $category = $_GET['category'];
        $sql =  "SELECT imgname, imgaddress FROM images WHERE imgcat='$category'";
    }
    else {
        $sql = "SELECT imgname, imgaddress FROM images";
    }
    
    if($result = mysqli_query($con, $sql)) {
        while($row = mysqli_fetch_assoc($result))
        {
                
                $name[] = $row['imgname'];
                 $img[] = $row['imgaddress'];
                 
        }
    }
    
    
?>
    
