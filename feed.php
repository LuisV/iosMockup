
    
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
           #post-text{
               align-self: center;
               margin:auto;
           }
        </style>
    </head>
    <body>
        
    
        <div id= "profile">
            
            <a style="float: left; margin-left:10px">Friendify</a>
            
        <img style="float: right; margin-top: 10px;"  height=100px weight=100px  src = "https://scontent-lax3-1.cdninstagram.com/vp/20a3a6bfc07ac1df3b54e463b4ef785d/5D36F84E/t51.2885-15/sh0.08/e35/s640x640/44850384_578010465966160_8900507041521780828_n.jpg?_nc_ht=scontent-lax3-1.cdninstagram.com">
    
    </span></div>
    <table>
        <tr>
            <td>
                <span><img height=100px width = 100px src = "https://scontent-sjc3-1.cdninstagram.com/vp/a2d45ac70d50315d971c5a7a168f43b9/5D428BE1/t51.2885-15/sh0.08/e35/p640x640/41056632_2194583794153648_1151337760285886664_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com">
                <b>Marco Polo</b>
                </span>
                <div style="display: flex; font-size: 60px"><img src= https://www.bing.com/th?id=OIP.etzwDQLvJZV5X1fnT8rz1gHaHa&w=215&h=209&c=7&o=5&dpr=2&pid=1.7>
                 <div id ="post-text"><p>Recommended</p>
                <a style ="float:top;"> Ariana Grande</a>
                </div>
                </div>
                <div class="comment" style="display:none;">
                    <span class='xxx'>X</span> <input type="text" name="" placeholder="Write a comment"/>
                    </div>
            </td>
        </tr>
      <tr>
            <td>
                <span><img height=100px width = 100px src = "https://scontent-sjc3-1.cdninstagram.com/vp/d846d5778a5a35d7a5a6f939ad5c2c38/5D4539DF/t51.2885-15/sh0.08/e35/p640x640/32121506_164079807765160_3785860920912117760_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com ">
                <b>Chicken Nugget</b>
                </span>
                <div style="display: flex; font-size: 60px"><img src= "https://www.bing.com/th?id=OIP.ih4bdb6mpj9c8WrD17nYsQHaHa&w=211&h=208&c=7&o=5&dpr=2&pid=1.7">
                 <div id ="post-text"><p>Recommended</p>
                <a style ="float:top;"> Imagine Dragons</a>
                </div>
                </div>
                <div class="comment" style="display:none;">
                    <span class='xxx'>X</span> <input type="text" name="" placeholder="Write a comment"/>
                    </div>
            </td>
        </tr>
        <tr>
            <td>
                <span><img height=100px width = 100px src = "https://scontent-sjc3-1.cdninstagram.com/vp/ebf766b61bd51c25376ef8459ee08123/5D3D9FF5/t51.2885-15/sh0.08/e35/p640x640/32273724_1539147952862796_977212781914750976_n.jpg?_nc_ht=scontent-sjc3-1.cdninstagram.com">
                <b>Kpop Lover</b>
                </span>
                <div style="display: flex; font-size: 60px;"><img width=430px; height=430px; src= "https://0.soompi.io/wp-content/uploads/2017/10/29080851/TWICE-2.jpg">
                 <div id ="post-text"><p>Recommended</p>
                <a style ="float:top;"> Likey Likey</a>
                </div>
                </div>
<div class="comment" style="display:none;">
                    <span class='xxx'>X</span> <input type="text" name="" placeholder="Write a comment"/>
                    </div>            </td>
        </tr>
    </table>
    
    </body>
    <script type="text/javascript">
    $(document).ready(function(){
        $("td").not("a").click(function(event){
            console.log("td")
            event.stopPropagation();
            $("td").not(this).animate({ x: '1000px' });
            $(this).children(".comment").show();
            $(this).children(".xxx").show();
        });
        $(".xxx").click(function(event){
            event.stopPropagation();
            console.log("a");
            $(this).hide();
            $("td").not( $(this).parent()).animate({ x: '0px' });
           
        });
    });
    $("#profile").click(function(){
        $("table").remove()
        $('body').html('<object style="height:100%; width:100%;" type="text/html" data="profile.php" ></object>');
 
    });
    </script>
    
