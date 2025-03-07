<!DOCTYPE html>
<html lang="sk">
<?php
$file_path = "parts/header.php";
if(!include($file_path)) {
    echo"Failed to include $file_path";
}
?>
<body>
  <header class="container main-header">
  <div class="logo-holder">
    <a href="index.html"><img src="img/logo.png" height="40 "></a>
  </div>
  <nav class="main-nav">
    <ul class="main-menu" id="main-menu container">
      <li><a href="index.html">Domov</a></li>
      <li><a href="portfolio.html">Portfólio</a></li>
      <li><a href="qna.html">Q&A</a></li>
      <li><a href="kontakt.html">Kontakt</a></li>
    </ul>
    <a class="hamburger" id="hamburger">
      <i class="fa fa-bars"></i>
    </a>
  </nav>
</header>
  <main>
    <section class="banner">
      <div class="container text-white">
        <h1>Q&A</h1>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
          <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
        </div>
      </div>
    </section>

  </div>
  </main>

  <?php
  $file_path = "parts/footer.php";
  if(!include($file_path)) {
      echo"Failed to include $file_path";
  }
  ?>
