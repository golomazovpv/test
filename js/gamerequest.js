function apply()
{	
	var data = new Array();
	data = {action:'apply'};
	ajax(data, "gamerequest");
}
function showagree(obj)
{
	radfucus = $(obj).attr("id");
	$("#btn_agree").fadeIn("normal");
}
function reject_in()
{	
	var data = new Array();
	data = {action:'reject_in'};
	ajax(data, "gamerequest");
}	
function reject_out()
{	
	var data = new Array();
	data = {action:'reject_out'};
	ajax(data, "gamerequest");
}
function agree()
{
	var data = new Array();
	data = {id:$("input[name=radio_r]:checked").val(), action:'agree'};
	ajax(data, "gamerequest");
}		
function del()
{
	var data = new Array();
	data = {action:'del'};
	ajax(data, "gamerequest");
}
function start()
{	
	var data = new Array();
	data = {action:'start'};
	ajax(data, "gamerequest");
}
function buttonproc(id)
{
	switch(id)
	{	
		case 1: { //скрыть все показать "Добавить заявку"
					$("input[name=radio_r]:radio").attr("disabled", false);
					$("input:radio:checked").attr("checked", false);	
					$(".btn_hide").fadeOut("normal");	
					$("#btn_apply").fadeIn("normal");						
				}; 
				break;
		case 2: { //скрыть "Подазать заявку" показать "Удалить заявку"
					$("input[name=radio_r]:radio").attr("disabled", true);
					$("#btn_agree, #btn_apply, #reject_start").fadeOut("normal");					
					$("#btn_del").fadeIn("normal");
				};
				break;
		case 3: {//скрыть "Подазать заявку" показать "Начать бой/отклонить"
					$("input[name=radio_r]:radio").attr("disabled", true);
					$("#btn_agree, #btn_apply, #btn_del").fadeOut("normal");							
					$("#reject_start").fadeIn("normal");							
				};
				break;
		case 4: {//скрыть "Подазать заявку" показать "Отменить"
					$("input[name=radio_r]:radio").attr("disabled", true);
					$("#btn_agree, #btn_apply").fadeOut("normal");
					$("#btn_reject_out").fadeIn("normal");							
				};
				break;						
	}
}

function response(result)
{
	if(result.redirect == true)
	{
		window.location.href = "/game";
	}
	else
	{
		$("#noaccept").empty();
		for(var i=0; i<result.noaccept.length; i++)
		{
					if(result.noaccept[i].player1 == result.username)
					{
						var name = '<span class="underline">'+result.noaccept[i].player1+'</span>';
					}
					else
					{
						var name = result.noaccept[i].player1;
					}
					$("#noaccept").append('<div><label class="lb_radio" for="radio_r'+result.noaccept[i].id+'"><input name="radio_r" id="radio_r'+result.noaccept[i].id+'" onClick="showagree(this)" value="'+result.noaccept[i].id+'" type="radio">'+name+'</label></div>');
		}
		$("#accept").empty();
		for(var j=0; j<result.accept.length; j++)
		{
			if(result.accept[j].player1 == result.username)
			{
				var player1 = '<span class="underline">'+result.accept[j].player1+'</span>';
			}
			else
			{	
				var player1 = result.accept[j].player1;
			}
			if(result.accept[j].player2 == result.username)
			{
				var player2 = '<span class="underline">'+result.accept[j].player2+'</span>';
			}
			else
			{	
				var player2 = result.accept[j].player2;
			}			
			$("#accept").append('<div class="vs">'+player1+'<b>&nbspVS&nbsp</b>'+player2+'</div>');
		}
		if(result.status !== status)
		{
			status = result.status;
			buttonproc(result.status);
		}
		else
		{
			if(status == 1)
			{
				$("#"+radfucus).attr("checked", true);
			}	
			else
			{
				$("input[name=radio_r]:radio").attr("disabled", true);
			}
		}		
		timer = 10;
	}
}
var radfucus;
var timer = 10; //количество сек. до обновления

function update()
{
    timer-=1;
    if(timer == 0)
    {
            var data = new Array();
            data = {action:'update'};
            ajax(data,"grequpdate");
            timer = 10;
    }
    setTimeout(update, 1000);
}

function ajax(data, url)
{
	$.ajax({
		type: "POST",
		data: "data="+$.toJSON(data),
		url: "/api/"+url,
		dataType: "json",
		success: function(result)
		{
			if(result)
			{
				response(result);
			}
			else
			{
				alert("Response is empty");
			}
		}
	});
}