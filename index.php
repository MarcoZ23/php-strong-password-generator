<?php 
require_once 'functions.php';
  
   // var_dump($_GET) ; 

   if (isset($_GET['lunghezza'])) {
        echo generator($_GET['lunghezza']);
    } 

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Password generator</title>
</head>
<body>

    <div class="container bg-dark mb-3">
        <h1 class="text-center text-secondary">Strong Password Generator</h1>
        <h3 class="text-center text-white mt-3">Genera una password sicura</h3> 
        <div class="container bg-white text-dark">
            <form class="row justify-content-between p-3" action="index.php" method="get">
                <label class="col-form-label col-3">Lunghezza password:</label>
                <div class="col-3">
                    <input class="form-control border border-primary" type="number" name="lunghezza">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Genera</button>
            </form>
        </div>
    </div>
</body>
</html>