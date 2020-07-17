<html>
	<head>
		<title>Here is my arrays</title>
        <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
        <?php   
            include_once "Header.php";
            include_once "Menu.php";
        ?>
        <div class="arrays-class">
        <?php
        echo "<h3>No Key Array - Output using var_dump</h3>";
        $noKeyArray = array(10, 20, 30, 40);
        var_dump($noKeyArray);
        echo "<br>";
        echo "<h3>No Key Array - Output using foreach</h3>";
        foreach($noKeyArray as $key=>$index){
            echo "key: ".$key.", ";
            echo "value: $index, key data type: ".gettype ( $index )."<br>";
        }
        //-----------------------------------
        echo "<h3>String Key Array - Output using var_dump</h3>";
        $StringKeyArray = array(
            "key1" => "item1",
            "key2" => "item2",
        );
        var_dump($StringKeyArray);
        echo "<br>";
        echo "<h3>String Key Array - Output using foreach</h3>";
        foreach($StringKeyArray as $key=>$index){
            echo "key: ".$key.", ";
            echo "value: $index, key data type: ".gettype ( $index )."<br>";
        }
        //-----------------------------------
        echo "<h3>Integer Key Array - Output using var_dump</h3>";
        $intKeyArray = array(
            0 => 100,
            1 => -100,
            3 => 200,
        );
        var_dump($intKeyArray);
        echo "<br>";
        echo "<h3>Integer Key Array - Output using foreach</h3>";
        foreach($intKeyArray as $key=>$index){
            echo "key: ".$key.", ";
            echo "value: $index, key data type: ".gettype ( $index )."<br>";
        }
        //-----------------------------------
        echo "<h3>Mixed Key Array - Output using var_dump</h3>";
        $mixedKeyArray = array(
             "key1"=>"item1",
             "key2"=>"item2",
             2 => "item3",
             4 => "item4",
             5 => "item5",
             3 => "item6",
             1 => "item7",
        );
        var_dump($mixedKeyArray);
        echo "<br>";
        echo "<h3>Mixed Key Array - Output using foreach</h3>";
        foreach($mixedKeyArray as $key=>$index){
            echo "key: ".$key.", ";
            echo "value: $index, key data type: ".gettype ( $key )."<br>";
        }
        //-----------------------------------
        echo "<h3>Multi-dimensional Array - Output using var_dump</h3>";
        $multiDimensionArray = array(
             array(
                 10,
                 20,
             ),
             array(
                 30,
                 40,
             ),
        );
        var_dump($multiDimensionArray);
        echo "<br>";
        echo "<h3>Multi-dimensional Array - Output using foreach</h3>";
        foreach($multiDimensionArray as $key=>$index){
            echo "Level 1: key: ".$key."<br>";
            foreach($index as $key1=>$index1){
                echo "Level 2: key: ".$key1.", ";
                echo "value: $index1, key data type: ".gettype ( $index1 )."<br>";
            }   
        }
        
        ?>
        </div>
        <?php 
			include_once "Footer.php";
        ?>
	</body>
</html>