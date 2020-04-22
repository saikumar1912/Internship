<?php
$u=$_POST['u'];
$p=$_POST['p'];
$con=mysqli_connect("localhost","root","","intern") or die("sorry");
$que=mysqli_query($con,"select * from register where Email='$u' and password='$p'");
$fet=mysqli_fetch_array($que);
if($u==""&&$p=="")
{
    echo"<script>
    alert('Please enter input fields');
    window.location='login.html';
    </script>";
}
if($fet['Email']==$u && $fet['password']==$p)
{
echo "<script type='text/javascript'>
    window.location='homepage.php';
    </script>";
}
else{
echo "<script type='text/javascript'>
alert('Please check email and password');
window.location='login.html';
</script>";
}
?> 
