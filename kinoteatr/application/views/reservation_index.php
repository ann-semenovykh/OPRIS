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
	
	}
	
	function getTimeLeft($seats,$time){
		$max = $time;
		foreach($seats as $seat){
			if ($seat->id_user == $_SESSION['id']){
				if($max < $seat->reserve_time){
					$max = $seat->reserve_time;
				}
			}
		}
		$result = strtotime($max) - strtotime($time);
		if ($result<=0){
			return 300;
		}
		else{
			return $result;
		}
	}?>
<div class = "content">
<div id = "timer_line">
	<form name = "timeLeftForm">
		<input type = "hidden" id = "timeLeft" value = "<?php echo getTimeLeft($seats,$time)?>" style="display:none">
	</form>
	<div id = "mytimer"></div>
</div>
<script src = "/application/views/timer.js"></script>
<script type="text/javascript">
  /* Данная функция создаёт кроссбраузерный объект XMLHTTP */
  function getXmlHttp() {
    var xmlhttp;
    try {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
  }
</script>
<script src="/application/views/reserve.js"></script>
<div>
	<p class = "reserv_movie_info">Фильм:   <?php echo $movie->name;?>
	</p>
	<p class = "reserv_movie_info">Сеанс:   <?php echo $movie->time;?>
	</p>
	<p class = "reserv_movie_info">Цена билета:    <?php echo $movie->price;?>
	</p>
</div>
<div id = "seatsform">
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
</div>
<form name = "orderMenu" class = "orderMenu">
	<input type = "button" value = "Забронировать" onclick = "order(<?php echo $session;?>)" class = "orderButton">
	<input type = "button" value = "Отмена" onclick = "cancelOrders(<?php echo $session;?>)" class = "orderButton">
</form>
</div>