<html>

<head>
</head>

<body>


<?php
$arr=range(20, 1000, 37);

function find_3_prime($WORKARR)
{
	$counter=3;
	$result=-1;

	foreach ($WORKARR as $value)
	{
		for ($i=2;$i<$value/2;$i++)
		{
			if ($value%$i)
			{
			   $counter--;
			}
		}
		if ($counter==1)
		{$result=$value;$counter--;}
	}
	
	if ($result!=-1)
	printf("The third prime number is %d!",$result);
	else printf("There are not three prime numbers!");

	echo "<br />";
}
find_3_prime($arr);

function check_exists($WORKARR)
{
	$str1="does not";
	$str2="";
	if (in_array(146,$WORKARR))
	{
	  printf("The value %d %s exist in the array!",146,$str2);
	}
	else
	{
	  printf("The value %d %s exist in the array!",146,$str1);
	}

	echo "<br />";

	if (in_array(284,$WORKARR))
	{
	  printf("The value %d %s exist in the array!",284,$str2);
	}
	else
	{
	  printf("The value %d %s exist in the array!",284,$str1);
	}

	echo "<br />";

	if (in_array(871,$WORKARR))
	{
	  printf("The value %d %s exist in the array!",871,$str2);
	}
	else
	{
	  printf("The value %d %s exist in the array!",871,$str1);
	}
}
check_exists($arr);
 ?>
</body>

</html>