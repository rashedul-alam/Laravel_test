<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page - Dashboard Admin Template</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="../temp/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../temp/css/tooplate.css">
</head>

<body class="bg03">

<img src="01.jpg" alt="Smiley face :)" width="42" height="42">

    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon text-center"></i>
                            <h2 class="tm-block-title mt-3">Login</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">


                            <form method="post" class="tm-login-form">
                                <div class="input-group">
                                    <label for="username" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Username</label>
                                    <input name="username" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="username" required>
                                </div>
                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Password</label>
                                    <input name="password" type="password" class="form-control validate" id="password" required>
                                </div>
                                <div class="input-group mt-3">
                                    <button type="submit" class="btn btn-primary d-inline-block mx-auto" name="submit" value="Submit">Login</button>
                                </div>
                                
                            </form>
                            




                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light text-center">
                
            </div>
        </footer>
    </div>
</body>

</html>