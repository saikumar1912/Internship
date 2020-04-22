<html>
    <head>
        <title>Index</title>
        <link rel="stylesheet" href="lstyle.css">
    </head>
    <body>
        <div class="login" id="home">
            <h1>Currency-Converter</h1>
            <form name="f" method="POST" action="homepage.php">
            <label for="Amount">AMOUNT</label><br>
            <input type="number" placeholder="Enter value.." name="amt"/><br><br>
            <label for="From">FROM:</label>
            <input type="text" placeholder="ex:USD" name="frm"/>
            <label for="to">To:</label>
            <input type="text" name="to" placeholder="ex:INR"/><br><br>
            <div class="submit"><input type="submit" name="convert" value="Convert" /></div><br><br>
            </form>    
<?php
$curl=curl_init();
$frm=$_POST['frm'];
curl_setopt($curl , CURLOPT_URL , "https://api.exchangerate-api.com/v4/latest/$frm");
curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
$response=curl_exec($curl);
$error=curl_error($curl);

$objects=json_decode($response);
$to=$_POST['to'];
$ans=($objects->rates->$to)*$_POST['amt'];
echo "<p style='color:black;text-align:center;'>Your changed ".$frm." is equal to 
<p style='color:RED;text-align:center; font-weight:bold;text-decoration: underline;'>".$ans." ".$to."</p></p>";
?>
</div>
    </body>
</html>
