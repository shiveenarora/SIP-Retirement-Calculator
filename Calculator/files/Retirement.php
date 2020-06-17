<?php
$ca=$_POST['currentage'];
$ra=$_POST['retirementage'];
$li=$_POST['life'];
$ce=$_POST['cexpenses'];
$eir=$_POST['eir'];
$ror=$_POST['eror'];
if(isset($_POST['currentage']) && isset($_POST['retirementage']) && isset($_POST['life']) && isset($_POST['cexpenses']) && isset($_POST['eir']) && isset($_POST['eror'])){
    $realror=(((1+($ror/100))/(1+($eir/100)))-1)*100;
    $pmt=($ce*(pow(1+($eir/100), $ra-$ca)))*0.7;
    $final= $pmt*((1- pow(1+($realror/1200), -(($li-$ra)*12)))/($realror/1200));
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
        <form method="post">
        <p class="heading">Current Age: <br><input type="number" name="currentage"></p>
        <p class="heading">Retirement Age: <br><input type="number" name="retirementage"></p>
        <p class="heading">Life Expectancy: <br><input type="number" name="life"></p>
        <p class="heading">Current Expenses(MONTHLY): <br><input type="number" name="cexpenses"></p>
        <p class="heading">Expected inflation rate: <br><input type="number" name="eir"></p>
        <p class="heading">Expected rate of return: <br><input type="number" name="eror"></p>
        <center><input type="submit" value="Calculate" name="calculate" class="submit"></center>
        </form>
         <p class="result">Retirement Corpus: 
        <?php echo ($final); ?></p> 
    </body>
</html>
