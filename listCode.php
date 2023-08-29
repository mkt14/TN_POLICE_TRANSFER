<?php
session_start();
$conn = mysqli_connect("localhost","root","","policeprojectdb");
    $A=$_POST['designation'];
    $b=$_POST['vacancy'];
    $c=$_POST['preferences'];
    if($A=1){
        $query="SELECT  * FROM `hav_(general)`  where p1='$c' OR p2='$c' ORDER BY DOP ASC LIMIT $b  ";
        // $query_run=mysqli_query($con,$query);
        $result = $conn->query($query);
    }elseif ($A=2) {
        # code...
        $query="SELECT  * FROM `hav_(rt)`  where p1='$c' OR p2='$c' ORDER BY DOP ASC,PRSMarks DESC LIMIT $b  ";
        // $query_run=mysqli_query($con,$query);
        $result = $conn->query($query);

    }elseif ($A=3) {
        # code...
        $query="SELECT  * FROM `hav_(mt)`  where p1='$c' OR p2='$c' ORDER BY DOP ASC,PRSMarks DESC LIMIT $b  ";
        // $query_run=mysqli_query($con,$query);
        $result = $conn->query($query);}
     elseif ($A=4) {
            # code...
            $query="SELECT  * FROM `hav_(armourer)`  where p1='$c' OR p2='$c' ORDER BY DOP ASC,PRSMarks DESC LIMIT $b  ";
            // $query_run=mysqli_query($con,$query);
            $result = $conn->query($query);}
    elseif ($A=5) {
                # code...
                $query="SELECT  * FROM `naik_(general)`  where p1='$c' OR p2='$c' ORDER BY DOP ASC,PRSMarks DESC LIMIT $b  ";
                // $query_run=mysqli_query($con,$query);
                $result = $conn->query($query);}
    elseif ($A=6) {
                    # code...
                    $query="SELECT  * FROM `naik_(rt)`  where p1='$c' OR p2='$c' ORDER BY DOP ASC,PRSMarks DESC LIMIT $b  ";
                    // $query_run=mysqli_query($con,$query);
                    $result = $conn->query($query);}
    elseif ($A=7) {
                        # code...
                        $query="SELECT  * FROM `pc_(general)`  where p1='$c' OR p2='$c' ORDER BY DOP ASC,PRSMarks DESC LIMIT $b  ";
                        // $query_run=mysqli_query($con,$query);
                        $result = $conn->query($query);}
    elseif ($A=8) {
                            # code...
                            $query="SELECT  * FROM `pc_(rt)`  where p1='$c' OR p2='$c' ORDER BY DOP ASC,PRSMarks DESC LIMIT $b  ";
                            // $query_run=mysqli_query($con,$query);
                            $result = $conn->query($query);}
    elseif ($A=9) {
                                # code...
                                $query="SELECT  * FROM `pc_(mt)`  where p1='$c' OR p2='$c' ORDER BY DOP ASC,PRSMarks DESC LIMIT $b  ";
                                // $query_run=mysqli_query($con,$query);
                                $result = $conn->query($query);}
                                elseif ($A=10) {
                                    # code...
                                    $query="SELECT  * FROM `pc_(armourer)`  where p1='$c' OR p2='$c' ORDER BY DORP ASC,PRSMarks DESC LIMIT $b  ";
                                    // $query_run=mysqli_query($con,$query);
                                    $result = $conn->query($query);}

    ?>
    <html>  
    <head>  
     <title>get the transfer list</title>  
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body>  
     <div class="container">  
      <br />  
      <br />  
      <br />  
      <div class="table-responsive">  
       <!-- <h2 align="center">Export MySQL data to Excel in PHP</h2><br />  -->
       <table class="table table-bordered">
        <tr>  
                        <th>Name</th>  
                         <th>Employee NO</th>  
                         <th>DOE</th>  
                         <th>Date of Joining in the present battalion</th>
                        <th>Current Battallion</th>
                         <th>Date receipt of petition</th>
                         <th>Date of birth</th>
                         <th>Native District</th>
                         <th>PRS Marks </th>
                         <!-- <th>transfer to </th> -->
                         <!-- <th>reason of transfer</th> -->
                         <th>PR details</th>

                    </tr>
        <?php
    if ($result->num_rows > 0) {
        // Output the results
        while ($row = $result->fetch_assoc()) {
            echo '  
            <tr>  
              <td>'.$row["Name"].'</td>  
              <td>'.$row["Employee_ID"].'</td>  
              <td>'.$row["DOE"].'</td>  
              <td>'.$row["DOJCB"].'</td>
              <td>'.$row["Cbatallion"].'</td>
              <td>'.$row["DOP"].'</td>
              <td>'.$row["DOB"].'</td> 
              <td>'.$row["Native_District"].'</td>
              <td>'.$row["PRSMarks"].'</td>
              <td>'.$row["reason"].'</td>
              <td>'.$row["PRDetails"].'</td>
            </tr>  
             ';  
        
        }
    } else {
        echo "No results found.";
    }
    
    // Close the database connection
    $conn->close();
    ?>

</table>
    <!-- <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
</div> -->
</body>
</html>