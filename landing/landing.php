<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
        body {
            background-color: #3b83bd;
        }

        p{
            font-size: xx-large;
            text-align: center;
        }

        h5{
            text-align: center;
        }

        h6{
            text-align: center;
        }

    </style>    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <br>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-danger" onclick="location.href='../preguntas/validacionEliminar.php'">Dar de baja mi cuenta</button>
                </div>
                <div class="col-md-6 text-end">
                    <button class="btn btn-dark" onclick="location.href='../php/login.php'">Cerrar sesion</button>
                </div>
            </div>
            <div class="col-md-12">
                <p>Bienvenido a la pagina para encontrar tu juego!!!</p>
            </div>
            
            <div class="col-md-12">
                <h5>Ahora debera de responder una seguidilla de preguntas para otorgarle el juego</h5>
                <h6>Precione el boton</h6>
                <h6>&#129297;</h6>
                <button style="margin: 0px 0px 0px 600px"class="btn btn-success" onclick="location.href='../preguntas/formulario.php'">Preguntas</button>
            </div>
        </div>
        
    </div>
</body>
</html>