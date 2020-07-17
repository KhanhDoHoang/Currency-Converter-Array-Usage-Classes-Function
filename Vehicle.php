<html>
	<head>
		<title>Vehicle</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
        <?php   
            include_once "Header.php";
            include_once "Menu.php";
        ?>
        <div style="margin-top: 4rem"></div>
        <?php
            function displayVehicleInfo(){

            }

        ?>
        <?php 
			interface Vehicle {
                public function displayVehicleInfo();
            }
            class LandVehicle implements Vehicle {
                protected $make;
                protected $model;
                protected $year;
                protected $price;
                public function displayVehicleInfo(){
                    
                }
            }

        ?>
	</body>
</html>
