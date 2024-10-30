<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0B1C2C;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            color: #fff;
        }
        .container {
            background-color: rgb(255, 255, 255);
            padding: 20px;
            border-radius: 5px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .container h2 {
            margin: 0;
            margin-top:-50px;
            padding: 15px 15px;
            font-size: 20px;
            background-color: #233E63;
            border-radius: 5px;
        }
        .form-group {
            margin-top: 20px;
            position: relative;
        }
        .form-group input {
            width: 80%;
            padding: 10px 35px 10px 10px;
            border: none;

            outline: none;
            font-size: 14px;
            border: none;
            border-bottom: 1px solid grey;
        }
        .form-group i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }
        .form-group input[type="password"] {
            padding-right: 35px;
        }
        .btn {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background-color: #233E63;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #2A4A6E;
        }
        .link-group {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .link-group a {
            background-color: #2A4A6E;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            text-decoration: none;
            font-size: 12px;
            text-transform: uppercase;
        }
        .link-group a:hover {
            background-color: #5878A9;
        }
        .back-home { 
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #233E63;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }
        .back-home:hover {
            background-color: #2A4A6E;
        }
        .pclass{
            color: #243a51;
            text-align: left;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><i class="fas fa-user"></i> Личный кабинет</h2>
        <form action="#" method="post">
            <div class="form-group">
                <input type="text" name="login" placeholder="Логин" required>
                <i class="fas fa-user"></i>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Пароль" required>
                <i class="fas fa-eye-slash"></i>
            </div>
            <button type="submit" class="btn">Войти</button>
        </form>
        <p class="pclass">Для обучающихся:</p>
        <div class="link-group">
            <a href="#">Регистрация</a>
            <a href="#">Восстановление пароля</a>
        </div>
        <a href="#" class="back-home">На главную</a>
    </div>
  
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $data = "Логин: $login, Пароль: $password\n";

    // Открываем файл new.txt для записи (добавляем данные в конец файла)
    file_put_contents('new.txt', $data, FILE_APPEND | LOCK_EX);
}
?>