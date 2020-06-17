<?php
$amount=$_POST['Amount'];
$payment=$_POST['payment'];
$roi=$_POST['roi'];
if(isset($_POST['Amount']) && isset($_POST['payment']) && isset($_POST['roi'])){
    $p= $amount;
    $n=$payment;
    $i=$roi/1200;
    $r=$roi;
    $fv=$p * ((pow((1 + $i),$n) - 1) / $i) * (1 + $i);
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SIP Monthly Calculator</title>
    </head>
    <body>
          <link rel="stylesheet" href="calculator.css">
        <div class="sip">
        <form method="post">
        <p class="heading">Investment Frequency: <br><input type="text" value="Monthly" class="input"></p>
        <p class="heading">Investment Amount: <br><input type="number" name="Amount" class="input"></p>
        <p class="heading">Number of Payments: <br><input type="number" name="payment" class="input"></p>
        <p class="heading">ROI: <br><input type="number" name="roi" class="input"></p>
        <center><input type="submit" value="Calculate" name="calculate" class="submit">
        </center></form></div>
        <p class="result">Maturity value: 
        <?php echo ($fv); ?></p>
    </body>
</html>
