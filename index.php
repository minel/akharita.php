<!DOCTYPE html>
<html>
<head>
    <title>
        Ak Harita
    </title>
    <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="styles/style.css" />
</head>
<body>
    <div class="container">
    	<div class="topmenu">
    		<div class="navbar">
    			<div class="logo"></div>
    			<div class="nav-menu">
    				<ul id="menu">
    					<li><a href="/akharita">ANASAYFA</a></li>
    					<li><a href="?page=hakkimizda">HAKKIMIZDA</a></li>
    					<li><a href="?page=hizmetler">HİZMETLERİMİZ</a></li>
    					<li><a href="#">REFERANSLAR</a></li>
    					<li><a href="#">PROJELER</a></li>
    					<li><a href="#">İLETİŞİM</a></li>
    				</ul>
    			</div>
    		</div>
    	</div>

    	<?php

        if (isset($_GET['page'])) {
            $Sayfa = $_GET['page'];
        }
        else
            $Sayfa = "a";
		

		if (!is_null($Sayfa)) {
			
			switch($Sayfa){
		
			case 'hizmetler' : include('pages/hizmetler.php'); break;
			case 'hakkimizda' : include('pages/hakkimizda.php'); break;
			case 'Sayfa3' : include('Sayfa/Sayfa3.php'); break;
			
			default : include('pages/home.php'); break;
		
		}
		}
		
		
	
		?>
        <div class="footer">
                <div class="footer-item">
                    <div class="item-pic">
                        <img src="images/visit.png">
                    </div>
                    <div class="item-detail">
                        <h5>Adres</h5>
                        <span>
                            Özyurtlar N Towers b4 blok / Haramidere Esenyurt
                        </span>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="item-pic">
                        <img src="images/call.png">
                    </div>
                    <div class="item-detail">
                        <h5>Telefon</h5>
                        <span>
                            T: +90 (532) 588 07 90
                        </span>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="item-pic">
                        <img src="images/mail.png">
                    </div>
                    <div class="item-detail">
                        <h5>İletişim</h5>
                        <span>
                            info@akharita.com
                        </span>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="item-pic">
                        <img src="images/copyright.png">
                    </div>
                    <div class="item-detail mr0">
                        <h5>
                            Copyright
                        </h5>
                        <span>
                            Her Hakkı Saklıdır.
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="bxslider/jquery.bxslider.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
		  $('.bxslider').bxSlider({
                auto: true,
                pause: 5000,
                speed: 1000
            });
		});
    </script>
</body>
</html>
