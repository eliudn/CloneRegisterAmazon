
<!DOCTYPE html>
<html>
<head>
    <title>Amazon Register Clone</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/amazon-ember" rel="stylesheet">

    <style>
        *{
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        }
        html{
            font-family: 'Amazon Ember', sans-serif;
            /* #FEE8B6 */
            font-size: 11pt;
            color: #333;
        }
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f6f6f6;
        }
        p{
            font-size: 10pt;
            color: #868e96;
            margin-top: 0;
        }
        a{
            text-decoration:none;
            color: #0B67C0;
        }
        h2{
            font-weight: normal;
            font-size: 20pt;
        }
        .icon_info{
            display: inline-block;
            width: 12px;
            height: 12px;
            background-image: url({{ asset('images/information-348.svg')}});
            background-size: contain;
            background-repeat: no-repeat;
            vertical-align: middle;
            color: #0B67C0;

        }
        hr{
            border: none;
            height: 2px;
            background: linear-gradient(
                to right,
                rgba(0, 0, 0, 0),
                rgba(0, 0, 0, 0.2) 50%,
                rgba(0, 0, 0, 0)
            );
            margin: 30px 0;
        }
        .register-container {
            width: 400px;
            padding: 20px;
            background: white;
            border: 1px solid #ccc;
            box-shadow: 0 2px 5px rgba(51,51,51,0.1);
            border-radius: 4px;
        }
        .register-container h2 {
            margin-bottom: 20px;
        }
        label{
            font-weight: bold;
        }
        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100% ;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #c0c0c0;
            border-radius: 4px;
        }
        .register-container button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(180deg,  #FEE886 0%, #f0c14b 100%);
            border: 1px solid #a88734;
            border-radius: 4px;
            margin-top: 10px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <a href=#>
        <img src="{{ asset('images/amazon_logo.png') }}" alt="logo amazon" height="40">
    </a>
    <div class="register-container">
        <h2>Crear cuenta</h2>
        <form id="registerForm">
            @csrf
            <div>
                <label for="name">Tu nombre</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Correo electronico</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Debe tener al meno 6 caracteres." required>
                <p><span class="icon_info"></span> La contraseña debe contener al menos seis caracteres.</p>
            </div>
            <div>
                <label for="password-confirm">Vuelve a escribir la contraseña</label>
                <input type="password" id="password-confirm" name="password_confirmation" required>
            </div>
            <button type="submit">Crear tu cuenta de Amazon</button>


            <p> Al crear una cuenta, aceptas las <a href=#>Condiciones de Uso</a> y el <a href>Aviso de privacidad</a> de Amazon.</p>
            <hr/>

            <p>¿Ya tienes cuenta? <a href=# >Iniciar sesion </a></p>
        </form>
        <p id="error-message" style="color: red; display: none;"></p>
    </div>

</body>
</html>
