<html>
    <head>
        <title>
            Leer los datos desde los controles de fecha/hora
        </title>
    </head>

    <body>
        <h1>
            Leer los datos desde los controles de fecha/hora
        </h1>

        <p> La hora que envias por Post es
            <?php echo $_REQUEST["datetime"]; ?>
        </p>
        <p>
            La fecha que envias por post es :
            <?php echo $_REQUEST["fecha"]; ?>
        </p>
        <p>El resto de la informacion que envias es
        <pre>
            <?php print_r($_REQUEST); ?>
</p>
<a href="formularioweb.html">Volver a pagina anterior</a>

    </body>

</html>