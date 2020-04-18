<?php
$valor1 = $_POST ['n1'] 
$valor2 = $_POST ['n2']
$suma= $_POST ['suma'] 
$resta= $_POST ['resta'] 
$multi= $_POST ['multi'] 
$div= $_POST ['div'] 
{
        mas si ($operador == $suma_POST)
	{
			echo "La suma es: "
			$total=$valor1 + $valor2;
			
	} 
	 mas si ($operador == $resta_POST)
	{
			echo "La resta es: "
			$total=$valor1 - $valor2;
			
	} 
	mas si ($operador == $multi_POST) 
	{
			echo "La multiplicacion es: "
			$total=$valor1 * $valor2;
			
		
	} 
	mas ($operador == $div_POST) 
	{
			echo "La division es: "
			$total=$valor1 / $valor2;
			
	}
	
		
}	

?>
