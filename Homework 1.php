<html>

<head>
<style type="text/css">
red
{
color:red;
}
lightBlue
{
color:lightblue;
}
</style>
</head>
<body>

<?php 

$parameter=$_GET["number"];
$isPrime=True;

if (!is_numeric($_GET["number"]))
{
	echo "<red>The parameter is not a number!</red>";
}
else
{
	if ($parameter<0 || $parameter>=20000)
	echo "<red>The parameter is not between the range [0,19999]</red>";
	else
	{
		for ($i=2;$i<=$parameter/2;$i++)
		{
			if ($parameter%$i==0)
			$isPrime=False;
		}
		
		if ($isPrime)
		{
			printf("The number %d is prime!",$parameter);
		}
		else
		{
			printf("<lightBlue>The number %d is not prime!</lightBlue>",$parameter);
		}
	}
}

?>


</body>

</html>