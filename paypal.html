<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paypal Payment</title>
    <!--<script src="https://www.paypal.com/sdk/js?client-id=AYctE-D3dxfS-il0fdf8ErRSxOunGtq5VcORd7QpzQk65VXsG3PIPer6UNX0lClKTihzwOjCOKU_dESJ&currency=USD"></script>-->
</head>

<body style="background-color: orange;">
    
    <div id="smart-button-container">
        <div style="text-align: center; position: relative;top: 300px;">
            <div id="paypal-button-container"></div>
        </div>
    </div>

</body>

<script type="text/javascript">
  	
    function initPayPalButton() {
  paypal.Buttons({
    style: {
      shape: 'rect',
      color: 'blue',
      layout: 'vertical',
      label: 'paypal',
      
    },

    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{"amount":{"currency_code":"USD","value":100}}]
      });
    },

    onApprove: function(data, actions) {
      return actions.order.capture().then(function(orderData) {
        
        // Full available details
        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

        // Show a success message within this page, e.g.
        const element = document.getElementById('paypal-button-container');
        element.innerHTML = '';
        element.innerHTML = '<h1>Thank you for your payment!</h1>';

        // Or go to another URL:  actions.redirect('thank_you.html');
        
      });
    },

    onError: function(err) {
      console.log(err);
    }
  }).render('#paypal-button-container');
}
initPayPalButton();

</script>

</html>