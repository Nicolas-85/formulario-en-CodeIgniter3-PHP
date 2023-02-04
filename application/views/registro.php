<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registro de primer app!.</h1>
    <?php foreach($menu as $item): ?>
        <ul>
            <li> <a href="<?= $item['url']?>"><?= $item['title'] ?></a> </li>
        </ul>
    <?php endforeach; ?>

     <form name='formulario_registro' action="<?= base_url('registro/registrar') ?>" method='POST'> <!--action= a qué ruta se envían los datos del form.-->
        <div>
            <label for="username">Nombre de usuario: </label>
            <input name="user_name" id="user_name" autocomplete="off" value="">
        </div>
        <div>
            <label for="email">Correo Electrónico: </label>
            <input name="email" id="email" value="">
        </div>
        <div>
            <label for="username">Contraseña: </label>
            <input name="password" id="password" type="password" value="">
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <?= (isset($msj))? $msj : ' ' ?>

    </body>
</html>