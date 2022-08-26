<?php include("jawad.html")   ?>


<div class="alert alert-success">
<?php


$name=strtoupper($_POST["name"]);
$def= "<h1>The Student is : $name </h1>";




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
                  }else{echo "Try Another Name";
                }
                  



                 ?></div>


