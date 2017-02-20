<?php
ini_set('display_errors',1); // enable php error display for easy trouble shooting
error_reporting(E_ALL); // set error display to all
include ('connection/connection.php');
if (isset($_POST['submit'])) {
$pic=time().$_FILES['picture']['name'];
$dob=date('Y-m-d',strtotime($_POST['dob-day'].$_POST['dob-month'].$_POST['dob-year']));
$lang=$_POST['dob-leng'];
$phone=$_POST['ph1'].$_POST['ph2'];
$gen=$_POST['genealogy'];
$name=$_POST['first'].$_POST['second'].$_POST['family'];
$address=$_POST['number'].$_POST['street'].$_POST['district'].$_POST['country'].$_POST['postcode'];
$food=$_POST['dob-food'];
$sex=$_POST['dob-sex'];
$occupation=$_POST['occupation'];
$comment=$_POST['comment'];
$type=$_FILES['picture']['type'];
	$tmp_name=$_FILES['picture']['tmp_name'];
	$dir="images/".$pic;
	if($type=="image/jpg" || $type=="image/jpeg" || $type=="image/png" || $type=="image/gif")
	{
		move_uploaded_file($tmp_name,$dir);
 //$r= mysqli_query("INSERT INTO `register` (`picture`,`language`,`phone`,`genealogy`,`name`,`address`,`consumption`,`sex`,`occupation`,`comment`) VALUES('$pic','$lang','$phone','$gen','$name','$address','$food','$sex','$occupation','$comment')");
	 
   $q="INSERT INTO register (picture,dob,language,phone,genealogy,name,address,consumption,sex,occupation,comment) VALUES('$pic','$dob','$lang','$phone','$gen','$name','$address','$food','$sex','$occupation','$comment')";
	 $r=mysqli_query($conn,$q);
	if($r){header("location:actorspage.php?msg= Successfully Registered");
	?>
<script type="text/javascript">
	location.href="register.html";
</script>
	<?php
		}
		else
		{
			header("location:register.php?msg= Registeration Failed");
		}
}
}
else {
echo "Registraion Failed";
}
?>