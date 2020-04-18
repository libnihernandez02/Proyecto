<?php
$valor1_POST ['n1'] 
$valor2_POST ['n2']
{
        if ($_POST["operador"] == "suma")
	{
			echo "La suma es: "
			$total=$valor1_POST + $valor2_POST;
			
	} 
	elseif ($_POST["operador"] == "resta")
	{
			echo "La resta es: "
			$total=$valor1_POST - $valor2_POST;
			
	} 
	else if ($_POST["operador"] == "multiplicacion") 
	{
			echo "La multiplicacion es: "
			$total=$valor1_POST * $valor2_POST;
			
		
	} 
	else if ($_POST["operador"] == "division") 
	{
			echo "La division es: "
			$total=$valor1_POST / $valor2_POST;
			
	}
	
		
}	

?>
