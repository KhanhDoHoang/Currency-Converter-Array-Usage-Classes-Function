<html>
	<head>
		<title>Here is my chessboard</title>
        <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
        <?php   
            include_once "Header.php";
            include_once "Menu.php";
        ?>
        <table width="290px" cellspacing="0px" cellpadding="0px" border="1px" style="margin-top: 6rem; margin-left: 1rem;">
            <tr>
                <td height=280px></td>
            </tr>
        </table>
        <table width="270px" cellspacing="0px" cellpadding="0px" border="1px" style="margin-top: -18rem; margin-left: 1.7rem;">
            <?php
                for($row=1; $row<=8; $row++) {
                    echo "<tr>";
                    for($col=1;$col<=8;$col++)
                    {
                    $total=$row+$col;
                    if($total%2==0)
                    {
                    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                    }
                    else
                    {
                    echo "<td height=30px width=30px bgcolor=#000000></td>";
                    }
                    }
                    echo "</tr>";
                }
            ?>
        </table>
        <?php 
			include_once "Footer.php";
        ?>
	</body>
</html>