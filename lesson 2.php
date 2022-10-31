<?php
$c=0;?>
<table>
<?php
for ($a=1;$a<=10;$a++){
	?>
	<tr>
	<?php
	for ($b=1;$b<=10;$b++){
		?>
		<td>
		<?php
		$c=$a*$b;
		strval($c);
	
			if (strpbrk($c, '1')){
				echo str_replace("1", "<span style='color: red'>1</span>", $c);
			
			}
			else if (strpbrk($c, '2')){
				echo str_replace("2", "<span style='color: green'>2</span>", $c);
			
			}
			else if (strpbrk($c, '3')){
				echo str_replace("3", "<span style='color: yellow'>3</span>", $c);
			}
			else if (strpbrk($c, '4')){
				echo str_replace("4", "<span style='color: blue'>4</span>", $c);
			}	
			
			else{
				echo $c;
			}
		?>
		</td>
		<?php
	}
	?>
	</tr>
	<?php
}
?>
</table>
