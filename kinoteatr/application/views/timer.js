var timewait;
function countDown(second) {
	timewait = second;
	var now = new Date();
	second = parseInt(second) + now.getSeconds();
	endYear = now.getFullYear();            
	endMonth =now.getMonth();
	endDay = now.getDate();    
	endHour = now.getHours();
	endMinute = now.getMinutes();
	var endDate = new Date(endYear,endMonth,endDay,endHour,endMinute,second+1);
	var interval = setInterval(function() { 
			var time = endDate.getTime() - now.getTime();
			timewait = Math.floor(time / 1e3);
			if (time < 0) { 
				clearInterval(interval);
				alert("Время вышло!");            
			} else { 
				var minutes = Math.floor(time / 6e4) % 60;
				var seconds = Math.floor(time / 1e3) % 60; 
				var digit='<div style="width:30px;float:left;text-align:center;align:center;">'+
				'<div style="font-family:Colibry;font-size:30px;color:#FFF;">';
				var text='</div><div>'
				var end='</div></div><div style="float:left;font-size:25px;color:#FFF;">:</div>'
				document.getElementById('mytimer').innerHTML = '<div style="float:left;font-size:30px;color:#FFF;">Осталось: </div>'+
				digit+minutes+text+end+digit+seconds+text;
				if (!seconds && !minutes) {              
					clearInterval(interval);
					alert("Время вышло!");              
				}           
			}
			now.setSeconds(now.getSeconds() + 1);
		}, 1000
	);
}
countDown(document.getElementById('timeLeft').value);