<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title>Demo</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="ajax.js"></script>
</head>

<body>

<div class="wrapper">

	<header class="header">
		<div class="logo">
            <div class="logo_text">
                <div><p>WORLD BANK Publications</p></div>
            </div>
            <div class="phone_one"><p>8-800-100-5005</p></div>
            <div class="phone_two"><p>+7 (3452) 522-000</p></div>
		</div>
		
	</header><!-- .header-->
	
	<div class="menu">
        <ul>
            <li><a href="#" id="navi_1">Кредитные карты</a></li>
            <li><a href="#">Вклады</a></li>
            <li><a href="#">Дебетовая карта</a></li>
            <li><a href="#">Страхование</a></li>
            <li><a href="#">Друзья</a></li>
            <li><a href="#" id="navi_2">Интернет-банк</a></li>
        </ul>
	</div>
	
	<div class="crumbs">
        <ul>
            <li><a href="#">Главная</a><span>-</span></li>
            <li><a href="#">Вклады</a><span>-</span></li>
            <li><a href="#">Калькулятор</a></li>
        </ul>
	</div>

	<main class="content">
		<p>Калькулятор</p>
		<div class="calc-form">
            <form method="POST" action="" id="form1">
                <label>Дата оформления вклада</label>
                <input type="text" value="дд.мм.гггг" class="input-width" id="datepicker"><br>
                <div class="contribution">
                    <div>
                        <label>Сумма вклада</label>
                        <input type="number" id="amount1" name="value1" class="input-width" min="1000" max="3000000" value="10000" pattern="[0-9]{4,7}">
                    </div>
                    <div class="slider-one">
                        <div id="slider1"></div>
                        <div class="price">
                            <label id="price1">1 тыс. руб.</label>
                            <label id="price2">3 000 000</label>
                        </div>
                    </div>
                </div>
                <label>Срок вклада</label>
                <select class="input-width">
                    <option>1 год</option>
                </select><br>
                <label>Пополнение вклада</label>
                <input type="radio" name="radio" value="no" checked class="radio-button"> Нет
                <input type="radio" name="radio" value="yes" class="radio-button"> Да
                <br>
                <div class="contribution">
                    <div>
                        <label>Сумма пополнения вклада</label>
                        <input type="number" id="amount2" name="value2" class="input-width" min="1000" max="3000000" value="10000" pattern="[0-9]{4,7}">
                    </div>
                    <div class="slider-one">
                        <div id="slider2"></div>
                        <div class="price">
                            <label id="price1">1 тыс. руб.</label>
                            <label id="price2">3 000 000</label>
                        </div>
                    </div>
                </div>
                <input type="button" name="submit" id="btn" value="Рассчитать">
                <label id="result_form">Результат: </label>
                <script>
                    $(document).ready(function() {
                        $("#btn").click(function() {
                        sendAjax('result_form', 'form1', 'calc.php');
                        return false;
                        });
                    });
                
                function sendAjax(result_form, form, url) { 
                    $.ajax({
                        url: url,
                        type: 'POST',
                        dataType: "html",
                        data: $("#" + form).serialize(),
                        success: function(response) {
                            result = $.parseJSON(response);
                            console.log(result);
                            $("#result_form").html("Результат: " + Math.trunc(result.summa));
                        },
                        error: function(response) {
                            $("#result_form").html("Результат:");
                        }
                    });
                }
                </script>
            </form>
		</div>
	</main><!-- .content -->



<footer class="footer">
	<ul>
        <li><a href="#">Кредитные карты</a></li>
            <li><a href="#">Вклады</a></li>
            <li><a href="#">Дебетовая карта</a></li>
            <li><a href="#">Страхование</a></li>
            <li><a href="#">Друзья</a></li>
            <li><a href="#">Интернет-банк</a></li>
	</ul>
</footer><!-- .footer -->

</div><!-- .wrapper -->
<script type="text/javascript" src="js/slider.js"></script>
</body>
</html>