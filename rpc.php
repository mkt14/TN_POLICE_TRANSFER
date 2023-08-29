<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="icon" href="logo police.jpeg">

    <title>Police project</title>
  </head>
<body>
   
    <div class="logoimages2"  >
<img src="logo police.jpeg" height="30%" width="20%" >
    </div>

    <div class="container">
        <div class="row">
            
                            
                
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Enter your details</h4>
                    </div>
                   
    
                    <div class="card-body">
                        <form action="rpccode.php" method="POST">
                            <div class="row">
                            <div class="details personal">
                    <span class="title">Personal Details</span><br>
                    <!-- <label><b>DESIGNATION</b></label><br>
                            <select id="colors" name="designations">
                              <option value="HAV (General)">HAV (General)</option>
                                        <option value="HAV (RT)">HAV (RT)</option>
                                        <option value="HAV (MT)">HAV (MT)</option>
                                        <option value="HAV (ARMOURER)">HAV (ARMOURER)</option>
                                        <option value="NAIK (GENERAL)">NAIK (GENERAL)</option>
                                        <option value="NAIK (RT)">NAIK (RT)</option>
                                        <option value="PC (GENERAL)">PC (GENERAL)</option>
                                        <option value="PC RT">PC RT</option>
                                        <option value="PC MT">PC MT</option>
                                        <option value="PC ARMOURER">PC ARMOURER</option>
                              </select> -->
                    
                              <div class="fields">
                              <div class="input-field">
                                    <label>Initial</label>
                                    <input type="text" name="Initial" placeholder="Enter your Initial">
                                </div>

                                <div class="input-field">
                                    <label>Name</label>
                                    <input type="text" name="Name" placeholder="Enter your name">
                                </div>

                                <div class="input-field">
                                  <label>NO. RPC</label>
                                  <input type="text" name="NRPC" placeholder="No RPC">
                              </div>

                              <div class="form-group">
                                <label><b>Gender</b></label>
                                <div class="radio-group">
                                  <input type="radio" id="male" name="gender" value="male">
                                  <label for="male">Male</label>
                                  <input type="radio" id="female" name="gender" value="female">
                                  <label for="female">Female</label>
                                  <input type="radio" id="other" name="gender" value="other">
                                  <label for="other">Other</label>
                                </div>
                              </div>
