<?php
echo" ad";
 if($_SERVER["REQUEST_METHOD"]=="POST"){
  $asset=$_POST['assetnumber'];
  $invoice=$_POST['invoicedate'];
  $vname=$_POST['vendorname'];
  $vaddress=$_POST['vendoraddress'];
  $vcontact=$_POST['vendorcontact'];
  $particular=$_POST['particulars'];
  $make=$_POST['make'];
  $model=$_POST['model'];
  $config=$_POST['configuration'];
  $serialnum=$_POST['serialnumber'];
  $dep=$_POST['department'];
  $location=$_POST['location'];
  $name=$_POST['name'];
  $remark=$_POST['remarks'];

  $query="INSERT INTO `stockprinter`(`assetnumber`,`invoicedate`,`vendorname`,`vendoraddress`,`vendorcontact`,`particulars`,`make`,`model`,`configuration`,`serialnumber`,`department`,`location`,`name`,`remarks`) VALUES ('$asset','$invoice','$vname','$vaddress','$vcontact','$particular','$make','$model','$config','$serialnum','$dep','$location','$name','$remark')";
  $rslt=mysqli_query($db,$query);
  	 	
}
?>
<html>
<head>
<title>Insert</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
<style>
  body,h1{
  font-family: "Amatic SC", sans-serif
 }
</style>
</head>
<body>
<div class="w3-container" style="background-color:#090c83">
 <h1 style="color:white" class="w3-header w3-center"><a href="index.php" style="text-decoration: none">Indian Institute of Technology, Dharwad</a></h1>
</div>
<form action="" method="post"> 
<center>
<table style="margin-top:-250px">
<tr><td>Assest Number:</td><td><input type="text" name="assetnumber" required></td></tr><br>
<tr><td>Invoice Date:</td><td> <input type="text" name="invoicedate" required></td></tr><br>
<tr><td>Vendor Name:</td><td><input type="text" name="vendorname" required></td></tr><br>
<tr><td>Vendor Address:</td><td><input type="text" name="vendoraddress" required></td></tr><br>
<tr><td>Vendor Contact:</td><td><input type="text" name="vendorcontact" required></td></tr><br>
<tr><td>Particulars:</td><td><input type="text" name="particulars" required></td></tr><br>
<tr><td>Make:</td><td><input type="text" name="make" required></td></tr><br>
<tr><td>Model:</td><td><input type="text" name="model" required></td></tr><br>
<tr><td>Configuration:</td><td><input type="text" name="configuration" required></td></tr><br>
<tr><td>Serial Number:</td><td><input type="text" name="serialnumber" required></td></tr><br>
<tr><td>Department:</td><td><input type="text" name="department" required></td></tr><br>
<tr><td>Location:</td><td><input type="text" name="location" required></td></tr><br>
<tr><td>Name:</td><td><input type="text" name="name" required></td></tr><br>
<tr><td>Remarks:</td><td><input type="text" name="remarks" required></td></tr><br>
</table><br>
<button type="submit" class="w3-button w3-purple w3-hover-blue w3-round-xlarge">Submit</button>
</center>
</form>
</body>
</html>