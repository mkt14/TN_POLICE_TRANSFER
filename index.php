<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">

    <title>Police project</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="header-container">
               
                <img src="logo police.jpeg.jpg" class="logo" alt="Police Logo">
              </div>
           

                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Enter your details</h4>
                    </div>

                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="row">
                                <div class="details personal">
                                    <span class="title">Personal Details</span><br>

                                    <label><b>DESIGNATION</b></label><br>
                                    <select id="dg" name="dg">
                                        <option value="1">HAV (General)</option>
                                        <option value="2">HAV (RT)</option>
                                        <option value="3">HAV (MT)</option>
                                        <option value="4">HAV (ARMOURER)</option>
                                        <option value="5">NAIK (GENERAL)</option>
                                        <option value="6">NAIK (RT)</option>
                                        <option value="7">PC (GENERAL)</option>
                                        <option value="8">PC RT</option>
                                        <option value="9">PC MT</option>
                                        <option value="10">PC ARMOURER</option>
                                    </select>
                                    <br>
                                    <br>

                                    <div class="fields">
                                        <div class="input-field">
                                            <label>Name</label>
                                            <input type="text" name="Name" placeholder="Enter your name">
                                        </div>
                                        <div class="input-field">
                                            <label>Employee</label>
                                            <input type="text" name="Employee_ID" placeholder="Enter your Employee ID">
                                        </div>

                                        <div class="details ID">
                                            <div class="fields">
                                                <div class="input-field">
                                                    <label>Native District </label>
                                                
                                                    <select id="colors" name="Native_District">
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
                                                </div>
                                            
                                        </select>
                                    </div>

                                    <div class="input-field">
                                        <label>PRS marks</label>
                                        <input type="text" name="PRSMarks" placeholder="Enter your marks">
                                    </div>
                                    <div class="input-field">
                                        <label>Date of Birth</label>
                                        <input type="date" name="DOB" placeholder="Enter Date">
                                    </div>
                                    <div class="input-field">
                                        <label>Date of petition</label>
                                        <input type="date" name="DOP" placeholder="Date of petition">
                                    </div>

                                    <div class="input-field">
                                        <label>Date of Employement</label>
                                        <input type="date" name="DOE" placeholder="Enter Date">
                                    </div>
                                    <div class="input-field">
                                        <label>Date of joining the current Battallion</label>
                                        <input type="date" name="DOJCB" placeholder="Enter Date">
                                    </div>
                                </div>
                                <div class="details ID">
                                    <div class="fields">
                                        <div class="input-field">
                                <label>Current Batallion </label>
                                    <select id="colors" name="Cbatallion">
                                     
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
                                    </select>

                                <div class="details ID">
                                    <div class="fields">
                                        <div class="input-field">
                                            <label>Reason for transfer</label>
                                            <select id="colors" name="reason">
                                                <option value="family">family concern</option>
                                                <option value="medical">medical issues</option>
                                                <option value="education">education</option>
                                                <option value="others">others</option>
                                            </select>
                                        </div>

                                        <div class="input-field">
                                            <label>Specify remark of commandant</label>
                                            <input type="text" name="remark" placeholder="Enter reason">
                                        </div>

                                        <div class="input-field">
                                            <label>completion of one year in the present place</label>
                                            <input type="text" name="oyc" placeholder="YES/NO">
                                        </div>

                                        <div class="input-field">
                                            <label>PR DETAILS</label>
                                            <input type="text" name="PRDetails" placeholder="Enter reason">
                                        </div>
                                    </div>


                                    
                                    <div class="details ID">
                                        <div class="fields">
                                            <div class="input-field">
                                            
                                    <label>PREFERENCE 1</label>
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
                                    </select>
      
                                    <br>
                                    <br>
                                    
                                    <label>PREFERENCE 2 </label>
                                    <select id="colors" name="p2">
                                     
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
                                    </select>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <button type="submit" name="insert_data" class="btn btn-primary">submit</button>
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
