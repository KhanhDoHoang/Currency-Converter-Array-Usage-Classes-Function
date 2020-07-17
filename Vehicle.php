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
			interface Vehicle {
                public function displayVehicleInfo();
            }
            class LandVehicle implements Vehicle {
                protected $make;
                protected $model;
                protected $year;
                protected $price;
        
                function __construct($make, $model, $year, $price) {
                    $this->make = $make;
                    $this->model = $model;
                    $this->year = $year;
                    $this->price = $price;
                }
        
                function displayVehicleInfo() {
                    return "Make: ".$this->make.", Model: ".$this->model.", Year: ".$this->year.", Price: ".$this->price;
                }
            }
            class Car extends LandVehicle {
                private $speedLimit = 0;
        
                function __construct($make, $model, $year, $price, $speedLimit) {
                    parent::__construct($make, $model, $year, $price);
                    $this->speedLimit = $speedLimit;
                }
        
                function displayVehicleInfo() {
                    return "<span><b>Make: </b></span>".$this->make.", <span><b>Model: </b></span>".$this->model.", <span><b>Year: </b></span>".$this->year.", <span><b>Price: </b></span>".$this->price.", <span><b>Speed Limit: </b></span>".$this->speedLimit;
                }
        
            }
            class WaterVehicle implements Vehicle {
                protected $make;
                protected $model;
                protected $year;
                protected $price;
                public function __construct($make, $model, $year, $price) {
                    $this->make = $make;
                    $this->model = $model;
                    $this->year = $year;
                    $this->price = $price;
                }
                public function displayVehicleInfo(){
                    echo "<span><b>Make:</b></span>".$make." Model: ".$model." Year: ".$year." Price: ".$price."";

                }
            }
            class Boat extends WaterVehicle {
                private $boatCapacity;
                public function __construct($make, $model, $year, $price, $boatCapacity) {
                    parent::__construct($make, $model, $year, $price);
                    $this->boatCapacity = $boatCapacity;
                }
                public function displayVehicleInfo(){
                    return "<span><b>Make: </b></span>".$this->make.", <span><b>Model: </b></span>".$this->model.", <span><b>Year: </b></span>".$this->year.", <span><b>Price: </b></span>".$this->price.", <span><b>Boat Capacity: </b></span>".$this->boatCapacity;
                }
            }
            
            //Instaniate`
            $car1 = new Car("Toyota","Camry",1992,2000,180);
            $car2 = new Car("Honda", "Accord", 2002, 6000, 200);
            $boat1 = new Boat("Mitsubishi", "Turbo", 1999, 2000, 18);
            $boat2 = new Boat("Hyundai", "XT", 2012, 26000, 8);
            //Setting variable
            echo "<h2 style=\"text-algin:left;\">Car</h2>";
            echo $car1->displayVehicleInfo()."<br>";
            echo $car2->displayVehicleInfo()."<br>";
            echo "<h2 style=\"text-algin:left;\">Boat</h2>";
            echo $boat1->displayVehicleInfo()."<br>";
            echo $boat2->displayVehicleInfo()."<br>";
            //echo "Done";
        ?>
	</body>
</html>
