<?php
<body bgcolor=" #0FF0FF">
$valor1= $_POST ['n1'];
$valor2= $_POST ['n2'];
$operador=$_POST['Operador'];
$Total;
{
        if($operador == suma)
	{
			echo "La suma es: ".$Total;
				$total = $valor1 + $valor2;
			
	} 
	 if($operador == resta)
	{
			echo "La resta es: ".$Total;
				$Total = $valor1 - $valor2;
			
	} 
	 if($operador == multi) 
	{
			echo "La multiplicacion es: ".$Total; 
				$Total = $valor1 * $valor2;
			
		
	} 
	 if($operador == div) 
	{
			echo "La division es: ".$Total; 
				$Total = $valor1 / $valor2;
			
	}
	
 </body>
}	

?>
