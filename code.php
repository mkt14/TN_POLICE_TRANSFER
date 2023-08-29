<?php
session_start();
$con = mysqli_connect("localhost","root","","policeprojectdb");


if(isset($_POST['insert_data']))
{
    $dg=$_POST['dg'];
    // $dg =  mysqli_real_escape_string($con, $_POST['dg']);
    $Name = mysqli_real_escape_string($con, $_POST['Name']);
    $Employee_ID = mysqli_real_escape_string($con, $_POST['Employee_ID']);
    $DOE = mysqli_real_escape_string($con, $_POST['DOE']);
    $DOJCB = mysqli_real_escape_string($con, $_POST['DOJCB']);
    $Native_District = mysqli_real_escape_string($con, $_POST['Native_District']);
    $DOP=mysqli_real_escape_string($con, $_POST['DOP']);
    $DOB=mysqli_real_escape_string($con, $_POST['DOB']);
    $Cbatallion=mysqli_escape_string($con,$_POST['Cbatallion']);
    $PRSMarks = mysqli_real_escape_string($con, $_POST['PRSMarks']);
    $reason=mysqli_real_escape_string($con,$_POST['reason']);
    $p1 = mysqli_real_escape_string($con, $_POST['p1']);
    $p2 = mysqli_real_escape_string($con, $_POST['p2']);
    $PRDetails=mysqli_real_escape_string($con,$_POST['PRDetails']);

    // // $ROT = mysqli_real_escape_string($con, $_POST['ROT']);
    // $oyc = mysqli_real_escape_string($con, $_POST['oyc']);

    if ($dg == 1 ) {
        $query = "INSERT INTO `hav_(general)` (Name, Employee_ID, DOE, DOJCB, Native_District, DOP, DOB, Cbatallion, reason, PRSMarks, p1, p2, PRDetails) VALUES ('$Name', '$Employee_ID', '$DOE', '$DOJCB', '$Native_District', '$DOP', '$DOB', '$Cbatallion', '$PRSMarks', '$reason','$p1', '$p2', '$PRDetails')";
        $query_run = mysqli_query($con, $query);
    }else if($dg==2){
        $query = "INSERT INTO `hav_(rt)` (Name, Employee_ID, DOE, DOJCB, Native_District, DOP, DOB, Cbatallion, reason, PRSMarks, p1, p2, PRDetails) VALUES ('$Name', '$Employee_ID', '$DOE', '$DOJCB', '$Native_District', '$DOP', '$DOB', '$Cbatallion', '$PRSMarks', '$reason','$p1', '$p2', '$PRDetails')";
        $query_run = mysqli_query($con, $query);

    }else if($dg==3){
        $query = "INSERT INTO `hav_(mt)` (Name, Employee_ID, DOE, DOJCB, Native_District, DOP, DOB, Cbatallion, reason, PRSMarks, p1, p2, PRDetails) VALUES ('$Name', '$Employee_ID', '$DOE', '$DOJCB', '$Native_District', '$DOP', '$DOB', '$Cbatallion', '$PRSMarks', '$reason','$p1', '$p2', '$PRDetails')";
        $query_run = mysqli_query($con, $query);

    }else if($dg==4){
        $query = "INSERT INTO `hav_(armourer)` (Name, Employee_ID, DOE, DOJCB, Native_District, DOP, DOB, Cbatallion, reason, PRSMarks, p1, p2, PRDetails) VALUES ('$Name', '$Employee_ID', '$DOE', '$DOJCB', '$Native_District', '$DOP', '$DOB', '$Cbatallion', '$PRSMarks', '$reason','$p1', '$p2', '$PRDetails')";
        $query_run = mysqli_query($con, $query);

    }else if($dg==5){
        $query = "INSERT INTO `naik_(general)` (Name, Employee_ID, DOE, DOJCB, Native_District, DOP, DOB, Cbatallion, reason, PRSMarks, p1, p2, PRDetails) VALUES ('$Name', '$Employee_ID', '$DOE', '$DOJCB', '$Native_District', '$DOP', '$DOB', '$Cbatallion', '$PRSMarks', '$reason','$p1', '$p2', '$PRDetails')";
        $query_run = mysqli_query($con, $query);

    }else if($dg==6){
        $query = "INSERT INTO `naik_(rt)` (Name, Employee_ID, DOE, DOJCB, Native_District, DOP, DOB, Cbatallion, reason, PRSMarks, p1, p2, PRDetails) VALUES ('$Name', '$Employee_ID', '$DOE', '$DOJCB', '$Native_District', '$DOP', '$DOB', '$Cbatallion', '$PRSMarks', '$reason','$p1', '$p2', '$PRDetails')";
        $query_run = mysqli_query($con, $query);

    }else if($dg==7){
        $query = "INSERT INTO `pc_(general)` (Name, Employee_ID, DOE, DOJCB, Native_District, DOP, DOB, Cbatallion, reason, PRSMarks, p1, p2, PRDetails) VALUES ('$Name', '$Employee_ID', '$DOE', '$DOJCB', '$Native_District', '$DOP', '$DOB', '$Cbatallion', '$PRSMarks', '$reason','$p1', '$p2', '$PRDetails')";
        $query_run = mysqli_query($con, $query);

    }else if($dg==8){
        $query = "INSERT INTO `pc_(rt)` (Name, Employee_ID, DOE, DOJCB, Native_District, DOP, DOB, Cbatallion, reason, PRSMarks, p1, p2, PRDetails) VALUES ('$Name', '$Employee_ID', '$DOE', '$DOJCB', '$Native_District', '$DOP', '$DOB', '$Cbatallion', '$PRSMarks', '$reason','$p1', '$p2', '$PRDetails')";
        $query_run = mysqli_query($con, $query);

    }else if($dg==9){
        $query = "INSERT INTO `pc_(mt)` (Name, Employee_ID, DOE, DOJCB, Native_District, DOP, DOB, Cbatallion, reason, PRSMarks, p1, p2, PRDetails) VALUES ('$Name', '$Employee_ID', '$DOE', '$DOJCB', '$Native_District', '$DOP', '$DOB', '$Cbatallion', '$PRSMarks', '$reason','$p1', '$p2', '$PRDetails')";
        $query_run = mysqli_query($con, $query);

    }else if($dg==10){
        $query = "INSERT INTO `pc_(armourer)` (Name, Employee_ID, DOE, DOJCB, Native_District, DOP, DOB, Cbatallion, reason, PRSMarks, p1, p2, PRDetails) VALUES ('$Name', '$Employee_ID', '$DOE', '$DOJCB', '$Native_District', '$DOP', '$DOB', '$Cbatallion', '$PRSMarks', '$reason','$p1', '$p2', '$PRDetails')";
        $query_run = mysqli_query($con, $query);

    }
    
   

    
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Success Box</title>
  <style>
    #success-box {
      width: 300px;
      background-color: #dff0d8;
      border-radius: 5px;
      padding: 20px;
      text-align: center;
      margin: 0 auto;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    #success-icon {
      width: 80px;
      height: 80px;
      margin: 0 auto;
      margin-bottom: 20px;
      fill: #3c763d;
    }

    #message {
      font-size: 18px;
      margin-bottom: 20px;
      color: #3c763d;
    }

    #continue-btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #3c763d;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    #continue-btn:hover {
      background-color: #2b542c;
    }
  </style>
</head>
<body>
  <div id="success-box">
    <svg id="success-icon" viewBox="0 0 512 512">
      <path d="M493.531,113.43c-14.161-14.161-37.111-14.163-51.273-0.001L193.103,298.954l-68.22-68.22c-14.162-14.162-37.111-14.162-51.273,0.001c-14.162,14.162-14.162,37.111,0,51.273l89.606,89.606c7.077,7.077,16.362,10.616,25.637,10.616s18.561-3.539,25.637-10.616l213.201-213.201C507.693,150.541,507.693,127.591,493.531,113.43z" fill="#3c763d" />
    </svg>
    <p id="message">Congratulations! Your request  was successful.</p>
    <a href="#" id="continue-btn">Continue</a>
  </div>
</body>
</html>
