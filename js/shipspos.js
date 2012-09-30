			var ships = new Array(4,3,2,1);
			var ship_id = new Array(1,5,8,10);
			
			function posit(obj)
			{
				var pole = document.getElementById(obj);
				pole.style.display = "block";
				var nX = (d_width()/2)-(pole.clientWidth/2); // Координата Х левого верхнего угла поля
				var nY = (d_height()/2)-(pole.clientHeight/2); // Координата Y левого верхнего угла поля
				pole.style.left = nX+"px";
				pole.style.top = nY+"px";
			}
			
			function d_height() 
			{
				return Math.max(Math.max(document.documentElement.clientHeight, document.body.clientHeight), Math.max(document.documentElement.scrollHeight, document.body.scrollHeight), Math.max(document.documentElement.offsetHeight, document.body.offsetHeight));
			}

			function d_width() 
			{
				return Math.max(Math.max(document.documentElement.clientWidth, document.body.clientWidth), Math.max(document.documentElement.scrollWidth, document.body.scrollWidth), Math.max(document.documentElement.offsetWidth, document.body.offsetWidth));
			}
			
			function over(obj)
			{
				var r = $("input[name='radio_x']:radio:checked").val();
				var dir = $("input[name='radio_direct']:radio:checked").val();
				var res = pole_proc(obj, r, dir); 
				if(res)
				{
					for(var i=0; i<=res.length; i++)
					{
						$("#"+res[i]).removeClass();
						$("#"+res[i]).addClass("over");
					}
				}
				
			}

			function pole_action(obj)
			{	var r = $("input[name='radio_x']:radio:checked").val();
				var dir = $("input[name='radio_direct']:radio:checked").val();	
				$("div.over").addClass("action "+ship_id[r]);
				$("div.over").removeClass("pole over");
				ship_id[r] += 1;
				x_count(parseInt(r));
				x_padding(obj.id, r, dir);
			}			

			function x_count(r)
			{
				var id = "x"+(r+1);
				if($("#"+id).text() > 1)
				{	
					ships[r] -= 1;
					$("#"+id).text(ships[r]);
				}
				else
				{	
					$("#"+id).removeClass("radiocheck");
					$("#"+id).parent().parent().hide("fast");
					$("input[name='radio_x']:radio:checked").attr('checked', false);
					if($(".radiocheck").text() == "")
					{						
						sendrequest();
					}
				}				
			}
			
			function sendrequest()
			{
				var data="";
				for(var i=1; i<=10; i++)
				{
					for(var j=1; j<=10; j++)
					{	
						if($("#"+i+""+j).hasClass("action"))
						{
							if(data !== "")
							data += ":";
							$("#"+i+""+j).removeClass("action");
							data += i+""+j+":";
							data += $("#"+i+""+j).attr("class");
							$("#"+i+""+j).addClass("action");
						}
					}
				}
				$.ajax({
					type: "POST",
					data: "data="+data,
					url: "/api/shipspos",
					dataType: "json",
					success: function(result)
					{
						if(result)
						{
							alert(result);
						}
						else
						{
							alert("no");
						}
					}
				});
				
			}
			
			function x_padding(obj, r, dir)
			{	
				var str = string_create(obj, r);
				if(!str)
				{
					var str = new Array();
					str[0] = 10;
					str[1] = 10;
				}					
				var id;
				r = parseInt(r);
				var x = 0;
				var y = 0;
				if(dir == 1)
				{
					x = r;
				}		
				else
				{
					y = r;
				}	
				for(var i=0; i<(3+y); i++)
				{
					for(var j=0; j<(3+x); j++)
					{
						if(((str[0]-1)+i) > 0 && ((str[1]-1)+j) > 0)
						{
							if(((str[0]-1)+i) < 11 && ((str[1]-1)+j) < 11)
							{
								id = ""+((str[0]-1)+i)+((str[1]-1)+j);
								if(!$("#"+id).hasClass("action"))
								{
									$("#"+id).removeClass();
									$("#"+id).addClass("xpadding");
								}	
							}	
						}
					}
				}	
			}
			
			function pole_proc(obj, r, dir)
			{
				obj = obj+"";
				var str = string_create(obj, r);	
				if(str !== false)
				{
					if(str[dir] <= (10-r))
					{	
						var res = new Array();
						str[dir] = parseInt(str[dir]);
						for(var i=0; i<=r; i++)
						{
							if(dir == 0)
							{
								res[i] = (str[0]+i)+str[1];
							}
							else
							{
								res[i] = str[0]+(str[1]+i);
							}
							
							if(!$("#"+res[i]).hasClass("pole"))
							{
								return false;
							}
						}
						return res;
					}
				}
				else
				{
					var res = new Array();
					res[0] = obj;
					return res;
				}
			}	
			
			function string_create(obj, r)
			{
				if(obj.length < 3)
				{
					var str = new Array();
					str[0] = obj.substr(0,1);
					str[1] = obj.substr(1,1);
				}	
				else
				{	
					if(obj.length > 3)
					{
						if(r == 0)
						{
							return false;
						}		
					}
					else
					{
						var str = new Array();
						if((obj.substr((obj.length-1), 1)) == 0)
						{
							str[0] = obj.substr(0,1);
							str[1] = obj.substr(1,2);
						}
						else
						{
							str[0] = obj.substr(0,2);
							str[1] = obj.substr(2,1);
						}	
					}	
				}
				return str;
			}			
			