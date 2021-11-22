<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Black Friday</title>

    <!-- Hotjar Tracking Code for https://blackfriday.losolivoscartagena.com/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:2713655,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
</head>

<body>
<header class="columns" style="flex-direction: column;">
    <div class="column is-flex is-justify-content-end mb-5">

        <ul class="cont-redes">
            <li>Síguenos</li>
            <li class="mt-1">
                <a href="https://www.facebook.com/Olivos.Ctg" target="_blank">
                    <img  src="./img/facebook-white.png" alt="" style="height: 22px; border-radius:0">
                </a>
            </li>
            <li class="mt-1">
                <a href="https://www.instagram.com/Olivos.Ctg" target="_blank">
                    <img  src="./img/instagram-white.png" alt="" style="height: 22px; border-radius:0">
                </a>
            </li>
            <li class="mt-1">
                <a href="https://api.whatsapp.com/send?phone=573008131043" target="_blank">
                    <img  src="./img/whatsapp-white.png" alt="" style="height: 22px; border-radius:0">
                </a>
            </li>
        </ul>
    </div>
    <div class="column is-flex is-justify-content-center">
        <img src="img/logo-olivos.png" style="border-radius:0" alt="logo olivos" width="102" height="47"/>
    </div>
    <div class="columns mt-6 is-justify-content-center">
        <div class="column container-titulo is-5-desktop">
            <h1 class="has-text-weight-bold is-size-2-desktop">Black friday Olivos Cartagena</h1>
            <p class="container-titulo--contenido is-size-5-desktop">
                Sé participe del evento más esperado por todos. En el que pretendemos rendir un tributo a tu ser querido y también brindarte la tranquilidad y el respaldo de nuestros planes de previsión integral.
            </p>

        </div>
        <div class="column is-flex is-justify-content-center is-5-desktop">
            <form action="php/sendData.php" method="post" class="container-formulario is-8-desktop">
                <h2 class="has-text-centered mb-4">Apuntate al descuento</h2>
                <div class="field">
                    <label  class="label is-size-7-mobile has-text-weight-light">Nombres</label>
                    <div class="control">
                        <input class="input" type="text" name="nombres" id="nombres"/>
                    </div>
                </div>
                <div class="field">
                    <label class="label is-size-7-mobile mt-2 has-text-weight-light">Télefono</label>
                    <div class="control">
                        <input class="input " type="number" name="telefono" id="telefono"/>
                    </div>
                </div>

                <div class="field">
                    <label class="label is-size-7-mobile mt-2 has-text-weight-light">Correo</label>
                    <div class="control">
                        <input class="input" type="email" name="correo" id="correo"/>
                    </div>
                </div>

                <div class="field mt-5">
                    <div class="control">
                        <label class="checkbox is-size-7-mobile">
                            <input type="checkbox" name="check" id="check"/>Acepto los <a href="#">términos y
                                condiciones</a>
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
    </div>
