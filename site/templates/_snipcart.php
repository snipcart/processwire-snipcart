<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<?php
  $api_key = $pages->get('/')->Snipcart_API_Key;
  echo "<script src='https://cdn.snipcart.com/scripts/2.0/snipcart.js' data-api-key='$api_key' id='snipcart'></script>";
?>

<link href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css" rel="stylesheet" type="text/css" />
