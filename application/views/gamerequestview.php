<link rel="stylesheet" href="/css/gamerequest.css" type="text/css" media="screen">
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/gamerequest.js"></script>
<script type="text/javascript" src="/js/jquery.json-2.3.min.js"></script>
<div id="requests_box">
    <div id="noaccept">
<? if(isset($noaccept)){?>
<?foreach($noaccept as $item) {?>
<?echo '<div><label class="lb_radio" for="radio_r'.$item["id"].'"><input name="radio_r" id="radio_r'.$item["id"].'" onClick="showagree(this)" value="'.$item["id"].'" type="radio">'; if($item['player1'] !== $username) echo $item['player1']; else echo '<span class="underline">'.$item["player1"].'</span>'; echo '</label></div>';?>
    <?}?>
<?}?>
    </div>
    <div id="accept">
<?if(isset($accept)){?>
<?foreach($accept as $item) {?>
<div class="vs"><? if($item['player1'] !== $username) echo $item['player1']; else echo '<span class="underline">'.$item["player1"].'</span>';?><b>&nbspVS&nbsp</b><?if($item['player2'] !== $username) echo $item['player2']; else echo '<span class="underline">'.$item["player2"].'</span>';?></div>
    <?}?>
<?}?>
    </div>
</div>
<div id="btn_box">
        <div id="apply_agree" class='abs'>
                <input id="btn_apply" type="button" value="Подать заявку" onClick="apply()"/>
                <input id="btn_agree" class="btn_hide" type="button" value="Принять заявку" onClick="agree()"/>
        </div>
        <div id="reject_start" class='abs btn_hide'>
                <input id="btn_reject_in" type="button" value="Отклонить" onClick="reject_in()"/>
                <input id="btn_start" type="button" value="Начать бой" onClick="start()"/>	
        </div>
        <input id="btn_reject_out"  class="btn_hide" type="button" value="Отменить" onClick="reject_out()"/>
        <input id="btn_del" class="btn_hide" type="button" value="Удалить заявку" onClick="del()"/>
</div>
<script>
        $(document).ready(function(){
                update();
                buttonproc(<?=$status?>);
        });  
        var status = <?=$status?>;
</script>

