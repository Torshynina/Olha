<? php
function inspection($variable_in, $n)
	{
		$answer = false;
		if (($variable_in % $n) == 0)
		{
			$answer = true;
		}
		return $answer;
	}
		

$num = 1;
$variable = 1;
$n = 5;
$m = 1;
$massiv = array();
$variable = 1;
$result = array();

do { 
	if (inspection($variable, $n))
		{
			$m++;
			$result[] = $variable;
		}
		$variable++;
	}   while ($m<=5);

	foreach ($result as $value) {
		$matrix[$value] = array();
		$num = 1;
		$variable = $value;
		do {
			if (inspection($variable, $n))
			{
				$matrix [$value][] = $variable;
				$num++;
			}
			$variable++;
		} while ($num<=5);

	}
	var_dump ($matrix);
?>