<?php
$valor1 = $_POST ['n1'] 
$valor2 = $_POST ['n2']
$suma= $_POST ['suma'] 
$resta= $_POST ['resta'] 
$multi= $_POST ['multi'] 
$div= $_POST ['div'] 
{
        if ($operador == $suma)
	{
			echo "La suma es: "
			$total=$valor1_POST + $valor2_POST;
			
	} 
	 mas si ($operador == $resta)
	{
			echo "La resta es: "
			$total=$valor1_POST - $valor2_POST;
			
	} 
	mas si ($operador == $multi) 
	{
			echo "La multiplicacion es: "
			$total=$valor1_POST * $valor2_POST;
			
		
	} 
	mas ($operador == $div) 
	{
			echo "La division es: "
			$total=$valor1_POST / $valor2_POST;
			
	}
	
		
}	

?>
