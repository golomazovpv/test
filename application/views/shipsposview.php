		<link rel="stylesheet" href="/css/shipspos.css" type="text/css" media="screen">
		<script src="/js/jquery-1.7.2.min.js"></script>
		<script src="/js/shipspos.js"></script>	
		<div><label class="lb_radio" for="radio_x1"><input name="radio_x" id="radio_x1" value="0" type="radio" checked>одноклеточный (<span id="x1" class="radiocheck">4</span>)</label></div>
		<div><label class="lb_radio" for="radio_x2"><input name="radio_x" id="radio_x2" value="1" type="radio">двухклеточный (<span id="x2" class="radiocheck">3</span>)</label></div>
		<div><label class="lb_radio" for="radio_x3"><input name="radio_x" id="radio_x3" value="2" type="radio">трехклеточный (<span id="x3" class="radiocheck">2</span>)</label></div>		
		<div><label class="lb_radio" for="radio_x4"><input name="radio_x" id="radio_x4" value="3" type="radio">четырехклеточный (<span id="x4" class="radiocheck">1</span>)</label></div>		
		<br><br>
		<label class="lb_radio" for="radio_direct_hor"><input name="radio_direct" id="radio_direct_hor" value="1" type="radio" checked>Горизонтально</label>		
		<br>
<label class="lb_radio" for="radio_direct_ver"><input name="radio_direct" id="radio_direct_ver" value="0" type="radio">Вертикально</label>				
		<script>
			document.write("<table border=0 cellpadding=0 cellspacing=0 id='tb'>");
			for(var i=1; i<=10; i++)
			{	
				document.write("<tr>");
				for(var j=1; j<=10; j++)
				{
					document.write("<td><div id='"+i+j+"' class='pole'></div></td>");
				}
				document.write("</tr>");
			}
			document.write("</table>");
		</script>			
		<script>	
		
			$(document).ready(function(){
				posit("tb");
			});

			$('div.pole').mouseover(function(){
				
				if(this.className == "pole")	
				over(this.id);
				
			});
			
			$("div.pole").mouseout(function(){
				
				if(this.className == "over")
				{
					$(".over").addClass("pole");
					$(".over").removeClass("over");	
				}
			});
			
			$('div.pole').click(function(){
				if(this.className == "over")
				{
					var r = $("input[name='radio_x']:radio:checked").val();				
					pole_action(this);
				}	
			});
			
		</script>