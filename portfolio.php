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
            <div class="logo-holder">
                <a href="index.html"><img src="img/logo.png" height="40 "></a>
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
                    <h1>Portfólio</h1>
                </div>
            </section>
              <section class="container">
                <div class="row">
                  <div class="col-25 portfolio text-white text-center" id="portfolio-1">
                      Web stránka 1
                  </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-2">
                        Web stránka 2
                    </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-3">
                        Web stránka 3
                    </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-4">
                        Web stránka 4
                    </div>
                </div>
                <div class="row">
                    <div class="col-25 portfolio text-white text-center" id="portfolio-5">
                        Web stránka 5
                    </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-6">
                        Web stránka 6
                    </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-7">
                        Web stránka 7
                    </div>
                    <div class="col-25 portfolio text-white text-center" id="portfolio-8">
                        Web stránka 8
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