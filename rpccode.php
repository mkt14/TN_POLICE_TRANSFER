<?php
session_start();
$con = mysqli_connect("localhost","root","","policeprojectdb");


if(isset($_POST['insert_data']))
{
    $initail=mysqli_real_escape_string($con,$_POST['Initial']);
    $Name=mysqli_real_escape_string($con,$_POST['Name']);
    $no_rpc=mysqli_real_escape_string($con,$_POST['NRPC']);
    $Gender=mysqli_real_escape_string($con,$_POST['gender']);
    $native_district=mysqli_real_escape_string($con,$_POST['Native']);
    $DOB=mysqli_real_escape_string($con,$_POST['DOB']);
    $DOE=mysqli_real_escape_string($con,$_POST['DOE']);
    $DOB=mysqli_real_escape_string($con,$_POST['DOB']);
    $PRSMarks=mysqli_real_escape_string($con,$_POST['PRSMarks']);
    $cps=mysqli_real_escape_string($con,$_POST['cnumber']);
    $p1=mysqli_real_escape_string($con,$_POST['p1']);
    $p2=mysqli_real_escape_string($con,$_POST['p2']);
    $p3=mysqli_real_escape_string($con,$_POST['p3']);
    $p4=mysqli_real_escape_string($con,$_POST['p4']);
    $p5=mysqli_real_escape_string($con,$_POST['p5']);
    $p6=mysqli_real_escape_string($con,$_POST['p6']);
    $p7=mysqli_real_escape_string($con,$_POST['p7']);
    $p8=mysqli_real_escape_string($con,$_POST['p8']);
    $p9=mysqli_real_escape_string($con,$_POST['p9']);
    $p10=mysqli_real_escape_string($con,$_POST['p10']);
    $p11=mysqli_real_escape_string($con,$_POST['p11']);
    $p12=mysqli_real_escape_string($con,$_POST['p12']);
    $p13=mysqli_real_escape_string($con,$_POST['p13']);
    $p14=mysqli_real_escape_string($con,$_POST['p14']);
    $p15=mysqli_real_escape_string($con,$_POST['p15']);
    $p16=mysqli_real_escape_string($con,$_POST['p16']);
    $query = "INSERT INTO `rpc` (Initail,Name,no_rpc,gender,noprs,dob,PRSMark,cps,native_district,batch,p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p12,p13,p14,p15,p16) 
    VALUES ('$initail','$Name', '$no_rpc', '$Gender' ,'$DOB', '$PRSMarks', '$DOB', '$Cbatallion', '$PRSMarks', '$reason','$p1', '$p2', '$PRDetails')";
    $query_run = mysqli_query($con, $query);
}
