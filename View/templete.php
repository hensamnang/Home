<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Miterm_Exam</title>
    <link rel="stylesheet" href="View/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="View/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Miterm_Exam</h1>
                <hr>
                <?php
                    include 'View/'. $data['miterm_exam'].".php";
                ?>
            </div>
        </div>
    </div>
</body>
</html>