</header>
<section>
    <div class="column">
        <div class="infogram-embed mt-5 is-flex is-justify-content-center"
             data-id="52162a9d-1fa2-4483-966a-f4c5b2d0047a" data-type="interactive" data-title="promocion"></div>
        <script>
            !(function (e, i, n, s) {
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
                    <h3 class="has-text-centered has-text-weight-bold is-size-4-desktop mb-5">Todos nuestros productos y servicios del parque cementerio con los mejores descuentos.</h3>
                    <h4 class="has-text-centered">Osarios en pared</h4>
                    <div class="container-splide mt-5 container">
                        <div class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/osarios/osario-1.jpg"
                                             alt="osario ubicación 1">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">OSARIO UBICACIÓN 1</h3>
                                            <p class="">
                                                Precio actual: $3.060.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $1.836.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0001-osarios-de-pared-sencillo-ubicacion-1">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/osarios/osario-2.jpg" alt="osario ubicacion 2">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">OSARIO UBICACIÓN 2</h3>
                                            <p class="">
                                                Precio actual: $3.240.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $1.944.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0002-osarios-de-pared-sencillo-ubicacion-2">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/osarios/osario-3.jpg" alt="osario ubicacion 3">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">OSARIO UBICACIÓN 3</h3>
                                            <p class="">
                                                Precio actual: $3.420.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $2.052.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0003-osarios-de-pared-sencillo-ubicacion-3">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/osarios/osario-4.jpg" alt="osario ubicacion 4">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">OSARIO UBICACIÓN 4</h3>
                                            <p class="">
                                                Precio actual: $3.600.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $2.160.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0004-osarios-de-pared-sencillo-ubicacion-4">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/osarios/osario-5.jpg" alt="osario ubicacion 5">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">OSARIO UBICACIÓN 5</h3>
                                            <p class="">
                                                Precio actual: $3.600.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $2.160.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0005-osarios-de-pared-sencillo-ubicacion-5">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/osarios/osario-6.jpg" alt="osario ubicacion 6">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">OSARIO UBICACIÓN 6</h3>
                                            <p class="">
                                                Precio actual: $3.600.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $2.160.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0006-osarios-de-pared-sencillo-ubicacion-6">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/osarios/osario-7.jpg" alt="osario ubicacion 7">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">OSARIO UBICACIÓN 7</h3>
                                            <p class="">
                                                Precio actual: $3.420.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $2.052.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0007-osarios-de-pared-sencillo-ubicacion-7">
                                                        <button class="button">ver más</button>
                                                    </a>
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
                                        <img class="radius-img" src="./img/cenizarios/cenizario-a.jpg" alt="cenizario ubicacion a">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">CENIZARIO UBICACIÓN A</h3>
                                            <p class="">
                                                Precio actual: $2.570.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $1.542.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0012-cenizario-sencillo-de-pared-ubicacion-a">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/cenizarios/cenizario-b.jpg" alt="cenizario ubicacion b">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">CENIZARIO UBICACIÓN B</h3>
                                            <p class="">
                                                Precio actual: $2.250.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $1.350.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0011-cenizario-sencillo-de-pared-ubicacion-b">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/cenizarios/cenizario-c.jpg" alt="cenizario ubicacion c">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">CENIZARIO UBICACIÓN C</h3>
                                            <p class="">
                                                Precio actual: $2.100.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $1.260.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0010-cenizario-sencillo-de-pared-ubicacion-c">
                                                        <button class="button">ver más</button>
                                                    </a>
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
                                        <img class="radius-img" src="./img/productos-servicios/exhumacion-particular+caja-de-restos.jpg" alt="exhumacion particular mas caja de restos">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">EXHUMACIÓN PARTICULAR + CAJA DE RESTOS</h3>
                                            <p class="">
                                                Precio actual: $895.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $447.500
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0017-exhumacion-+-caja-de-restos">
                                                     <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/productos-servicios/exhumacion-PFG-paquete-olivos.jpg" alt="arriendo vencido por 3 anos">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">EXHUMACIÓN PFG PAQUETE OLIVOS</h3>
                                            <p class="">
                                                Precio actual: $550.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $385.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0018-exhumacion-pfg-paquete-olivos">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/productos-servicios/cremacion-profunda.jpg" alt="cremacion profunda">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">CREMACIÓN PROFUNDA</h3>
                                            <p class="">
                                                Precio actual: $920.700
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $460.350
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0016-cremacion-de-restos-profunda-sin-urna-afiliados">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/productos-servicios/cremacion-sencilla.jpg" alt="cremacion sencilla">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">CREMACIÓN SENCILLA</h3>
                                            <p class="">
                                                Precio actual: $506.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $253.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0015-cremacion-de-restos-sencilla-sin-urna">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/productos-servicios/adecuacion-parcela.jpg" alt="adecuacion parcela">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">ADECUACIÓN A PARCELA</h3>
                                            <p class="">
                                                Precio actual: $2.409.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $1.686.300
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0031-adecuacion-a-parcela">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/productos-servicios/conmemoracion-capilla.jpg" alt="conmemoración en capilla">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">CONMEMORACIÓN EN CAPILLA</h3>
                                            <p class="">
                                                Precio actual: $213.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $149.100
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PCC0035-conmemoracion-en-capilla">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/productos-servicios/conmemoracion-lote.jpg" alt="conmemoración en lote">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">CONMEMORACIÓN EN LOTE</h3>
                                            <p class="">
                                                Precio actual: $148.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $103.600
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PCC0036-conmemoracion-en-lote">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/productos-servicios/exhumacion-particular.jpg" alt="exhumacion particular">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">EXHUMACIÓN PARTICULAR</h3>
                                            <p class="">
                                                Precio actual: $895.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $447.500
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0017-servicio-de-exhumacion-particulares">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/productos-servicios/exhumacion-pfg.jpg" alt="exhumacion pfg">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">EXHUMACIÓN PFG</h3>
                                            <p class="">
                                                Precio actual: $550.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $385.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO0018-servicio-de-exhumacion-afiliados-olivos">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/productos-servicios/mantenimiento-lote.jpg" alt="mantenimiento a lote">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">MANTENIMIENTO DE LOTE</h3>
                                            <p class="">
                                                Precio actual: $286.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $114.400
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PPCO00022-mantenimiento-de-lote-nuevo-x-1-ano">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/productos-servicios/mantenimiento-lote-renovacion.jpg" alt="mantenimiento de tumba renovación">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">MANTENIMIENTO DE LOTE RENOVACIÓN</h3>
                                            <p class="">
                                                Precio actual: $209.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $146.300
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PCC0034-mantenimiento-de-lote-renovacion">
                                                        <button class="button">ver más</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <img class="radius-img" src="./img/productos-servicios/servicio-parque.jpg" alt="servicio parque">
                                        <div class="mt-4 px-2">
                                            <h3 class="has-text-weight-bold mb-4">SERVICIO PARQUE</h3>
                                            <p class="">
                                                Precio actual: $1.480.000
                                            </p>
                                            <p class="is-size-6-mobile has-text-weight-bold mb-3">
                                                Precio descuento: $1.036.000
                                            </p>
                                            <div class="field is-grouped is-justify-content-center my-4">
                                                <div class="control">
                                                    <a href="https://www.portal.losolivoscartagena.com/tienda/producto/PCC0032-servicio-de-parque">
                                                        <button class="button">ver más</button>
                                                    </a>
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
                <div class="column container-afiliaciones has-text-centered mt-6">
                    <p class="is-size-4-desktop">
                        Participa en el premio de los muchos <b class="has-text-weight-bold">bonos</b>  que tenemos disponibles y algunos souvenirs.
                    </p><br>
                    <p class="is-size-4-desktop">
                        Para ganar, solo debes afiliarte. Tu número de contrato será el código con el que participarás.
                    </p>
                </div>
            </div>
            <div class="is-flex is-justify-content-center container-afiliaciones--imagen my-5">
                <img src="./img/bono-final.png" alt="bono">
            </div>

            <div class="my-6">
                <h4 class="has-text-centered is-size-2-desktop has-text-weight-bold mb-4">Souvenirs</h4>

                <div class="is-flex is-justify-content-center mt-3">
                    <div class="splide4 container">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" style="border-radius: 0; box-shadow:none">
                                    <img class="splide__slide--paraguas" src="./img/paraguas.png" alt="paraguas olivos">
                                </li>
                                <li class="splide__slide" style="border-radius: 0; box-shadow:none">
                                    <img class="splide__slide--gorra" src="./img/gorra.png" alt="gorra olivos">
                                </li>
                                <li class="splide__slide" style="border-radius: 0; box-shadow:none">
                                    <img class="splide__slide--bolso" src="./img/bolso.png" alt="bolso olivos">
                                </li>
                                <li class="splide__slide" style="border-radius: 0; box-shadow:none">
                                    <img class="splide__slide--mugs" src="./img/mugs.png" alt="mugs olivos">
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
                <div class="columns mt-6 is-justify-content-center" style="margin: 0 auto !important; column-gap: 101px;">
                    <div class="column is-flex-desktop is-justify-content-center is-5-desktop">
                        <div class="card  columns is-flex-mobile">
                            <div class="container-text-card is-7-fullhd is-6-desktop is-12-mobile column">
                                <h3 class="is-size-5-desktop has-text-weight-bold" style="color: #F94F22;">Plan 6+1 sin
                                    destino final</h3>
                                <p class="my-4">
                                    Titular menor a 65 años
                                    2 beneficiarios hasta 75 años de edad y 4 sin importar lazos de consanguinidad,
                                    menore a 60 años. No incluye destino final
                                </p>
                                <span>Valor de $18.000 pesos</span> <br>
                                <a href="https://www.portal.losolivoscartagena.com/afiliacion-en-linea">
                                    <button class="mt-4">Afiliarme ahora</button>
                                </a>

                            </div>

                            <img class=" imgplan" src="img/plan6+1.jpg" alt="familia amorosa">
                        </div>
                    </div>
                    <div class="column is-flex-desktop  my-5-mobile is-5-desktop">
                        <div class="card  columns is-flex-touch">
                            <div class="container-text-card is-7-fullhd is-7-desktop is-12-mobile is-12-touch column">
                                <h3 class="is-size-5-desktop has-text-weight-bold" style="color: #F94F22;">Plan 6+1
                                    integral</h3>
                                <p class="my-4">
                                    Incluye titular con edad de ingreso de 65 años, 2 beneficiarios hasta 75 años y 4
                                    hasta 60 años. No importa el parentesco. <br>
                                    Incluye destino final y nicho a perpetuidad en nuestro parque cementerio Jardín los
                                    Olivos.
                                </p>
                                <span>Valor de $26.000 pesos</span> <br>
                                <a href="https://www.portal.losolivoscartagena.com/afiliacion-en-linea">
                                    <button class="mt-4">Afiliarme ahora</button>
                                </a>

                            </div>
                            <img class="imgplan is-10-fullhd is-8-desktop" src="img/plan6+1integral.jpg" alt="familia unida">
                        </div>
                    </div>
                </div>

                <div class="column is-flex-desktop is-justify-content-center my-5">
                    <div class="card  columns is-flex-touch">
                        <div class="container-text-card is-7-fullhd is-7-desktop is-12-mobile is-12-touch column">
                            <h3 class="is-size-5-desktop has-text-weight-bold" style="color: #F94F22;">Plan fraternal</h3>
                            <p class="my-4">
                                Titular menor a 65 añoss
                                Incluye todo lo relacionado con el homenaje puede vincular su primer lazo de consanguinidad,
                                esposa, cualquier número de hijos, padres. Incluye destino final y nicho a perpetuidad en
                                nuestro parque cementerio Jardín los Olivos.
                            </p>
                            <span>Valor de $23.000 pesos</span> <br>
                            <a href="https://www.portal.losolivoscartagena.com/afiliacion-en-linea">
                                <button class="mt-4">Afiliarme ahora</button>
                            </a>

                        </div>
                        <img class="imgplan is-10-fullhd is-8-desktop" src="img/plan+fraternal.jpg" alt="familia integrada">
                    </div>
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