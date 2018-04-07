<?php 
require_once 'inc/manager-db.php';
?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">World Discovery</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
                
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Home</a></li>
                <?php $continent='Asia'; ?> 
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="CountryByContinent.php?continent=<?php echo $continent ?>">Asie</a></li>

                <?php $continent='Africa'; ?> 
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="CountryByContinent.php?continent=<?php echo $continent ?>">Africa</a></li>

                <?php $continent='Europe'; ?>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="CountryByContinent.php?continent=<?php echo $continent ?>">Europe</a></li>

                <?php $continent='North America'; ?> 
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="CountryByContinent.php?continent=<?php echo $continent ?>">North America</a></li>

                <?php $continent='South America'; ?> 
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="CountryByContinent.php?continent=<?php echo $continent ?>">South America</a></li>

                <?php $continent='Antartica'; ?> 
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="CountryByContinent.php?continent=<?php echo $continent ?>">Antartica</a></li>

                <?php $continent='Oceania'; ?> 
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="CountryByContinent.php?continent=<?php echo $continent ?>">Oceania</a></li>
        </ul>
        </div>
      </div>
    </nav>
        <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
                <div class="row">
                <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                <strong>Your Favorite Source of geopolitical data</strong>
                </h1>
                <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5"></p>
                
                </div>
                </div>
        </div>
        </header>
