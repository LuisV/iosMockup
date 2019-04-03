
<html>
    
<head>
    <title>
    </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    
    <script src = "https://ricostacruz.com/jquery.transit/jquery.transit.min.js"></script>

    <style>
      #main{
       
        height:100%;
        width:100%;
        color:white;
        text-align:center;
        display: flex;
        justify-content: center; /* align horizontal */
        align-items: center;
      }
      #img{
          height:100%;
          width:100%;
         background-image:url('audio-1851517_1280.jpg');
            background-repeat:no-repeat;
            background-size:cover;
            background-position:center;
         position: absolute;
         z-index: -1;
         filter: blur(15px);
      }
      #login{
          width:50%;
          margin:auto;
      }
      input{
          font-size: 50px;
          border: none;
           background: transparent;
      }
      button{
          border-radius:30px;
          padding: 0px 100px;
          font-size: 80px;
          background: transparent
      }
      
           
    </style>
</head>
<body>
    <div id="img"></div>
   <div id= "main">
       <div class = "item" id="login" style= "">
       <div class = "item" id= title style="font-size: 150px; ">Friendify</div>
       
       
       <input type=text placeholder="Username"/>
       <hr>
       <input type=password placeholder="Password"/>
        <hr>
        <br>
        <button style=""> Login</button>
        <br>
        <br>
        <br>
        <button style="font-size: 40px; margin: 20% 0 0 0;">Not a user yet? Sign up here!</button>
        </div>
   </div>
  
</body>
<script>
     $(document).ready( function () {
         
$("button").click(function(){ $('#login').transition({ opacity: '0' },500,'snap');
   $('#new').transition({ x: '20px' });

setTimeout( function(){ 
    $("#login").hide();
    $('#main').append("<img height=300px width=300px src = 'https://www.invisalign.com/SiteCollectionImages/DocLocImages/loading_transparent.gif' />");
    setTimeout(function(){$('#main').html('<object style="height:100%; width:100%;" type="text/html" data="feed.php" ></object>');}, 2000);
}, 500);

});
  });
     
    
    
</script>


</html>