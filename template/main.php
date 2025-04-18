<!-- aplicacion -->
<main>
    <section>
        <div class="grid mx-auto gap-4 text-center my-20 text-violet-200">
            <h2 class="text-5xl">La proxima pelicula de Marvel</h2>
            <img class="mx-auto w-sm rounded-2xl drop-shadow-xl/50" src="<?= $poster_url ?>"
                alt="Poster de <?= $title ?>" />
            <p class="text-xl">
                <span class="font-extrabold"><?= $title ?> </span> - <?= $days_message ?>
            </p>
            <p class="text-xl">
                Fecha de estreno <?= $release_date ?>
            </p>
            <p class="text-xl">
                La siguiente pelicula es <span class="font-extrabold"><?= $following_production['title'] ?></span>
            </p>
        </div>
    </section>
</main>