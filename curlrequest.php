<?= 

require_once 'postrequest.php';

?>


<script type="text/javascript">
var wpwlOptions = {style:"card"}


</script>

<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Payment Widget .js file -->
    <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId={checkoutId}"></script>

</head>
<body>

<?php print_r($responseData) ?>

<form name="datainput" method="post" action="postrequest.php"> 
    <input type="text" name="mail"/> <br />
    <input type="password" name="password"/><br />
    <input type="submit"  value="continue"/>
</form>

<form action="{shopperResultUrl}" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>



<!-- JQuery and stripe CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



</body>
</html>