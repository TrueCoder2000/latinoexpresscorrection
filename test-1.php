<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div id="paypal-button-container-P-1LP9655436227924GMNDXBDQ"></div>
<script src="https://www.paypal.com/sdk/js?client-id=AaDKAiCYLoS9ZgQj8zoN69NYMncWrbe4tsNohjc1evsJ1yH7AQr7flexKUIwQnGk3pa_MSjyWtueNDdy&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'blue',
          layout: 'horizontal',
          label: 'paypal'
      },
      createSubscription: function(data, actions) {
        return actions.subscription.create({
          /* Creates the subscription */
          plan_id: 'P-1LP9655436227924GMNDXBDQ',
          quantity: 1 // The quantity of the product for a subscription
        });
      },
      onApprove: function(data, actions) {
        alert(data.subscriptionID); // You can add optional success message for the subscriber here
      }
  }).render('#paypal-button-container-P-1LP9655436227924GMNDXBDQ'); // Renders the PayPal button
</script>

</body>
</html>