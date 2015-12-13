	function reserve(id_seat,id_session){
		var xmlhttp = getXmlHttp();
		xmlhttp.open('POST', 'http://kinoteatr/reservation/reserve/' ,true); 
		xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8'); 
		xmlhttp.send("reserve=" + encodeURIComponent(id_seat)+"&seconds="+encodeURIComponent(timewait)+"&session="+encodeURIComponent(id_session));
		xmlhttp.onreadystatechange = function() { 
			if (xmlhttp.readyState == 4) {
				if(xmlhttp.status == 200) { 
					document.getElementById('seatsform').innerHTML = xmlhttp.responseText;
				}
			}
		};
	}
	function free(id_seat,id_session){
		var xmlhttp = getXmlHttp(); 
		xmlhttp.open('POST', 'http://kinoteatr/reservation/free/', true); 
		xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
		xmlhttp.send("free=" + encodeURIComponent(id_seat)+"&seconds="+encodeURIComponent(timewait)+"&session="+encodeURIComponent(id_session));
		xmlhttp.onreadystatechange = function() { 
			if (xmlhttp.readyState == 4) { 
				if(xmlhttp.status == 200) {
					document.getElementById('seatsform').innerHTML = xmlhttp.responseText;
				}
			}
		};
	}
	
	function reservedseat(){
		alert("В данный момент вы не можете зарезервировать это кресло, так как оно зарезервиновано кем-то другим.");
	}
	
	function orderedseat(){
		alert("Вы не можете зарезервировать это кресло, так как оно уже забронировано.");
	}
	
	function order(id_session){
		var xmlhttp = getXmlHttp(); 
		xmlhttp.open('POST', 'http://kinoteatr/reservation/order/', true); 
		xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
		xmlhttp.send("session="+encodeURIComponent(id_session));
		xmlhttp.onreadystatechange = function() { 
			if (xmlhttp.readyState == 4) { 
				if(xmlhttp.status == 200) {
					document.getElementById('seatsform').innerHTML = xmlhttp.responseText;
				}
			}
		};
	}
	
	function cancelOrder(){
		
	}