<br><br>


                
                                <label><b>Native place</b> </label>
                                <select id="colors" name="Native">
                                 <option value="">Select District</option>
        <option value="Ariyalur">Ariyalur</option>
        <option value="Chennai">Chennai</option>
        <option value="Coimbatore">Coimbatore</option>
        <option value="Cuddalore">Cuddalore</option>
        <option value="Dharmapuri">Dharmapuri</option>
        <option value="Dindigul">Dindigul</option>
        <option value="Erode">Erode</option>
        <option value="Kallakurichi">Kallakurichi</option>
        <option value="Kanchipuram">Kanchipuram</option>
        <option value="Kanyakumari">Kanyakumari</option>
        <option value="Karur">Karur</option>
        <option value="Krishnagiri">Krishnagiri</option>
        <option value="Madurai">Madurai</option>
        <option value="Nagapattinam">Nagapattinam</option>
        <option value="Namakkal">Namakkal</option>
        <option value="Nilgiris">Nilgiris</option>
        <option value="Perambalur">Perambalur</option>
        <option value="Pudukkottai">Pudukkottai</option>
        <option value="Ramanathapuram">Ramanathapuram</option>
        <option value="Ranipet">Ranipet</option>
        <option value="Salem">Salem</option>
        <option value="Sivaganga">Sivaganga</option>
        <option value="Tenkasi">Tenkasi</option>
        <option value="Thanjavur">Thanjavur</option>
        <option value="Theni">Theni</option>
        <option value="Thoothukudi">Thoothukudi (Tuticorin)</option>
        <option value="Tiruchirappalli">Tiruchirappalli (Trichy)</option>
        <option value="Tirunelveli">Tirunelveli</option>
        <option value="Tirupathur">Tirupathur</option>
        <option value="Tiruppur">Tiruppur</option>
        <option value="Tiruvallur">Tiruvallur</option>
        <option value="Tiruvannamalai">Tiruvannamalai</option>
        <option value="Tiruvarur">Tiruvarur</option>
        <option value="Vellore">Vellore</option>
        <option value="Viluppuram">Viluppuram</option>
        <option value="Virudhunagar">Virudhunagar</option>
                                </select>
                                <br>
                                <br><br>
                                
                       

                       
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="DOB" placeholder="Enter Date" >
                        </div>
                        
                        

                        <div class="input-field">
                            <label>Date of Employement</label>
                            <input type="date" name="DOE" placeholder="Enter Date" >
                        </div>
                        <!-- <div class="input-field">
                            <label>Date of Enlistment</label>
                            <input type="date" name="DOJCB" placeholder="Enter Date" >
                        </div> -->

                        <div class="input-field">
                          <label>PRS marks</label>
                          <input type="text" name="PRSMarks" placeholder="Enter your marks">
                      </div>
						 <div class="details ID">
                    <!-- <span class="title">Identity Details</span> -->

                    <div class="fields">
                        <!-- <div class="input-field">
                            <label>ID Type</label>
                            <input type="text" placeholder="Enter ID type" required>
                        </div>

                        <div class="input-field">
                            <label>ID Number</label>
                            <input type="number" placeholder="Enter ID number" required>
                        </div> -->

                          
                        <div class="input-field">
                            <label>CPS NUMBER</label>
                            <input type=" cnumber" placeholder="Enter number" >
                        </div>
                        
                        <!-- <div class="input-field">
                            <label>completion of one year in the present place</label>
                            <input type="text" placeholder="YES/NO" >
                        </div> -->

                    </div>
                    <div class="details ID">
                      <div class="fields">
                          <div class="input-field">
                                 <!-- <label>PRESENT BATALLION</label><br> --> -->
                              <!-- <select id="colors" name="batallion">
                               
                                <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                              </select> -->

                              <br>
                              <br>
                              <label>PREFERENCES 1</label><br>
                              <select id="colors" name="p1">
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>

                              
                              <br>
                              <br>
                              <label>PREFERENCES 2</label><br>
                              <select id="colors" name="designations">
                               
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>

                              
                              <br>
                              <br>
                              <label>PREFERENCES 3</label><br>
                              <select id="colors" name="designations">
                               
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>

                              
                              <br>
                              <br>
                              <label>PREFERENCES 4</label><br>
                              <select id="colors" name="designations">
                               
                                <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>
                              
                              <br>
                              <br>
                              <label>PREFERENCES 5</label><br>
                              <select id="colors" name="designations">
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>


                              
                              <br>
                              <br>
                              <label>PREFERENCES 6</label><br>
                              <select id="colors" name="designations">
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>


                              
                              <br>
                              <br>
                              <label>PREFERENCES 7</label><br>
                              <select id="colors" name="designations">
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>




                              
                              <br>
                              <br>
                              <label>PREFERENCES 8</label><br>
                              <select id="colors" name="designations">
                               
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>




                              
                              <br>
                              <br>
                              <label>PREFERENCES  9</label><br>
                              <select id="colors" name="designations">
                               
                                <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>





                              
                              <br>
                              <br>
                              <label>PREFERENCES 10</label><br>
                              <select id="colors" name="designations">
                               
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>





                              
                              <br>
                              <br>
                              <label>PREFERENCES 11</label><br>
                              <select id="colors" name="designations">
                               
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>






                              
                              <br>
                              <br>
                              <label>PREFERENCES  12</label><br>
                              <select id="colors" name="designations">
                               
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>






                              
                              <br>
                              <br>
                              <label>PREFERENCES 13</label><br>
                              <select id="colors" name="designations">
                               
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>






                              
                              <br>
                              <br>
                              <label>PREFERENCES 14</label><br>
                              <select id="colors" name="designations">
                               
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>






                              
                              <br>
                              <br>
                              <label>PREFERENCES 15</label><br>
                              <select id="colors" name="designations">
                               
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>
                              <br>
                              <br>
                              <label>PREFERENCES 15</label><br>
                              <select id="colors" name="designations">
                               
                              <option value="TSP I Bn">TSP I Bn</option>
                                <option value="TSP II Bn">TSP II Bn</option>
                                <option value="TSP III Bn">TSP III Bn</option>
                                <option value="TSP IV Bn">TSP IV Bn</option>
                                <option value="TSP V Bn">TSP V Bn</option>
                                <option value="TSP VI Bn">TSP VI Bn</option>
                                <option value="TSP VII Bn">TSP VII Bn</option>
                                <option value="TSP VIII Bn">TSP VIII Bn</option>
                                <option value="TSP IX Bn">TSP IX Bn</option>
                                <option value="TSP X Bn">TSP X Bn</option>
                                <option value="TSP XI Bn">TSP XI Bn</option>
                                <option value="TSP XII Bn">TSP XII Bn</option>
                                <option value="TSP XIII Bn">TSP XIII Bn</option>
                                <option value="TSP XIV Bn">TSP XIV Bn</option>
                                <option value="TSP XV Bn">TSP XV Bn</option>
                                <option value="TSP XVI Bn">TSP XVI Bn</option>
                                <option value="RC Bn">RC Bn</option>
                              </select>






                       </div>
                    </div> 
                    <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <button type="submit" name="insert_data" class="btn btn-primary">Enter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

  </body>
</html>