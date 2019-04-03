
    
    <head>
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    
    <script src = "https://ricostacruz.com/jquery.transit/jquery.transit.min.js"></script>

        <style type="text/css">
            img {
               border-radius: 50%;
               
           }
           #profile{
               position: absolute;
               bottom:94%;
               
               font-size: 80px;
               
               width:967px;
           }
           body{
               background-color: transparent;
            font-size: 80px;
           }
           table{
               position: absolute;
              
               
               background-color: white;
               
               font-size: 80px;
               
               width:980px;
               top:6%;
              
              
           }
           td{
              
               border-bottom: 3px gray solid;
               padding-bottom: 18px;
           }
           #info{
               position: absolute;
               color:white;
               top:37%;
               left:25%;
               opacity: 0;
               
           }
        </style>
    </head>
    <body>
        
    
        <div id= "profile">
            
            <a id="home" style="float: left; margin-left:10px">Friendify</a>
            
        <img id="pic" style="float: right; margin-top: 10px;"  height=100px weight=100px  src = "https://scontent-lax3-1.cdninstagram.com/vp/20a3a6bfc07ac1df3b54e463b4ef785d/5D36F84E/t51.2885-15/sh0.08/e35/s640x640/44850384_578010465966160_8900507041521780828_n.jpg?_nc_ht=scontent-lax3-1.cdninstagram.com">
        <button id="log" style="color: white; float: right; margin-top: 10px;">Log out?</button>
    </span></div>
    <div id="info">
        Luis Valencia
        
    </div>
    
    
    
    </body>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#pic").animate({scale:5, x:-85, y: 70});
        $("#log").animate({ x:100});
        setTimeout(function(){
            $("#info").animate({opacity: 1});
    }, 200);
    });
    
    $("#home").click(function(event){
        event.stopPropagation();
        $('body').html('<object style="height:100%; width:100%;" type="text/html" data="feed.php" ></object>');
 
    });
    $("#log").click(function(event){
        event.stopPropagation();
        $('body').html('<object style="height:100%; width:100%;" type="text/html" data="index.php" ></object>');
 
    });
    </script>
    
