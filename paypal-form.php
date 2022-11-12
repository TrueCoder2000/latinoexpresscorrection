<?php

    include         ("connectSystem.php");

    $btnpaypal      = $_POST['btnPaypal'];
    $pricePaypal    = $_POST['pricePaypal'];
    $typeServices   = $_POST['nameServices'];


    if(isset($btnpaypal)){
       
        $query      = mysqli_query($connect, "INSERT INTO paymentlatino(modeservices,pricepaypal)VALUES('$typeServices','$pricePaypal')");

        if(empty($query)){
            
            echo 'Error...'.$typeServices;
            header("Refresh:1; url=index.html");
        }else{
            echo 'Data was sent with sucess';
            header("Refresh:1; url=index.html");
        }
    }

?>