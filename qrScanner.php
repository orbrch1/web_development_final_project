<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="includes/3rd_parties/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
    <link rel="stylesheet" href="includes/3rd_parties/bootstrap-toggle/bootstrap-toggle.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="includes/3rd_parties/jquery-3.4.1.min.js"></script>
    <script src="includes/3rd_parties/bootstrap.min.js"></script>
    <script src="includes/3rd_parties/bootstrap-toggle/bootstrap-toggle.min.js"></script>
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
                            <a class="nav-link" href="account-details.php">Create Account</a>
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
           <div class="QrScanner">
               <h4>QR Scanner</h4>
               <a id="QR" href="#"></a>
           </div>

           <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <a class="btn btn-primary btn-block btn-danger mainActionBtn" href="#">cancel</a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <a class="btn btn-secondary btn-block btn-success mainActionBtn" href="#">Scan the QR to accept you got the money</a>
                    </div>
                </div> 
            </div>
       
       </main>
    </div>
</body>
</html>