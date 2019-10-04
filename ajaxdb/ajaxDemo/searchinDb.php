<?php

$connection=mysqli_connect('localhost','root', '' , 'car_rent');
$search=$_POST['search'];
if(!empty($search)){
    $query="SELECT * FROM car WHERE car LIKE '$search%'" ;
    $res=mysqli_query($connection,$query);
    if(!$res){
        die('Query failed or'.mysqli_error($connection));
    }

    while($result=mysqli_fetch_array($res)){
        $row=$result['car'];
        ?>
        <ul>
            <?php echo '<li>'.$row.' in the stock </li>';?>
        </ul>
        <?Php

    }
}

?>