<?php
session_start();

// Create Account Function
function createAccount($name, $balance){
    $_SESSION['name'] = $name;
    $_SESSION['balance'] = $balance;

    echo "Account Created Successfully!";
}

// Deposit Money Function
function depositMoney($amount){
    if($amount > 0){
        $_SESSION['balance'] += $amount;
        echo "Money Deposited Successfully!";
    }else{
        echo "Enter Valid Amount!";
    }
}

// Withdraw Money Function
function withdrawMoney($amount){
    if($amount > 0 && $amount <= $_SESSION['balance']){
        $_SESSION['balance'] -= $amount;
        echo "Money Withdrawn Successfully!";
    }else{
        echo "Insufficient Balance or Invalid Amount!";
    }
}

// Check Balance Function
function checkBalance(){
    echo "Account Holder: " . $_SESSION['name'] . "<br>";
    echo "Available Balance: Rs. " . $_SESSION['balance'];
}

// Form Operations
if(isset($_POST['create'])){
    $name = $_POST['name'];
    $balance = $_POST['balance'];

    createAccount($name, $balance);
}

if(isset($_POST['deposit'])){
    if(isset($_SESSION['balance'])){
        $amount = $_POST['amount'];
        depositMoney($amount);
    }else{
        echo "Please Create Account First!";
    }
}

if(isset($_POST['withdraw'])){
    if(isset($_SESSION['balance'])){
        $amount = $_POST['amount'];
        withdrawMoney($amount);
    }else{
        echo "Please Create Account First!";
    }
}

if(isset($_POST['check'])){
    if(isset($_SESSION['balance'])){
        checkBalance();
    }else{
        echo "Please Create Account First!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Simple Banking System</h2>

<h3>Create Account</h3>

<form method="post">
    Enter Name:
    <input type="text" name="name" required>

    <br><br>

    Initial Balance:
    <input type="number" name="balance" min="0" required>

    <br><br>

    <input type="submit" name="create" value="Create Account">
</form>

<hr>

<h3>Deposit Money</h3>

<form method="post">
    Enter Amount:
    <input type="number" name="amount" min="1" required>

    <br><br>

    <input type="submit" name="deposit" value="Deposit">
</form>

<hr>

<h3>Withdraw Money</h3>

<form method="post">
    Enter Amount:
    <input type="number" name="amount" min="1" required>

    <br><br>

    <input type="submit" name="withdraw" value="Withdraw">
</form>

<hr>

<h3>Check Balance</h3>

<form method="post">
    <input type="submit" name="check" value="Check Balance">
</form>

</body>
</html>
