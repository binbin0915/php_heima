<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
    const BD = "localhost";
    const RT = "root";
    const CD = "123456";
	if(mysqli_connect(BD,RT,CD))
	{
        echo "666";
	}
	else{
        echo "456";
	}
?>
</body>
</html>