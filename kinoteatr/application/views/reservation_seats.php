<?php function setFunc($seat,$time,$session){
	if ($seat->stat == reserved){
			if ($seat->id_user == $_SESSION['id'] && $seat->reserve_time>$time){
				echo "free($seat->id_seat,$session)";
			}
			else if ($seat->id_user != $_SESSION['id'] && $seat->reserve_time>$time){
				echo "reservedseat()";
			}
			else {
				echo "reserve($seat->id_seat,$session)";
			}
		}
		else if ($seat->stat == free){
			echo "reserve($seat->id_seat,$session)";
		}
		else {
			echo "orderedseat()";
		}
	
	}?>
<?php
$row = 0;
foreach($seats as $seat): ?>
<?php 
	if ($seat->numseries >$row){
		if ($row==0){
			echo "<table class = \"seatsTable\"><tr>";
		}
		else {
			echo "</tr></table><table class = \"seatsTable\"><tr>";
		}
		$row+=1;
		echo "<td>$row</td>";
	}
?>
<td>
	<?php
		if ($seat->stat == reserved){
			if ($seat->id_user == $_SESSION['id'] && $seat->reserve_time>$time){
				$stat = "reserveseat";
			}
			else if ($seat->id_user != $_SESSION['id'] && $seat->reserve_time>$time){
				$stat = "cantreserveseat";
			}
			else {
				$stat = "freeseat";
			}
		}
		else if ($seat->stat == free){
			$stat = "freeseat";
		}
		else {
			$stat = "orderseat";
		}
	?>
	<input type="button" onclick="<?php setFunc($seat,$time,$session);?>" class = "<?php echo $stat;?>" value = "<?php echo $seat->num;?>">
</td>
<?php endforeach ?>
</tr>
</table>