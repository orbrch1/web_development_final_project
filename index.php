<?php
    include(getcwd() . '\includes\session.php');
?>

<!DOCTYPE html>
<html>
<!-- meta data -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, use-scalable=0">
    <link rel="stylesheet" type="text/css" href="includes/3rd_parties/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
    <link rel="stylesheet" href="includes/3rd_parties/bootstrap-toggle/bootstrap-toggle.min.css"></script>

    <script src="includes/3rd_parties/jquery-3.4.1.min.js"></script>
    <script src="includes/3rd_parties/bootstrap.min.js"></script>
    <script src="includes/utils.js"></script>
    <script src="includes/scripts.js"></script>
    <script src="includes/3rd_parties/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <title>Lavado De Papel</title>
</head>
<body id="">
    <div id="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">Lavado De Papel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
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
                        <h3 class="text-center">Choosing a role</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <a class="btn btn-primary btn-block mainActionBtn" href="puller-list.php">Depositor</a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <a class="btn btn-secondary btn-block mainActionBtn" href="depositor-list.php">Puller</a>
                    </div> 
            </div>
    </main>

    <script>
        startRefreshTransactions(<?php echo $userDetails["Id"] ?>);
    </script>

    <!-- Button trigger modal -->
    <button id="openTransactionModalBtn" type="button" class="btn btn-primary hidden" data-toggle="modal" data-target="#transactionModal"></button>

    <!-- Modal -->
    <div class="modal fade" id="transactionModal" tabindex="-1" role="dialog" aria-labelledby="transactionModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="transactionModalLabel">New Transaction Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="transactionDetails"></span>
                <input id="generatedCodeInput" class="form-control" type="text" placeholder="Insert The generated code">
            </div>
            <div class="modal-footer">
                <button onclick="applyGeneratedCode()" id="applyGeneratedCodeBtn" type="button" class="btn btn-success">Save changes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="dismissTransaction()">Decline</button>
            </div>
            </div>
        </div>
    </div>

</body>
</html>