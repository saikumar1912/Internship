<?php
$n=$_POST['n'];
$no=$_POST['no'];
$u=$_POST['u'];
$p=$_POST['p'];
$con=mysqli_connect("localhost","root","","intern") or die("sorry");
$que=mysqli_query($con,"select * from register where Email='$u'");
$fet=mysqli_fetch_array($que);
if($fet['Email']==$u && $fet['password']!=$p)
{
    echo "<script>
    alert('Your Email is alreay Registered So please check Password And goto login page');
window.location='login.html';</script>";
}
if($fet['Email']==$u && $fet['password']==$p)
{
echo "<script>
alert('Your An Existing user.Please Login');
window.location='login.html';
</script>";
}
else{
$ins=mysqli_query($con,"insert into register (Name,phone_number,Email,password) values('$n','$no','$u','$p');")or die("sorry.....");
echo "<script>alert('Your An Existing user.Please Login');
window.location='login.html';</script>";
}
?> 