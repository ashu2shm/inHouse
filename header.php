<?php
parse_str(parse_url("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", PHP_URL_QUERY), $params);

$utm_source = $params['utm_source'] ?? 'Website';
$utm_medium = $params['utm_medium'] ?? 'MBBSInRussia';
$utm_campaign = $params['utm_campaign'] ?? 'Organic';

?>

<!DOCTYPE html>
<html lang="zxx">
    

<head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
        <link rel="stylesheet" href="assets/css/flaticon_dolt.css">
        <link rel="stylesheet" href="assets/css/swiper.bundle.min.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/dark-theme.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="icon" type="image/png" href="favicon.ico" >


       <!---------Organic Seo---------------->
       <meta name="google-site-verification" content="Gb4qH2F-ptfvwb6noNbqYHgQYSYapV77HLNqxRmUBwc" />
      


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-158FC2776G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-158FC2776G');
</script>
        <!-- <link rel="icon" type="image/png" href="assets/img/favicon.webp"> -->