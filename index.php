
<?php
function simple($num_in, $m)
	{
		$answer = false;

		if (($num_in % $m)==0)
		{
		$answer = true;
		}
		return $answer;
	}


function table($matrixTable, $q)
	{
		
		$table = '<table border=2>';
	$i = 0;
		foreach ($matrixTable as $row_number => $rows) {
			
				if ($i==0){
					$table .='<td></td>';
				foreach ($rows as $key => $value) {
				$table .='<td>' . $key . '</td>';
				}
				} $i++;

				

			$table .= '<tr>';
			
			$table .='<td>' . $row_number . '</td>';
			foreach ($rows as $col_number => $col) {
				$table .='<td>' . $col . '</td>';
			}
		 	$table .='</tr>';
		 } 
		
		 $table .= '</table>';
		 return $table;
					
	}


	$n=1; // кол-во правильных ответов для первого построения функции
	$num=1; // перебор вариантов для первичной проверки
	$result = array(); // первый массив
	$matrix = array(); // массив из массива (матрица)
	$m=12; // на что делимость
	

do { 	
	if (simple($num, $m))
		{
			$n++;
			$result[] = $num;
		}
	$num++;
	} while ($n<=10);
		
	 foreach ($result as $key => $value) {
			
			$matrix[$value] = array();
			$k=1;
			$num = $value;
			do{
				if (simple($num, $m))
				{
					$matrix [$value][] = $num;
					$k++;
				}
				$num++;
			}
			while ($k<=10);
		}

		$call = table($matrix, $k); // для вызова функции
				 
		echo $call;
		var_dump($matrix);
	
?>
