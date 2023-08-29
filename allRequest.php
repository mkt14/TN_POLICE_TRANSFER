<!DOCTYPE html>
<html>
<head>
    <title>Check all the requests</title>
    <link rel="icon" href="logo police.jpeg">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #141313;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-top: 0;
        }

        img {
            display: block;
            margin: 0 auto 20px;
            max-width: 100%;
            height: auto;
        }

        label {
            font-weight: bold;
        }

        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ALL REQUEST</h1>
        <img src="logo police.jpeg.jpg" alt="">
        <form method="POST" action="getAllquery.php">
            <label for="dg"><b>DESIGNATION</b></label><br>
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
            <input type="submit" value="get all request">
        </form>
    </div>
</body>
</html>
