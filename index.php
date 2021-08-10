<?php
                
     $fahrenheit = $_GET["name"]; 
     
     function calculateCelsius($fahrenheit){
        $celsius = floor(($fahrenheit-32)*(5/9));
        return $celsius;
     }
               
    if( $_GET["name"])
    {
        $celsius = calculateCelsius($_GET["name"]);
    }

    if ($celsius <= 5){
        $temp = "very cold";
        $img = "verycold.png";
    }
    elseif ($celsius > 5 && $celsius <= 10) {
        $temp = "cold";
        $img = "cold.png";
    }
    elseif ($celsius > 10 && $celsius <= 15) {
        $temp = "pleasant";
        $img = "pleasant.png";
    }  
    elseif ($celsius > 15 && $celsius <= 20) {
        $temp = "warm";
        $img = "warm.png";
    } 
    elseif ($celsius > 20) {
        $temp = "hot";
        $img = "hot.png";
    }   
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Fahrenheit to Celcius</title>
  </head>
  <body class="d-flex justify-content-center align-items-center">
  
   
        <div class="d-flex flex-column justify-content-center align-items-center bg-white interface shadow p-2 text-white border border-primary">
            <?php 
                echo    "<p class='text-dark m-0'> ".$celsius. " °Celsius</p>
                        <p class='text-dark text-muted m-0'> ".$temp."</p>
                        <img src='icons/".$img."' class='img-fluid' alt='sun'>" 
            ?>
            
            <form action= "" method= "GET" class="d-flex flex-column justify-content-center align-items-center">
                <div class="mb-3 ">
                    <label form="Fahrenheit" class="form-label text-dark m-0 text-center">Fahrenheit</label>
                    <input type="text"   placeholder="<?php
                    if( $_GET["name"]) echo $fahrenheit.'°' ?>" name="name" >
                </div>
                <button type="submit" class="btn btn-primary text-center my-1">Submit</button>
            </form>
        </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>