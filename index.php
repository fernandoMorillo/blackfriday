<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <title>Black Friday</title>
</head>

<body>
    <header class="columns" style="flex-direction: column;">
        <div class="column is-flex is-justify-content-end mb-5">

            <ul class="cont-redes">
                <span>Síguenos</span>
                <li class="mt-1">
                    <a href="" target="_blank">
                        <img src="./img/facebook-white.png" alt="" style="height: 22px;">
                    </a>
                </li>
                <li class="mt-1">
                    <a href="" target="_blank">
                        <img src="./img/instagram-white.png" alt="" style="height: 22px;">
                    </a>
                </li>
                <li class="mt-1">
                    <a href="" target="_blank">
                        <img src="./img/whatsapp-white.png" alt="" style="height: 22px;">
                    </a>
                </li>
            </ul>
        </div>
        <div class="column is-flex is-justify-content-center">
            <img src="img/logo-olivos.png" alt="" width="102" height="47" />
        </div>
        <div class="columns mt-6">
            <div class="column container-titulo">
                <h1 class="has-text-weight-bold is-size-2-desktop">Black friday Olivos Cartagena</h1>
                <p class="container-titulo--contenido">
                    Copy copy copy copy copy copy Copy copy copy copy copy copy Copy copy copy copy copy copy Copy copy copy copy copy copy
                </p>
                <button class="container-titulo--btn mb-6">Me interesa</button>
            </div>
            <div class="column is-flex is-justify-content-center">
                <form action="php/sendData.php" method="post" class="container-formulario">
                    <h2 class="has-text-centered mb-4">Apuntate al descuento</h2>
                    <div class="field">
                        <label class="label is-size-7-mobile has-text-weight-light">Nombres</label>

                        <div class="control">
                            <input class="input" type="text" name="nombres" id="nombres" />
                        </div>
                    </div>
                    <div class="field">
                        <label class="label is-size-7-mobile mt-2 has-text-weight-light">Télefono</label>
                        <div class="control">
                            <input class="input " type="number" name="telefono" id="telefono" />
                        </div>
                    </div>

                    <div class="field">
                        <label class="label is-size-7-mobile mt-2 has-text-weight-light">Correo</label>
                        <div class="control">
                            <input class="input" type="email" name="correo" id="correo" />
                        </div>
                    </div>

                    <div class="field mt-5">
                        <div class="control">
                            <label class="checkbox is-size-7-mobile">
                                <input type="checkbox" name="check" id="check" />Acepto los <a href="#">terminos y condiciones</a>
                            </label>
                        </div>

                        <div class="field is-grouped is-justify-content-center mt-4">
                            <div class="control">
                                <button class="button" id="send">Reservar descuento</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
    </header>
    <section>
        <div class="column">
            <div class="infogram-embed mt-5 is-flex is-justify-content-center" data-id="52162a9d-1fa2-4483-966a-f4c5b2d0047a" data-type="interactive" data-title="promocion"></div>
            <script>
                !(function(e, i, n, s) {
                    var t = "InfogramEmbeds",
                        d = e.getElementsByTagName("script")[0];
                    if (window[t] && window[t].initialized)
                        window[t].process && window[t].process();
                    else if (!e.getElementById(n)) {
                        var o = e.createElement("script");
                        (o.async = 1),
                        (o.id = n),
                        (o.src = "https://e.infogram.com/js/dist/embed-loader-min.js"),
                        d.parentNode.insertBefore(o, d);
                    }
                })(document, 0, "infogram-async");
            </script>
        </div>
    </section>

    <main class="mt-6">
        <section>
            <div class="columns container-seleccion is-justify-content-center">
                <div class="column container-seleccion--parque is-two-fifths  has-text-centered mb-4">
                    <button id="active-view-parque">Parque cementerio</button>
                </div>
                <div class="column container-seleccion--turbaco is-two-fifths has-text-centered ">
                    <button id="active-view-afiliaciones">Afiliaciones turbaco</button>
                </div>
            </div>
        </section>

        <section id="is-active-view">
            <section class="my-5">
                <div class="columns">
                    <div class="column">
                        <h3 class="has-text-centered has-text-weight-bold">¿Cuál es la promoción del parque cementerio en el black friday?</h3>
                        <h4 class="has-text-centered">Osarios en pared</h4>
                        <div class="container-splide mt-5 container">
                            <div class="splide">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">OSARIO UBICACIÓN 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">OSARIO UBICACIÓN 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">OSARIO UBICACIÓN 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">OSARIO UBICACIÓN 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="my-5">
                <div class="columns">
                    <div class="column">
                        <h4 class="has-text-centered">Cenizarios</h4>
                        <div class="container-splide mt-5 container">
                            <div class="splide2">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">Cenizarios 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">Cenizarios UBICACIÓN 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">Cenizarios UBICACIÓN 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">Cenizarios UBICACIÓN 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="my-5">
                <div class="columns">
                    <div class="column">
                        <h4 class="has-text-centered">Productos y servicios</h4>
                        <div class="container-splide mt-5 container">
                            <div class="splide3">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">Productos y servicios 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">Productos y servicios UBICACIÓN 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">Productos y servicios UBICACIÓN 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="splide__slide">
                                            <img class="radius-img" src="./img/osarios-plazoleta.jpg">
                                            <div class="mt-4 px-2">
                                                <h3 class="has-text-weight-bold mb-4">Productos y servicios UBICACIÓN 1</h3>
                                                <p class="">
                                                    Precio actual: $3.060.000
                                                </p>
                                                <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                    Precio descuento: $1.224.000
                                                </p>
                                                <div class="field is-grouped is-justify-content-center my-4">
                                                    <div class="control">
                                                        <button class="button">ver más</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </section>

        <section id="is-active-view-afiliacion">
            <section>
                <div class="columns mb-6">
                    <div class="column container-afiliaciones is-flex is-justify-content-center mt-6">
                        <p class="">
                            Afilíate y participa en el premio de los más de <span style="font-weight:bold">20 bonos de alimentos</span> que tenemos disponibles con cupos desde $30.000 hasta $200.000 mil pesos y souvenirs
                        </p>
                    </div>
                </div>
                <div class="is-flex is-justify-content-center container-afiliaciones--imagen my-5">
                    <img src="./img/bono.png" alt="">
                </div>

                <div class="my-6">
                    <h4 class="has-text-centered is-size-2-desktop has-text-weight-bold mb-4">Souvenirs</h4>

                    <div class="is-flex is-justify-content-center mt-3">
                        <div class="splide4 container">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide" style="border-radius: none; box-shadow:none">
                                        <img class="splide__slide--paraguas" src="./img/paraguas.png" alt="">
                                    </li>
                                    <li class="splide__slide" style="border-radius: none; box-shadow:none">
                                        <img class="splide__slide--gorra" src="./img/gorra.png" alt="">
                                    </li>
                                    <li class="splide__slide" style="border-radius: none; box-shadow:none">
                                        <img class="splide__slide--bolso" src="./img/bolso.png" alt="">
                                    </li>
                                    <li class="splide__slide" style="border-radius: none; box-shadow:none">
                                        <img class="splide__slide--mugs" src="./img/mugs.png" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="my-6">
                    <div class="columns mb-6">
                        <div class="column mt-6">
                            <h4 class="is-size-2-desktop has-text-weight-bold has-text-centered">Nuestros planes</h4>
                        </div>
                    </div>
                    <div class="columns mt-6" style="margin: 0 auto !important">
                        <div class="column is-flex is-justify-content-center">
                            <div class="card  columns">
                                <div class="container-text-card is-half column">
                                    <h3 class="is-size-5-desktop has-text-weight-bold" style="color: #F94F22;">Plan 6+1 sin destino final</h3>
                                    <p class="my-4">
                                        Titular menor a 65 años
                                        2 beneficiarios hasta 75 años de edad y 4 sin importar lazos de consanguinidad, menore a 60 años. No incluye destino final
                                    </p>
                                    <span>Valor de $18.000 pesos</span> <br>
                                    <button class="mt-4">Afiliarme ahora</button>
                                </div>

                                <img src="img/familia.png" alt="">


                            </div>
                        </div>
                        <div class="column">
                            <div class="card  columns">
                                <div class="container-text-card is-half column">
                                    <h3 class="is-size-5-desktop has-text-weight-bold" style="color: #F94F22;">Plan 6+1 integral</h3>
                                    <p class="my-4">
                                        Incluye titular con edad de ingreso de 65 años, 2 beneficiarios hasta 75 años y 4 hasta 60 años. No importa el parentesco. <br>
                                        Incluye destino final y nicho a perpetuidad en nuestro parque cementerio Jardín los Olivos.
                                    </p>
                                    <span>Valor de $26.000 pesos</span> <br>
                                    <button class="mt-4">Afiliarme ahora</button>
                                </div>
                                <img src="img/familia.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="columns car2 is-mobile is-justify-content-center mt-6">
                        <div class="column is-half is-offset-one-quarter container-text-card">
                            <h3 class="is-size-5-desktop has-text-weight-bold" style="color: #F94F22;">Plan fraternal</h3>
                            <p class="my-4">
                                Titular menor a 65 añoss
                                Incluye todo lo relacionado con el homenaje puede vincular su primer lazo de consanguinidad, esposa, cualquier número de hijos, padres. Incluye destino final y nicho a perpetuidad en nuestro parque cementerio Jardín los Olivos.
                            </p>
                            <span>Valor de $23.000 pesos</span> <br>
                            <button class="mt-4">Afiliarme ahora</button>
                        </div>
                        <img src="img/familia.png" alt="">
                    </div>
                </section>
                <hr>
            </section>
        </section>



    </main>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="./js/splide.js"></script>
    <script src="./js/active-views.js"></script>
    <script src="./js/active.js"></script>
    <script src="./js/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</body>

</html>