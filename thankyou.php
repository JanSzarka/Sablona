<!DOCTYPE html>
<html lang="en">
<?php
$file_path = "parts/header.php";
if(!include($file_path)) {
    echo"Failed to include $file_path";
}
?>
<body>
    <header class="container main-header">
        <div>
          <a href="index.html">
            <img src="img/logo.png" height="40">
          </a>
        </div>
      <nav class="main-nav">
        <ul class="main-menu" id="main-menu">
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
          <h1>Ďakujeme</h1>
        </div>
      </section>
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
              <h2>Ďakujeme za vyplnenie formulára</h2>
          </div>
        </div>
      </section>


    </main>

<?php
$file_path = "parts/footer.php";
if(!include($file_path)) {
    echo"Failed to include $file_path";
}
?>