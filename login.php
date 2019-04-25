<html lang="ru"><head>
        <meta charset="utf-8">
        <title>HYDRA</title>
        <meta name="description" content="Hydra">
        <link rel="shortcut icon" href="/themes/hydra/images/favicon.ico">
        <link rel="apple-touch-icon" href="/themes/hydra/images/touch-icon-iphone.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/themes/hydra/images/touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/themes/hydra/images/touch-icon-ipad-retina.png">
        <meta property="og:image" content="/themes/hydra/images/logo.png">
        <meta property="og:url" content="http://hydraruzxpnew4af.onion">
        <meta property="og:title" content="HYDRA">
        <meta property="og:description" content="Hydra">
        <meta property="og:type" content="website">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="HandheldFriendly" content="true">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


        <link href="/themes/hydra/min/styles.min.css?_t=1504895295" type="text/css" rel="stylesheet">
                    </head>
    <body class="log_page">
    <? if (isset($_SESSION['error'])) : ?>
     <div class="clearfix flash-errors" style="position: relative">
	    <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6 col-xl-offset-3 col-xl-6" style="padding-top:10px; position: absolute;z-index: 1020;">
	    
	    
	                <div role="alert" class="alert alert-danger alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть"><span aria-hidden="true">&times;</span></button>
	                        <?=$_SESSION['error']?> <br>
	                    </div>
	        </div>
	</div>

	<? unset($_SESSION['error']); endif; ?>
                <div class="log_wrap">
            <a class="hydra" href="/"><span>Hydra</span></a>
        <div class="log_menu">
            <nav>
                <a href="/login" class="active">Вход</a>
                <a href="http://hydraruzxpnew4af.onion/register">Регистрация</a>
                <a href="http://hydraruzxpnew4af.onion/password-reset" class="pull-right">Забыли пароль?</a>
            </nav>
        </div>
        <div class="log_body">
            <div class="pad">
                <form method="POST" action="/login" accept-charset="UTF-8" id="registerform">
                        <input type="hidden" name="form" value="login">

                                    <ul class="form_list">
                        <li class="form-group">
                            <label for="login-name" class="text-muted">Логин</label>
                            <input class="form-control" id="login-name" required="required" name="login" type="text" value="<?=$_POST['login']?>">
                        </li>
                        <li class="form-group">
                            <label for="login-pass" class="text-muted">Пароль</label>
                            <input class="form-control" id="login-pass" required="required" name="password" value="" type="password">
                        </li>
                        <li class="form-group captcha">
                            <label for="captcha" class="text-muted">Введите капчу</label>
        					<img src="<?=$captcha[$captcha_id][1]?>" alt="Captcha image">
                            <input type="hidden" name="captcha_id" value="<?=$captcha_id?>">
                            <input class="form-control" autocomplete="off" name="captcha" value="" type="number">
                        </li>
                    </ul>
                    <button type="submit" class="btn log_submit btn-primary">Войти</button>

                </form>
            </div>
        </div>

        </div>
  <script src="/javascripts/min/app.min.js?_t=1504895295"></script>
<noscript><style>.jsOnly{display:none!important}</style></noscript>      
</body>
</html>