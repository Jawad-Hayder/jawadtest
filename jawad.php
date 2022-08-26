
<?php

$name=strtoupper($_POST["fname"]." ".strtoupper($_POST["lname"]));
$def= "<h1>The Student is : $name </h1>";
  

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jawad Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
</head>
<body>



    <script src="app.js"> </script>

    <h1>HELLO</h1>
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
<body>


    <div class="container">

        <form action="play.php" method="POST" class="form">

            <div>
                <label>Enter First name: </label><br>
                <input type="text" name="name" class="form-control"><br>
            </div>

            <input type="submit" class="btn btn-primary">

            <div class="alert alert-success">


                <?php


                $student = [ "JAWAD"=>["99","95","100","100","100","100","100"],
                             "MURTADA"=>["99","89","85","84","90","100","99"],
                             "ALI"=>["98","98","99","100","99","98","90"],
                             "ANAS"=>["90","30","98","90","100","99","90"],
                             "JABER"=>["100","99","100","100","100","100","100"],
                             "SAAD"=>["100","90","99","100","90","100","100"],
                             "SAATAR"=>["100","99","99","90","100","79","97"]

                            ];

              $sub=["Islamic","Arabic","English","Biology","Math","Chemistry","Physics"];
            
                if( "JAWAD" === $name || "MURTADA" === $name || "ALI" === $name || "JABER" === $name || "SAAD" === $name || "SAATAR" === $name 
                 || "ANAS" === $name ) { 
                    

                    for ($i=0 ; $i <= 6 ; $i++ ) {

                      $nameA=$student[$name][$i];
                      $sub1=$sub[$i];
                      
                      echo "<h2>$sub1 : $nameA</h2>";
                    }  
            
                }elseif($name == NULL){
                echo "";
                }else{
                echo "Try Another Name";} 

         
                ?>




            </div>



        </form>



    <div>


<body>