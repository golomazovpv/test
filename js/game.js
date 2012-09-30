function over(obj)
{
	$(obj).removeClass();
	$(obj).addClass("over");
}
			
function out(obj)
{
	$(obj).removeClass();
	$(obj).addClass("opole")
}
			
function fire(obj)
{
	var id = obj.id;
	ajax(parseInt(id.substring(1)), "fire");
        time = 0;
}

function  sh_location(sh, cl, pl)
{
    if(pl == 0)
    {
        var select_class = "#m";        
    }
    else
    {
        var select_class = "#o";
    }

    for(var i=0; i<sh.length; i++)
    {
        if(sh[i]>0)
        {
            $(select_class+sh[i]).removeClass();
            $(select_class+sh[i]).addClass(cl);
        }
    } 	
}

var timer = 5;
var time = 0;
function update()
{
    time += 1;
    if(time == timer)
    {
        ajax("update","upgame");
        time = 0;
    }
    setTimeout(update, 1000);
}

function action(status)
{
    if(status)
    {
        $("#status").text("Ваш ход");
       // $("#shadow").css({"display":"none"});
       document.getElementById("shadow").style.display = "none";
    }
    else
    {
        $("#status").text("Ход соперника");
        //$("#shadow").css({"display":"block"});
        document.getElementById("shadow").style.display = "block";
    }
}

function response(result)
{   //alert(result.my_misses);
        action(result.action);
    if(result.my_damage.damage !== undefined && result.my_damage.damage !== false)
        sh_location(result.my_damage.damage, "damageship", 0);
    if(result.my_damage.destroy !== undefined && result.my_damage.destroy !== false)
        sh_location(result.my_damage.destroy, "destroyship", 0);
    if(result.opp_ships.damage !== undefined && result.opp_ships.damage !== false)
        sh_location(result.opp_ships.damage, "damageship", 1);
    if(result.opp_ships.destroy !== undefined && result.opp_ships.destroy !== false)
        sh_location(result.opp_ships.destroy, "destroyship", 1);
    if(result.my_misses !== undefined && result.my_misses !== false)    
        sh_location(result.my_misses, "miss", 0);
    if(result.opp_misses !== undefined && result.opp_misses !== false)
        sh_location(result.opp_misses, "miss", 1);
}

function ajax(data, url)
{
    $.ajax({
            type: "POST",
            data: "data="+data,
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