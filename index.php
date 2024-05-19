<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la peticion y no mostrarla en la pantalla
// luego php es troll xd
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* 
Ejecutar la peticion y guardar el resultado
*/
$resultado = curl_exec($ch);
// convertirlo a json y que lo haga como arreglo asociativo para manipularlo, para array asociativo hay que incluir el true
$data = json_decode($resultado, true);
// cerrar la peticion
curl_close($ch);

// forma mas sencilla y rapida de llamar la api solo para obtener la api, GET
// El curl te ayuda a hacer peticiones de cualquier tipo de vervo
// $result = file_get_contents(API_URL); 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La próxima pelicula de Marvel</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="bg-dark">
    <!-- aplicacion -->
    <main>
        <section>
            <div class="container my-4">
                <div class="row">
                    <div class="col text-center">
                        <h2>La proxima pelicula de Marvel</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- <pre>
                        <?= var_dump($data); ?>
                    </pre> -->
                    <div class="col"></div>
                    <div class="col-8">
                        <div class="card" style="max-width: 740px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img class="img-fluid rounded-start" src="<?= $data['poster_url'] ?>" alt="Poster de <?= $data['title'] ?>" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?= $data['title'] ?> se estrena en <?= $data['days_until'] ?> días</h5>
                                        <p class="card-text">Fecha de estreno <?= $data['release_date'] ?></p>
                                        <p class="card-text">La siguiente pelicula es <?= $data['following_production']['title'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>