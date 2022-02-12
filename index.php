<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма реєстрації</title>

    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<div class="container mt-4">
        <?php
            if( $_COOKIE['user'] == ''):
        ?>

    <p class="row">
        <div class="col">

            <h1>Форма реєстрації </h1>
            <form action="validation-form/check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логин">
                <input type="text" class="form-control" name="name" id="name" placeholder="Введіть  ім'я">
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть  пароль">
                <button class="btn btn-success" type="submit">Зареєструвати</button>

            </form>
        </div>
        <div class="col">
            <h1>Форма авторизації </h1>
            <form action="validation-form/auth.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логин">

                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введіть  пароль">
                <button class="btn btn-success" type="submit">Авторизуватися</button>

            </form>
        </div>
         <?php else: ?>
                <p>Привіт <?= $_COOKIE['user'] ?> . Щоб вийти натисніть  <a href="http://localhost/hoo/exit.php">тут</a> . </p>




	    <?php endif; ?>
    </div>

</body>
</html>