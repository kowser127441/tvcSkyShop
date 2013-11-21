	function changesubcategory()
		{
			  var xmlhttp=false;
			  if(window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
				}
			else
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
			xmlhttp.onreadystatechange = function()
				{
					if(xmlhttp.readyState==4 )
						{
							document.getElementById("makespan").innerHTML=xmlhttp.responseText;
						}
				}
			var bodySelect = document.getElementById("body").value;
			var makeSelect = document.getElementById("make").value;
			xmlhttp.open("GET","subcategory.php?bodySelect=" + bodySelect + "&makeSelect=" + makeSelect,true);
			xmlhttp.send();	

		}

        		function changetype()
		{
			  var xmlhttp=false;
			  if(window.XMLHttpRequest)
				{
					xmlhttp = new XMLHttpRequest();
				}
			else
				{
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
			xmlhttp.onreadystatechange = function()
				{
					if(xmlhttp.readyState==4 )
						{
							document.getElementById("typespan").innerHTML=xmlhttp.responseText;
						}
				}
			var bodySelect = document.getElementById("body").value;
			var makeSelect = document.getElementById("make").value;
			var typeSelect = document.getElementById("type").value;
			xmlhttp.open("GET","clients.php?bodySelect=" + bodySelect + "&makeSelect=" + makeSelect + "&typeSelect=" + typeSelect,true);
			xmlhttp.send();	

		}
		
