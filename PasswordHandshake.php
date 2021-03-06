<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, use-scalable=0">
        <link rel="stylesheet" type="text/css" href="includes/3rd_parties/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
        <link rel="stylesheet" href="includes/3rd_parties/bootstrap-toggle/bootstrap-toggle.min.css">
        <script src="includes/3rd_parties/jquery-3.4.1.min.js"></script>
        <script src="includes/3rd_parties/bootstrap.min.js"></script>
        <script src="includes/scripts.js"></script>
        <script src="includes/3rd_parties/bootstrap-toggle/bootstrap-toggle.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
        
    <title>Papel</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Lavado De Papel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="depositor-list.php">Widthraw<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="puller-list.php">Depositing<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">History <span class="fas fas-factory"></span></a>
                        </li>
                        <li class="nav-item">
                            <!-- If user is registered - display Log Out button; Otherwise - Display Create Account-->
                            <a class="nav-link" href="account-details.php">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="includes/logout.php">Log Out</a>
                        </li>
                        <li class="nav-item">
                            <h2 class="sumOfCash" href="#">₪
                                <?php
                                    echo $userDetails["Amount"];
                                    echo substr($userDetails["FullName"], 0, strpos($userDetails["FullName"], ' '));
                                ?>
                            </h2>
                        </li>
                    </ul>
                </div>
            </nav>          
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <br>
                        <h3 class="text-center">Get a password</h3>
                        <br><br>
                        <br><br>
                        <h3 class="text-center">a password to the donor</h3>
                    </div>
                </div>
                <div class="row">
                        <form class="form-inline">
                                <div class="form-group">
                                  <label for="inputPassword6"></label>
                                  <br><br>
                                  <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                                  <small id="passwordHelpInline" class="text-muted">
                                </div>
                        </form>
                </div>
                <br><br>
                <br><br>

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <a class="btn btn-primary btn-block btn-danger mainActionBtn" href="depositor-list.php">cancel</a>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <a class="btn btn-secondary btn-block btn-success mainActionBtn" href="#">got the password</a>
                        </div>
                    </div> 
                </div>

            </div>
        </main>
    </div>
</body>
</html>