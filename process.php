<html>
	<head>
		<title>Currency</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
        <?php   
            include_once "Header.php";
            include_once "Menu.php";
        ?>
        <div style="margin-top: 4rem"></div>
        <div style="margin-top: 4rem"></div>
        <form method="GET" action="process.php">
            <fieldset>
                <legend>Converter</legend>
                
                    <label> Convert: </label>
                    <!---Conversion amount--->
                    <input type="number" step="0.01" name="num1"/>
                    <select name="country1">
                        <option value=""> Choose a country</option>
                        <option value="Canadian Dollar"> Canadian Dollars</option>
                        <option value="New Zealand Dollar"> New Zealand Dollars</option>
                        <option value="US Dollar"> US Dollars</option>
                    </select>
                    to
                    <select name="country2">
                        <option value=""> Choose a country</option>
                        <option value="Canadian Dollar"> Canadian Dollars</option>
                        <option value="New Zealand Dollar"> New Zealand Dollars</option>
                        <option value="US Dollar"> US Dollars</option>
                    </select>
                    <input type="submit" value="Generate!">
                    
                <br>

                <h3 style="text-align: left;">CONVERSION RESULTS</h3>
                
                <br>
                
                <?php
                    $srcamt = $_GET["num1"];
                    //echo $srcamt;
                    $basecurr ;
                    $destcurr ;
                    $base_country = $_GET["country1"];
                    //echo $base_country;
                    $dest_country = $_GET["country2"];
                    //echo $dest_country;
                    $currencies = array(
                        "CAD" => "Canadian Dollar",
                        "NZD" => "New Zealand Dollar",
                        "USD" => "US Dollar",
                    );

                    $rates = array(
                        "CAD" => 0.9765,
                        "NZD" => 1.20642,
                        "USD" => 1.0,
                    );
                 
                    foreach($currencies as $key=>$index){
                        if($base_country == $index){
                            $basecurr = $key;
                            //echo "base: ".$basecurr,"<br>";
                        } 
                    }
                    foreach($currencies as $key=>$index){
                        if($dest_country == $index){
                            $destcurr = $key;
                            //echo "dest: ".$destcurr;
                        } 
                    }

                    $converted_output = ($srcamt/$rates[$basecurr]) * $rates[$destcurr];
                    //echo $converted_output."<br>";
                    echo $srcamt." ".$base_country." convers to ".round($converted_output, 2)." ".$dest_country;
                ?>
        </form>
        <?php 
			include_once "Footer.php";
        ?>
	</body>
</html>
