<link rel="stylesheet" href="/css/game.css" type="text/css" media="screen">
<script src="/js/jquery-1.7.2.min.js"></script>
<script src="/js/game.js"></script>	
<div id="game">
        <div id="status">
            
        </div>
        <div id="mypole">
                <script>
                        document.write("<table border=0 cellpadding=0 cellspacing=0 class='tb'>");
                        for(var i=1; i<=10; i++)
                        {	
                                document.write("<tr>");
                                for(var j=1; j<=10; j++)
                                {
                                        document.write("<td><div id='m"+i+j+"' class='mpole'></div></td>");
                                }
                                document.write("</tr>");
                        }
                        document.write("</table>");
                </script>	
        </div>
        <div id="opppole" style="display: inline-block;">
                <script>
                        document.write("<table border=0 cellpadding=0 cellspacing=0 class='tb'>");
                        for(var i=1; i<=10; i++)
                        {	
                                document.write("<tr>");
                                for(var j=1; j<=10; j++)
                                {
                                        document.write("<td><div id='o"+i+j+"' class='opole'></div></td>");
                                }
                                document.write("</tr>");
                        }
                        document.write("</table>");
                </script>
                <div id="shadow">           
                </div>
        </div>
</div>
<script>

        $('div.opole').mouseover(function(){
            if(this.className == 'opole')
            over(this);
        });

        $('div.opole').mouseout(function(){
            if(this.className == 'over')
            out(this);
        });

        $('div.opole').click(function(){
            if(this.className == 'over')
            fire(this);
        });

        $(document).ready(function(){
            var myship = new Array(<? foreach ($my_ships as $item) {
                echo $item["pole"].","; } echo "0"?>);
                sh_location(myship, "ship", 0);

                    var mydestroy = new Array(<? if(isset($my_damage["destroy"])) foreach ($my_damage["destroy"] as $item) {
                echo $item.","; } echo "0"?>);
                sh_location(mydestroy, "destroyship", 0);

            var mydamage = new Array(<? if(isset($my_damage["damage"])) foreach ($my_damage["damage"] as $item) {
                echo $item.","; } echo "0"?>);
                sh_location(mydamage, "damageship", 0);	

            var oppdestroy = new Array(<? if(isset($opp_ships["destroy"])) foreach ($opp_ships["destroy"] as $item) {
                echo $item.","; } echo "0"?>);
                sh_location(oppdestroy, "destroyship", 1);									

            var oppdamage = new Array(<? if(isset($opp_ships["damage"])) foreach ($opp_ships["damage"] as $item) {
                echo $item.","; } echo "0"?>);
                sh_location(oppdamage, "damageship", 1);

            var mymisses = new Array(<? if($my_misses) foreach ($my_misses as $item) {
                echo $item.","; } echo "0"?>);
                sh_location(mymisses, "miss", 0);

            var oppmisses = new Array(<? if($opp_misses) foreach ($opp_misses as $item) {
                echo $item.","; } echo "0"?>);
                sh_location(oppmisses, "miss", 1);  
            <?  
                if($action)
                {
                    echo("action(true);");
                }
                else
                {
                    echo("action(false);");
                }
            ?>
            update();
            }); 
</script>