<?php
    include(getcwd() . '\dbconnect.php');

    $isNewUser =  isset($_GET['newUser']);
    if(!$isNewUser) {
        include(getcwd() . '\includes\session.php');
    }
?>

<!DOCTYPE html>
<html>
<!-- meta data -->
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="includes/3rd_parties/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="includes/3rd_parties/datepicker-bootstrap/css/datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="includes/3rd_parties/jquery-3.4.1.min.js"></script>
    <script src="includes/3rd_parties/bootstrap.min.js"></script>
    <script src="includes/3rd_parties/datepicker-bootstrap/js/bootstrap-datepicker.js"></script>
    <script src="includes/utils.js"></script>
    <script src="includes/account-details.js"></script>
    <title>Lavado De Papel - Create Account</title>
</head>
<body id="">
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
                        <li class="nav-item">
                            <a class="nav-link" href="depositor-list.php">Widthraw<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="puller-list.php">Deposite<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">History <span class="fas fas-factory"></span></a>
                        </li>
                        <li class="nav-item active">
                            <!-- If user is registered - display Log Out button; Otherwise - Display Create Account-->
                            <a class="nav-link" href="#">Account<span class="sr-only">(current)</span></a>
                        </li>
                        <?php
                            if(!$isNewUser) {
                                echo " <li class='nav-item'>";
                                echo "<a class='nav-link' href='includes/logout.php'>Log Out</a>";
                                echo "</li>";
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="text-center"><?php echo $isNewUser? 'Create New Account' : 'Edit Account' ?> </h3>
                    </div>
                </div>

                <form id="createAccountForm">
                    <div class="form-group row">
                        <label for="fullName" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-6">
                            <input required type="text" name="fullName" class="form-control" id="fullName" placeholder="Insert Full Name" value='<?php echo isset($userDetails["FullName"]) ? $userDetails["FullName"] : null ?>'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="userName" class="col-sm-2 col-form-label">User Name</label>
                        <div class="col-sm-6">
                            <input required type="text" name="userName" class="form-control" id="userName" placeholder="Insert User Name"  value='<?php echo isset($userDetails["UserName"]) ? $userDetails["UserName"] : null ?>'>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="birthdate" class="col-sm-2 col-form-label">Birth Date</label>
                        <div class="col-sm-6">
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" name="birthdate" id="birthdate" class="form-control" data-date-format="mm/dd/yyyy">
                                    <div class="input-group-addon">
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                            </div>
                        </div>                 
                    </div> -->
                    <div class="form-group row">
                        <label for="userId" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-6">
                            <!-- TODO: add this validation: pattern="[0-9]{9}" -->
                            <input required type="text" name="userId" class="form-control" id="userId" maxlength="9" placeholder="Insert ID Number (9 Digits)"  value='<?php echo isset($userDetails["UserId"]) ? $userDetails["UserId"] : null ?>'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input required type="password" name="password" class="form-control" id="password" maxlength="32" placeholder="Insert a password"  value='<?php echo isset($userDetails["Password"]) ? $userDetails["Password"] : null ?>'>
                        </div>
                    </div>
                        <div class="form-group row">
                            <label for="bankName" class="col-sm-2 col-form-label">Bank's Name</label>
                            <div class="col-sm-6">
                                <input required type="text" class="form-control" name="bankName" id="bankName" placeholder="Insert Bank's name"  value='<?php echo isset($userDetails["BankName"]) ? $userDetails["BankName"] : null ?>'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bankAccountNumber" class="col-sm-2 col-form-label">Bank Account number</label>
                            <div class="col-sm-6">
                                <input required type="text" class="form-control" pattern="[0-9]{6,10}" name="bankAccountNumber" id="bankAccountNumber" placeholder="Insert Account Number"  value='<?php echo isset($userDetails["BankAccountNumber"]) ? $userDetails["BankAccountNumber"] : null ?>'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="branchNumber" class="col-sm-2 col-form-label">Branch Number</label>
                            <div class="col-sm-6">
                                <input required type="text" class="form-control" name="branchNumber" id="branchNumber" placeholder="Insert branch number"  value='<?php echo isset($userDetails["BranchNumber"]) ? $userDetails["BranchNumber"] : null ?>'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="amount" class="col-sm-2 col-form-label">Amount</label>
                            <div class="col-sm-6">
                                <input required type="text" class="form-control" name="amount" id="amount" placeholder="Amount of money in the account"  value='<?php echo isset($userDetails["Amount"]) ? $userDetails["Amount"] : null ?>'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="actions" class="col-sm-2 col-form-label">Actions</label>
                            <div class="col-sm-8 row">
                                <div class="col-sm-2">
                                    <label>Puller<input class="form-control" type="checkbox" name="isPuller" id="isPuller" <?php echo isset($userDetails["IsPuller"]) && $userDetails["IsPuller"] == "1" ? 'checked' : '' ?>></label>
                                </div>
                                <div class="col-sm-2">
                                    <label>Depositor<input class="form-control" type="checkbox" name="isDepositor" id="isDepositor"  <?php echo isset($userDetails["IsDepositor"]) && $userDetails["IsDepositor"] == "1" ? 'checked' : '' ?>></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="amountToDeposit" class="col-sm-2 col-form-label">Amount To Deposit</label>
                            <div class="col-sm-6">
                                <input required type="text" class="form-control" name="amountToDeposit" id="amountToDeposit" placeholder="Amount of money to deposit"  value='<?php echo isset($userDetails["AmountToDeposit"]) ? $userDetails["AmountToDeposit"] : null ?>'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="amountToWithdraw" class="col-sm-2 col-form-label">Amount To Withdraw</label>
                            <div class="col-sm-6">
                                <input required type="text" class="form-control" name="amountToWithdraw" id="amountToWithdraw" placeholder="Amount of money to withdraw"  value='<?php echo isset($userDetails["AmountToWithdraw"]) ? $userDetails["AmountToWithdraw"] : null ?>'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                    <div class="col-6 col-form-label">
                                    </div>
                                <button type="submit" class="btn btn-primary btn-block mainActionBtn text-center">Confirm</button>
                                <!-- <button id="submitAccount" type="submit" class="btn btn-success btn-lg btn-block" href="index.html">Confirm</button> -->
                            </div>
                        </div>
                     </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>