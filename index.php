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
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-violet-950">
    <!-- aplicacion -->
    <main>
        <section>
            <div class="grid mx-auto gap-5 text-center">
                <!-- <pre>
                        <?= var_dump($data); ?>
                    </pre> -->
                <!-- <div class="grid mx-auto gap-5"> -->
                <h2>La proxima pelicula de Marvel</h2>
                <img class="mx-auto w-sm rounded-2" src="<?= $data['poster_url'] ?>"
                    alt="Poster de <?= $data['title'] ?>" />
                <p><?= $data['title'] ?> se estrena en <?= $data['days_until'] ?> días</p>
                <p class="card-text">Fecha de estreno <?= $data['release_date'] ?></p>
                <p class="card-text">
                    La siguiente pelicula es <?= $data['following_production']['title'] ?>
                </p>
                <!-- </div> -->
            </div>
        </section>
    </main>
</body>

</html>