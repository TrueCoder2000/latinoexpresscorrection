<?php
    include     ("connectSystem.php");

    if(isset($_GET['id'])){
        $id         = $_GET['id'];

        $remove     = mysqli_query($connect, "DELETE FROM paymentlatino WHERE id='$id'");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<script src="https://www.paypal.com/sdk/js?client-id=AXDGX0fveOow4Z38EDNBl8d9_hrIMAudb4RrITmWuZLx41yLJSGNb73p2muF2MNItYKoLqhKrOql17gX&currency=USD"></script>-->
    <!--<script src="https://www.paypal.com/sdk/js?client-id=AYSdQr0MrLXue51RT2GJVp8MM89aOczy2sJpGRHwjLUpsxU5cVo-WkqyjyW0KLtc-qKdPdgWK8OGFEQIt&currency=USD"></script>-->
    <script src="https://www.paypal.com/sdk/js?client-id=AYctE-D3dxfS-il0fdf8ErRSxOunGtq5VcORd7QpzQk65VXsG3PIPer6UNX0lClKTihzwOjCOKU_dESJ&currency=USD"></script>
    <title>Document</title>

    <style>

        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body,html{
            font-family: Arial, Helvetica, sans-serif;
            scroll-behavior: smooth;
        }

        .div-text-mycart{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .div-text-mycart h1{
            padding: 5px;
        }

        .div-table-mycart{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        table{
            border: 1px black solid;
        }

        table th{
            border: 1px black solid;
            padding: 5px;
            background-color: black;
            color: white;
            text-align: center;
        }

        table td{
            text-align: center;
        }

        .div-price-total{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #paypal-button-container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>


</head>

<body>

    <div class=" container container-mycart">

        <div class="div-text-mycart">
            <h1>Customer Services Cart</h1>
        </div><br><br>

        <div class="div-table-mycart">
            <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Price $</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                            $query  = mysqli_query($connect, "SELECT * FROM paymentlatino");
                            WHILE ($linha=mysqli_fetch_array($query)){
                        ?>

                        <tr>
                            <td><?php echo $linha ['id'] ?></td>
                            <td><?php echo $linha['modeservices'] ?></td>
                            <td>3</td>
                            <td><?php echo $linha ['pricepaypal'] ?></td>
                            <td><a href="?id=<?php echo $linha['id']; ?>">Remove</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
        </div><br><br>

        <div class="div-price-total">

        <?php 

            $query_sum      = mysqli_query($connect, "SELECT SUM(pricepaypal) AS price_total FROM paymentlatino");
            $result         = mysqli_fetch_array($query_sum);
            $price = number_format($result['price_total']);

            echo "<h4>Total:&nbsp $</h4>".$price;
        ?>
        </div><br><br><br>


        <?php
                //$paypal_url='https://www.paypal.com/sdk/js?client-id=AYctE-D3dxfS-il0fdf8ErRSxOunGtq5VcORd7QpzQk65VXsG3PIPer6UNX0lClKTihzwOjCOKU_dESJ&currency=USD'; // URL de l'API Paypal de teste
                //$paypal_id='expresslatino@aol.com'; // Business email ID
                //$client="client";
                //$prix = number_format($result['price_total']);
?>
<!--<h4>Bien venu, <?php //echo $client; ?></h4>-->

<!--<div class="product">            
	<div class="image">-->
		<!--<a href="http://www.oujood.com/" title="Cours et tutoriels  en ligne pour apprendre le développement Web" style="text-decoration: none;" rel="dofollow"><img src="http://www.oujood.com/images/logo.png" /></a>-->
	<!--</div>
	<div class="name">-->
		<!--PHP_OUJOOD Payement-->
	<!--</div>
	<div class="price">-->
		<!--Prix:--><?php //echo $prix; ?>
	<!--</div>
	<div class="btn">
	<form action="<?php //echo $paypal_url; ?>" method="post" name="frmPayPal1">
	<input type="hidden" name="business" value="<?php //echo $paypal_id; ?>">
	<input type="hidden" name="cmd" value="_xclick">-->
	<!--<input type="hidden" name="item_name" value="OUJOOD Payment">-->
	<!--<input type="hidden" name="item_number" value="1">
	<input type="hidden" name="credits" value="510">
	<input type="hidden" name="userid" value="1">
	<input type="hidden" name="amount" value="<?php //echo $prix; ?>">-->
	<!--<input type="hidden" name="cpp_header_image" value="http://www.oujood.com/images/logo.png">-->
	<!--<input type="hidden" name="no_shipping" value="1">
	<input type="hidden" name="currency_code" value="USD">
	<input type="hidden" name="handling" value="0">
	<input type="hidden" name="cancel_return" value="http://localhost/php-paypal/cancel.php">
	<input type="hidden" name="return" value="http://localhost/php-paypal/success.php?tx=83437E384950D&st=Completed&amt=90.00&cc=USD&cm=&item_number=1">
	<input type="image" src="https://www.sandbox.paypal.com/fr_FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - Le moyen le plus sûr et le plus simple de payer en ligne !">
	<img alt=" PayPal - The safer, easier way to pay online!" border="0" src="https://www.sandbox.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
	</form> 
	</div>
</div>-->
    </div>

    <div id="paypal-button-container"></div>

    <script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
      return actions.order.create({
         "purchase_units": [{
            "amount": {
              "currency_code": "USD",
              "value": <?php echo $price; ?>,
              /*"breakdown": {
                "item_total": {  /* Required when including the items array */
                  //"currency_code": "USD",
                  //"value": "100"
                //}
              //}
            },
            /*"items": [
              {
                "name": "First Product Name", /* Shows within upper-right dropdown during payment approval */
                //"description": "Optional descriptive text..", /* Item details will also be in the completed paypal.com transaction view */
                /*"unit_amount": {
                  "currency_code": "USD",
                  "value": "50"
                },
                "quantity": "2"
              },
            ]*/
          }]
      });
    },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>

    <!--<script>
              paypal.Buttons({
                style:{
                    color:'blue',
                    shape:'pill',
                    label:'pay'

                },
                createOrder: function(data, actions){
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: 1800
                            }
                        }]
                    });
                }
            }).render('#paypal-button-container');

    </script>-->


</body>

</html>