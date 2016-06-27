<?php
		$field = (int) $_POST['nrpf'];
		$player = (int) $_POST['nrpl'];
		if(!($player <= 0 || $field <= 0)){
			$nfields = $player * $field;
			$ifields = array_fill(0, $nfields, 0);
			$n = 0;
			
			echo '<div class="table-responsive">';
			echo '<table class="table table-striped">';
			echo '<th>Name</th>';
			for($y = 0; $y < $field; $y++){
				echo		'<th><input type="text" class="form-control"/></th>';
			}
			for($x = 0; $x < $player; $x++){
				echo	'<tr>';
				echo	'<td><input type="text" class="form-control"/></td>';
				for($y = 0; $y < $field; $y++){
					echo		'<td><input type="number" class="form-control" name="'.$ifields[$n].'" value="'.$ifields[$n].'"/></td>';
					$n++;
				}
				echo 	'</tr>';
			}
			echo '</table>';
			echo '</div>';
		} else {
			echo '<div class="alert alert-danger" role="alert">Bitte geben Sie eine vernünftige ZAHL ein.</div>';
		}
?>