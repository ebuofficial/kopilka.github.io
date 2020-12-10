<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Поздравляем! Ваш заказ принят!</title>
        <style type="text/css">
            body {
                line-height: 1;
                height: 100%;
                font-family: Arial;
                font-size: 15px;
                color: #313e47;
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                background: url('bg-ok.png');
            }
            h2 {
                margin: 0;
                padding: 0;
                font-size: 36px;
                line-height: 44px;
                color: #313e47;
                text-align: center;
                font-weight: bold;
            }
            a {
                color: #69B9FF;
            }
            .list_info li span {
                width: 150px;
                display: inline-block;
                font-weight: bold;
                font-style: normal;
            }
            .list_info {
               text-align: left;
               display: inline-block;
               list-style: none;
               margin-top: -10px;
               margin-bottom: -11px;
            }
            .list_info li {
                margin: 15px 0px;
            }
            .fail {
                margin: 10px 0 20px 0px;
                text-align: center;
            }
            .email {
                position: relative;
                text-align: center;
                margin-top: 40px;
            }
            .email input {
                height: 30px;
                width: 200px;
                font-size: 14px;
                padding-right: 10px;
                padding-left: 10px;
                outline: none;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: 1px solid #B6B6B6;
                margin-bottom: 10px;
            }
            .block_success {
                max-width: 960px;
                padding: 70px 30px 70px 30px;
                margin: -50px auto;
            }
            .success {
                text-align: center;
            }
        </style> 
        <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '3456291501151966');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=3456291501151966&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    </head>
    <body>
        <script>
       fbq('track', 'CompleteRegistration');  
</script>
	<script type='text/javascript'> var el = new Image(); el.src = ''; </script>
        <div class="block_success">					
            <h2 style="text-transform: uppercase;">Поздравляем! Ваш заказ принят!</h2>
            <p class="success">
                В ближайшее время с вами свяжется оператор для подтверждения заказа. Пожалуйста, включите ваш контактный телефон.
            </p>
            <h3 class="success">
                Пожалуйста, проверьте правильность введенной Вами информации.
            </h3>
            <div class="success">
                <ul class="list_info">
                    <li><span>Ф.И.O.:  </span><span id="client"><?=$_GET['name']?></span></li>
                    <li><span>Телефон: </span><span id="tel"><?=$_GET['phone']?></span></li>
					<li><span>Доставка: </span><span id="tel"><?=$_GET['dostavka']?></span></li>
					</ul>
                <br/><span id="submit"></span>
            </div>
            <p class="fail success">Если вы ошиблись при заполнени формы, то, пожалуйста, <a href="javascript: history.back(-1);">заполните заявку еще раз</a></p>
		

<script type="text/javascript">
    var __gra = __gra || [];
    __gra.mid = 10429;
    (function() {
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = "http:" + "//js.grt" + "01.com/" + "gra_min_new.js";
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>

</body>
</html>
