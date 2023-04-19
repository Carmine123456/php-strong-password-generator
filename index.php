<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
</head>
<body>

    <?php

    function passwordGenerator($length) {
        $passwordlLetter = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@?.$';
        $passwordRandom = '';
        for ($i = 0; $i < $length; $i++) {
            $passwordRandom .= $passwordlLetter[rand(0, strlen($passwordlLetter) - 1)];
        }
        return $passwordRandom;
    }
    
    
    ?>

    <div class="container">
        <div class="row">
            <h1 class='text-center'>Strong Password Generator</h1>
            <h2 class='text-center'>Genera una password sicura</h2>
            <form method='get' action='index.php'>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Lunghezza Password</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>

            </form>
        </div>
        <?php 
        
        if(isset($_GET['email'])){
            
           echo passwordGenerator($_GET['email']);
        
        }
            
            
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>