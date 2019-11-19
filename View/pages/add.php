<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Miterm_Exam</title>
    <link rel="stylesheet" href="View/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="View/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
    <div class="container  mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 shadow">
                <form action="index.php?action=add_data" method="post"> 
                    <div class="form-group">
                        <label for="">FirstName</label>
                        <input type="text" name="fname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">LastName</label>
                        <input type="text" name="lname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select name="gender" id="gender">
                            <option type="radio" value="F">Female</option>
                            <option type="radio" value="M">Male</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Province</label>
                        <input type="text" name="province" class="form-control">
                    </div>
                    <a href="index.php?action=view" class="btn btn-success">Back</a>
                    <input type="submit" class="btn btn-info float-right mb-5">
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>