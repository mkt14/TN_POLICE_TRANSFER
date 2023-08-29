
<!doctype html>
  <head>   
    <link rel="stylesheet" href="adminGetsList.css">
    <link rel="stylesheet" type="text/css" href="index.css">

    <title>get the transfer list</title>  
  </head>   
  <body>
  <img src="police departmnet.jpg">

    <form action="listCode.php" method="POST">  
      <!-- <label for="name">Enter your name:</label> -->
      
      <!-- <input type="text" id="name" name="name"><br><br> -->

      <label for="designation">Enter your designation:</label>
      <select id="designation" name="designation">
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
                                    </select><br><br>

      <label for="vacancy">Enter the vacancy:</label>
      <input type="number" id="vacancy" name="vacancy" min="1" max="1000"><br><br>

      <label for="preferences">Select Battalion:</label>
      <select id="preferences" name="preferences">
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
      </select><br><br>

      <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <button type="submit" name="Enter" class="btn btn-primary">Enter</button>
                                    </div>
                                </div>
    
    </form>  

	  </body>  
</html>