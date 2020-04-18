<?php
<body bgcolor=" #0FF0FF">
$valor1= $_POST ['n1'];
$valor2= $_POST ['n2'];
$operador=$_POST['Operador'];
{
        if($operador == suma)
	{
			echo "La suma es: " . ($valor1 + $valor2);
			
	} 
	 if($operador == resta)
	{
			echo "La resta es: " . ($valor1 - $valor2);
			
	} 
	 if($operador == multi) 
	{
			echo "La multiplicacion es: " . ($valor1 * $valor2);
			
		
	} 
	 if($operador == div) 
	{
			echo "La division es: " . ($valor1 / $valor2);
			
	}
	
 </body>
}	

?>
