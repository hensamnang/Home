<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel= "stylesheet" href="View/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="View/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-success">Hello the World</h2>
                <hr>
                <?php
                    include "View/".$data['page'].".php";
                ?>
            </div>
        </div>
    </div>
</body>
</html>