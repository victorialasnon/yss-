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
  <title>Home_connectee</title>
</head>
<body>
<?php
  include 'partials/header.php';
?>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d885112.1336894775!2d7.032342173008378!3d43.794144147244765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1591861473675!5m2!1sfr!2sfr" 
width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<script src="assets/js/scripts.js"></script>

<?php
include 'partials/social.php';
include 'partials/footer.php';
?>

</body>
</html>