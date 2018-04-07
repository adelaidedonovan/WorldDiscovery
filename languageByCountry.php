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
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
      $AllLanguageByCountry=getAllLanguageByCountry($_GET['idCountry']);
  ?>  
<div class="container">


    <section>
    <h1> <?php echo($_GET['nameCountry']); ?> </h1>
      <table class="table table-striped" border=2 >
        <tr>          
          <th> Country</th>
          <th> Percentage         </th>
          <th> Language     </th>
        </tr>

        <?php
            foreach ($AllLanguageByCountry as $value):
        ?>

        <tr>
            <td><?php echo $value->Name; ?></td>
            <td><?php echo $value->Percentage; ?> %</td>
            <td><?php echo $value->NameLanguague; ?></td>
        
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
