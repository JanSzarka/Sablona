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
        <h1>Kontakt</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="col-100 text-center">
          <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em
          ></strong></p>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-50"> 
          <h3>Máte otázky?</h3>
          <p>Incididunt mollit quis eiusmod tempor voluptate duis eu enim amet excepteur cupidatat magna velit. </p> 
          <p>Velit id ad laborum velit commodo.</p>
          <p>Consectetur laborum aliqua nulla anim cupidatat consectetur est veniam cupidatat.</p>
        </div>
        <div class="col-50 text-right">
          <h3>Napíšte nám</h3>
          <form id="contact" action="thankyou.html">
            <input type="text" placeholder="Vaše meno" id ="meno"  required><br>
            <input type="email" placeholder="Váš email" id="email" required><br>
            <textarea name="" placeholder="Vaša správa" id="sprava"></textarea><br>
            <input type="checkbox" name="" id="" required>
            <label for=""> Súhlasím so spracovaním osobných údajov.</label><br>
            <input type="submit" value="Odoslať">
          </form>
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