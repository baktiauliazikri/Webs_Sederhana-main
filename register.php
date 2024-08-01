<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
    <title>TEMAN COFFEE - Register</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Raleway, sans-serif;
        }

        body {
            background: linear-gradient(90deg, #C7C5F4, #776BCC);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .screen {
            background: linear-gradient(90deg, #5D54A4, #7C78B8);
            position: relative;
            height: auto;
            width: 360px;
            box-shadow: 0px 0px 24px #5C5696;
            border-radius: 15px;
            overflow: hidden;
        }

        .screen__content {
            z-index: 1;
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .screen__background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            -webkit-clip-path: inset(0 0 0 0);
            clip-path: inset(0 0 0 0);
        }

        .screen__background__shape {
            transform: rotate(45deg);
            position: absolute;
        }

        .screen__background__shape1 {
            height: 520px;
            width: 520px;
            background: #FFF;
            top: -50px;
            right: 120px;
            border-radius: 0 72px 0 0;
        }

        .screen__background__shape2 {
            height: 220px;
            width: 220px;
            background: #6C63AC;
            top: -172px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape3 {
            height: 540px;
            width: 190px;
            background: linear-gradient(270deg, #5D54A4, #6A679E);
            top: -24px;
            right: 0;
            border-radius: 32px;
        }

        .screen__background__shape4 {
            height: 400px;
            width: 200px;
            background: #7E7BB9;
            top: 420px;
            right: 50px;
            border-radius: 60px;
        }

        .register {
            width: 100%;
            max-width: 320px;
            padding: 30px;
            padding-top: 0;
        }

        .register h3 {
            color: #181818;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .register__field {
            width: 100%;
            padding: 2px;
            position: relative;
        }

        .register__field {
            position: relative;
            margin-bottom: 20px;
        }

        .register__icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            font-size: 18px;
        }

        .register__input {
            width: 100%;
            padding: 10px 10px 10px 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .register__input:focus {
            outline: none;
            border-color: #666;
        }

        .register__submit {
            background: #fff;
            font-size: 14px;
            margin-top: 30px;
            padding: 16px 20px;
            border-radius: 26px;
            border: 1px solid #D4D3E8;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            align-items: center;
            width: 100%;
            color: #4C489D;
            box-shadow: 0px 2px 2px #5C5696;
            cursor: pointer;
            transition: .2s;
        }

        .register__submit:hover {
            border-color: #6A679E;
        }

        .button__icon {
            font-size: 24px;
            margin-left: auto;
            color: #7875B5;
        }
    </style>
</head>

<body>
    <!-- Register Section Start -->
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form method="POST" action="aksi_register.php" class="register">
                    <h3>Register</h3>
                    <div class="register__field">
                        <input type="text" class="register__input" name="nama" placeholder="Nama Lengkap" required>
                        <i class="register__icon fas fa-user"></i>
                    </div>
                    <div class="register__field">
                        <textarea class="register__input" name="alamat" placeholder="Alamat" required></textarea>
                        <i class="register__icon fas fa-map-marker-alt"></i>
                    </div>
                    <div class="register__field">
                        <input type="email" class="register__input" name="email" placeholder="Email" required>
                        <i class="register__icon fas fa-envelope"></i>
                    </div>
                    <div class="register__field">
                        <input type="password" class="register__input" name="password" placeholder="Password" required>
                        <i class="register__icon fas fa-lock"></i>
                    </div>
                    <div class="register__field">
                        <input type="number" class="register__input" name="telp" placeholder="Telepon" required>
                        <i class="register__icon fas fa-phone"></i>
                    </div>
                    <button type="submit" class="button register__submit">
                        <span class="button__text">Register</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                    <a href="login.php" style="color: #181818; text-decoration: none; margin-top: 20px; display: block; text-align: center;">Sudah Punya Akun? Login</a>
                </form>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
</body>

</html>