<?php
$valor1 = $_POST ['n1'];
$valor2 = $_POST ['n2'];
$total; 
$ope = $_POST ['operador'];

     if  ($ope == "suma")
	{
			$total = $valor1 + $valor2;
			echo "La suma es: ".$total;
			
	} 
	 if  ($ope == "resta")
	{
			$total = $valor1 - $valor2;
			echo "La resta es: ".$total;
			
	} 
	if  ($ope == "multi") 
	{
			$total = $valor1 * $valor2;
			echo "La multiplicacion es: ".$total;
			
		
	} 
	if ($ope == "div") 
	{
			$total = $valor1 / $valor2;
			echo "La division es: ".$total;
			
	}
		

?>
