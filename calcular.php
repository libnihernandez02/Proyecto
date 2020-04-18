<?php
if ($_POST ["n1"] !="" and $_POST ["n2"]!="")
{
        if ($_POST["operador"] == "suma")
	{
			echo "La suma es: "
			print ($resultado = $_POST ["nr1"] + $_POST ["n2"]);
			print ('<br /><a href="calcular.php">');
	} 
	elseif ($_POST["operador"] == "resta")
	{
			echo "La resta es: "
			print ($resultado = $_POST ["n1"] - $_POST ["n2"]);
			print ('<br /><a href="calcular.php">');
	} 
	else if ($_POST["operador"] == "multiplicacion") 
	{
			echo "La multiplicacion es: "
			print ($resultado = $_POST ["n1"] * $_POST ["n2"]);
			print ('<br /><a href="calcular.php">');
		
	} 
	else if ($_POST["operador"] == "division") 
	{
			echo "La division es: "
			print ($resultado = $_POST ["n1"] / $_POST ["n2"]);	
			print ('<br /><a href="calcular.php">');
	}
	
		
}	

?>
