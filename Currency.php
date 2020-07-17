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
        </form>
        <?php 
			include_once "Footer.php";
        ?>
	</body>
</html>

