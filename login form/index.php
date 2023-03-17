<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>LOGIN</title>
</head>
<body>
    <form action="form.php" method ="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col max-width: 20%;"></div>
                <div class="col max-width: %30;" >
                    <h5 class="text-center">LOGIN FORM</h5>
                    <div class="text-center">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="user">
                        </div>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" name="pass">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Check me out</label>
                    </div>
                    <div class="d-grid mx-auto">
                        <input type="submit" name="submit" class="btn btn-primary" value="submit">
                    </div>
                </div>
            </div>        
        </div>
    </div>
    <div class="col max-width:50%;"></div>
    </form>
</body>
</html>