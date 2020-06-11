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
  <title>splashscreen</title>
</head>
<body>
<?php
  include 'partials/header.php';
?>
<form method="post" action="../../api/mail.php">
  <input type="hidden" name="to" value="<?= $email ?>">
  <div class="form-group">
      <label for="email">Votre email</label>
      <input type="email" class="form-control form-control-lg" placeholder="Email" required="required" name="email">
  </div>
<a href="views/home.php"> page home</a> <br/>
<a href="views/produit.php"> page produits option</a> <br/>
<a href="views/produitdisp.php"> page produit disponibilité</a> <br/>
<a href="views/produitequip.php"> page produit équipage</a> <br/>
<a href="views/produitgal.php"> page produit galerie</a> <br/>
<?php
  include 'partials/social.php';
  include 'partials/footer.php';
?>
<script src="assets/js/scripts.js"></script>
<script src="js/nav.js"></script>
</body>
</html>