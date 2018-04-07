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


    if(isset($_GET['idCountry']))
    {
        $AllByIdCountry = getAllByIdCountry($_GET['idCountry']);
        foreach ($AllByIdCountry  as $value): 

            $HeadOfState= $value->HeadOfState; 
            $GovernmentForm= $value->GovernmentForm; 
            $LifeExpectancy= $value->LifeExpectancy; 
            

        endforeach;
        ?>
            <div class="container">
                <section>
                <h1> <?php echo $_GET['nameCountry'] ?> </h1>
                    <form method="GET" action="traitementForm.php">
                        
                        HeadOfState : <input type="text"  name="HeadOfState" value="<?php echo $HeadOfState; ?> "><br>										
                        GovernmentForm : <input type="text" name="GovernmentForm" value="<?php echo $GovernmentForm; ?> "><br>	
                        LifeExpectancy : <input type="text" name="LifeExpectancy" value="<?php echo $LifeExpectancy; ?> "><br>
                        <input type="hidden" name ="idCountry"  value="<?php echo ($_GET['idCountry']); ?>">
                        <input type="submit" value="Update"> 
                    </form>
                </section>

    </div>
    <?php } 
    
    

if(isset($_GET['idCity']))
    {
        $AllByIdCity = getAllByIdCity($_GET['idCity']);
        foreach ($AllByIdCity  as $value): 

            $District= $value->District; 
            $Population= $value->Population;  
            

        endforeach;
        ?>
            <div class="container">
                <section>
                    <h1> <?php echo $_GET['nameCountry'] ?> </h1>
                    <form method="GET" action="traitementForm.php">
                        
									
                        Population : <input type="text" name="Population" value="<?php echo $Population; ?> "><br>	
                    
                        <input type="hidden" name ="idCity"  value="<?php echo ($_GET['idCity']); ?>">
                        <input type="submit"  value="Update"> 
                    </form>
                </section>

    </div>
    <?php } ?>


    
    

    



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
