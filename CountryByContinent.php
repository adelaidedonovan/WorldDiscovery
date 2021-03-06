<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WORLD DISCOVERY</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">

  </head>

  <body id="page-top">

  
  <?php  
    require_once('navbar.php'); 
      $allContinentByCountry=getAllCountryByContinent($_GET['continent']);
  ?>  
<div class="container">


    <section>
    <h1> <?php echo $_GET['continent'] ?> </h1>
      <table class="table table-striped" border=2 >
        <tr>
          <th> Id             </th>
          <th> Code           </th>
          <th> Name           </th>
          <th> Continent      </th>
          <th> Region         </th>
          <th> IndepYear      </th>
          <th> Population     </th>
          <th> LifeExpectancy </th>
          <th> HeadOfState    </th>
          <th> Language  </th>
          <th> City          </th>
          <th>update</th>
          
        </tr>

        <?php
            foreach ($allContinentByCountry as $value):
        ?>

        <tr>
            <td><?php echo $value->id; ?></td>
            <td><?php echo $value->Code; ?></td>
            <td><?php echo $value->Name; ?> </a> </td>
            <td><?php echo $value->Continent; ?></td>
            <td><?php echo $value->Region; ?></td>
            <td><?php echo $value->IndepYear; ?></td>
            <td><?php echo $value->Population; ?></td>
            <td><?php echo $value->LifeExpectancy; ?></td>
            <td><?php echo $value->HeadOfState; ?></td>
            <td> <a href=languageByCountry.php?idCountry=<?php echo $value->id ?>&nameCountry=<?php echo $value->Name ?> > <i class="fas fa-comments fa-2x"></i> </a> </td>  
            <td> <a href=cityByCountry.php?idCountry=<?php echo $value->id ?>&nameCountry=<?php echo $value->Name ?> ><i class="fas fa-home fa-2x"></i> </a> </td>   
            <td><a href=form.php?idCountry=<?php echo $value->id ?>&nameCountry=<?php echo $value->Name ?> >  <i class="fas fa-edit fa-2x"></i>  </a></td>
        </tr>

        <?php
        endforeach;
        ?>

    </section>

    </div>

  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
