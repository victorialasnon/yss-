<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  
  <link id="codyframe" rel="stylesheet" href="assets/css/style.css">
  <!-- browsers not supporting CSS variables -->
  <script>
    if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
  </script>
  <title>Page-Produit_galerie</title>
</head>
<body>

<?php
  include 'partials/header.php';
?>

<?php
  include 'partials/social.php';
  include 'partials/footer.php';
?>

</body>
</html>