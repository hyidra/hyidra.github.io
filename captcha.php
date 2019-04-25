<html>
<head>
    <title>Вы не робот?</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        .page{
            padding: 20px;width: 300px; margin: 0 auto;
        }
        input[type=number]{
            width: 100px;
            height: 24px;
            margin-bottom: 5px;
        }
        img{
            float:left;
            margin-right: 10px;
        }
        input[type=submit]{
            color: #fff;
            background-color: #2b71b1;
            border-color: #0073cb;
            width: 100px;
            display: inline-block;
            margin-bottom: 0;
            font-weight: normal;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 4px 12px;
            font-size: 12px;
            line-height: 1.42857143;
            border-radius: 2px;
        }
    </style>
</head>
<body>
<div class="page">
    <form action="" method="post">
        <input type="hidden" name="form" value="captcha">
        <input type="hidden" name="captcha_id" value="<?=$captcha_id?>">
        <img src="<?=$captcha[$captcha_id][1]?>" alt="Captcha image">
        <input type="number" name="captcha">
        <input type="submit" value="Войти">
    </form>
</div>
</body>
</html>

