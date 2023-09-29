<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .package {
            display: inline-block;
            width: 150px;
            height: 150px;
            margin: 20px;
            border: 1px solid #001f3f; /* Navy blue border color */
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            background-color: #001f3f; /* Navy blue background color */
            color: #fff; /* White text color */
            text-align: center;
            line-height: 150px; /* Vertically center text */
            font-weight: bold;
            font-size: 18px;
            text-transform: uppercase;
            text-decoration: none;
        }

        .package:hover {
            background-color: #fff; /* White background color on hover */
            color: #001f3f; /* Navy blue text color on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Select a Package</h2>
        <a href="#" class="package" id="package1">Package 1</a>
        <a href="#" class="package" id="package2">Package 2</a>
        <a href="#" class="package" id="package3">Package 3</a>
        <a href="#" class="package" id="package4">Package 4</a>
    </div>
</body>
</html>