<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include('./partials/head.php') ?>
    <title>Inscripciones | Fiesta Celestial</title>
</head>

<body>
    <main class="landing">
        <?php include('./partials/header.php') ?>

        <div class="landing__content-principal">
            <!-- Main Banner -->
            <div class="landing__main-banner">
                <img src="./images/banner-inscripciones.jpg" width="100%" alt="Fiesta Celestial">
            </div>

            <!-- Categories -->
            <sdection class="categories">
                <div class="d-flex align-items-start flex-column">
                    <div class="nav nav-pills me-3 mx-md-auto gap-2 gap-lg-3 gap-xl-5 d-grid categories__tablist"
                        id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link categories__tablist__link active" id="v-pills-inedita-tab"
                            data-bs-toggle="pill" data-bs-target="#v-pills-inedita" type="button" role="tab"
                            aria-controls="v-pills-inedita" aria-selected="true">
                            <span class="d-none d-lg-block">Concurso <br /><strong>Canción inédita</strong></span>
                            <span class="d-block d-lg-none"><img src="./images//icons/inedita.png"
                                    alt="Cancion inedita | Fiesta celestial"></span>
                        </button>
                        <button class="nav-link categories__tablist__link" id="v-pills-agrupacion-tab"
                            data-bs-toggle="pill" data-bs-target="#v-pills-agrupacion" type="button" role="tab"
                            aria-controls="v-pills-agrupacion" aria-selected="false">
                            <span class="d-none d-lg-block">Concurso <br /><strong>Agrupaciones</strong></span>
                            <span class="d-block d-lg-none"><img src="./images//icons/agrupacion.png"
                                    alt="Cancion inedita | Fiesta celestial"></span>
                        </button>
                        <button class="nav-link categories__tablist__link" id="v-pills-verseadores-tab"
                            data-bs-toggle="pill" data-bs-target="#v-pills-verseadores" type="button" role="tab"
                            aria-controls="v-pills-verseadores" aria-selected="false">
                            <span class="d-none d-lg-block">Concurso<br /><strong>Verseadores</strong></span>
                            <span class="d-block d-lg-none"><img src="./images//icons/versiadores.png"
                                    alt="Cancion inedita | Fiesta celestial"></span>
                        </button>
                        <button class="nav-link categories__tablist__link" id="v-pills-infantiles-tab"
                            data-bs-toggle="pill" data-bs-target="#v-pills-infantiles" type="button" role="tab"
                            aria-controls="v-pills-infantiles" aria-selected="false">
                            <span class="d-none d-lg-block">Concurso <br /><strong>Agrupaciones
                                    infantiles</strong></span>
                            <span class="d-block d-lg-none"><img src="./images//icons/infantiles.png"
                                    alt="Cancion inedita | Fiesta celestial"></span>
                        </button>
                        <button class="nav-link categories__tablist__link" id="v-pills-talleres-tab"
                            data-bs-toggle="pill" data-bs-target="#v-pills-talleres" type="button" role="tab"
                            aria-controls="v-pills-talleres" aria-selected="false">
                            <span class="d-none d-lg-block"><strong>Talleres</strong></span>
                            <span class="d-block d-lg-none"><img src="./images//icons/talleres.png"
                                    alt="Cancion inedita | Fiesta celestial"></span>
                        </button>
                    </div>
                    <div class="container tab-content m-auto mt-3" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-inedita" role="tabpanel"
                            aria-labelledby="v-pills-inedita-tab">
                            <div class="container m-auto">
                                <article class="row p-0 p-md-4">
                                    <div class="col-12 col-xl-6">
                                        <h1 class="title title--space m-0 mb-4">CANCIÓN INÉDITA</h1>
                                        <p class="text">Hermosas canciones que alegran el alma y el espíritu creadas
                                            sólo para Dios,
                                            así
                                            es
                                            la canción inédita en Fiesta Celestial, este evento hace un gran aporte
                                            cultural,
                                            porque al apoyar a los cantantes y autores a grabar, o servir de plataforma
                                            para
                                            que
                                            sus composiciones de ese tipo se conozcan, está creando otros segmentos en
                                            el
                                            mercado de la música Vallenata que no existía. <br> <br> En estos encuentros
                                            aglutinamos de todos los estilos y vertientes de la música del folclor
                                            autóctona
                                            de
                                            nuestra región, convirtiéndose en la principal vitrina o institución de
                                            comercialización y difusión de la música Góspel Vallenata</p>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <img class="w-100 ms-xl-5 mt-sm-3"
                                            src="./images/categorias/consurso-cancion-inedita.jpg" alt="">
                                    </div>
                                </article>

                                <!-- Reglamenteo -->
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                <strong class="">Requisitos y reglamentos de participación</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <article class="mt-4">
                                                    <h1 class="accordion__subititle"><strong>Canción inédita profesional
                                                            y aficionado</strong></h1>
                                                    <p>La Fundación Cejes Comunicaciones, en el marco del desarrollo del
                                                        evento Fiesta Celestial establece como términos de referencia
                                                        del presente concurso las siguientes disposiciones
                                                        reglamentarias, las cuales permitirán garantizar un concurso
                                                        objetivo, pulcro y transparente.</p>

                                                    <ul class="ps-5 mt-5 accordion__list">

                                                        <li> Se consideran en la categoría profesional los
                                                            compositores que hayan grabado una canción de su autoría en
                                                            una producción musical propia o de otro intérprete.</li>
                                                        <li> En la categoría aficionada podrán participar canciones
                                                            inéditas de compositores que no tengan canciones grabadas en
                                                            producciones musicales propias o de otros intérpretes.</li>
                                                        <li> Los compositores considerados profesionales no podrán
                                                            participar en la categoría de aficionado</li>
                                                        <li> Todos los participantes en FIESTA CELESTIAL deben venir
                                                            avalados por una carta pastoral donde se indique que son
                                                            cristianos de buen testimonio (Sin esta carta no hay
                                                            inscripción).</li>
                                                        <li> Los participantes deben llenar todos los datos del
                                                            formulario de inscripción; tanto el autor como el que
                                                            interpreta la canción.</li>
                                                        <li> Las canciones que participaran en el concurso de canción
                                                            inédita, deben ser ritmo vallenato en cualquiera de los
                                                            aires establecidos: son, paseo, merengue o puya</li>
                                                        <li> Las canciones deben contener un mensaje exaltando el
                                                            nombre de nuestro Señor Jesucristo, proclamando su soberanía
                                                            y sus obras, de igual manera se aceptan canciones con un
                                                            mensaje testimonial dándole la Gloria a DIOS y de </li>
                                                        exaltación a la creación del Señor.
                                                        <li> Las canciones deben enviarse al correo oficial
                                                            fiestacelestial@cejes.com en formato de video o audio con el
                                                            título de la canción y el nombre del compositor, además
                                                            deben anexar la letra de la canción, así como también una
                                                            pequeña biografía del autor. Esta información se tendrá en
                                                            cuenta para el proceso de preselección del concurso.</li>
                                                        <li> Se hará la preselección de las canciones participantes y
                                                            se avisará por un boletín de prensa en nuestra página en
                                                            internet www.cejes.com, también en las cuentas de Instagram
                                                            y Facebook @iglesiacejescentral y grupos de whatsapp.</li>
                                                        <li> Las canciones deberán ser interpretadas con caja,
                                                            guacharaca y acordeón. El único complemento que se permite
                                                            de la base musical antes descrita; es la guitarra.</li>
                                                        <li> Cada agrupación en lo posible debe contar con sus
                                                            propios instrumentos.</li>
                                                        <li> No se permiten saludos, ni pregones durante la
                                                            interpretación, quienes lo hagan se les descontaran puntos,
                                                            según lo delibere el jurado calificador, en la
                                                            interpretación.</li>
                                                        <li> No se permiten vestimentas con propagandas comerciales,
                                                            ni con logos de patrocinadores, ni con figuras o imágenes de
                                                            ningún tipo, ni publicidad política, así mismo no se
                                                            permitirán leyendas que no sean cristianas, ni
                                                            vestimentas indecorosas.</li>
                                                        <li> No se permitirán parodias, plagios, ni actuaciones en
                                                            tarima que copien modelos de la música secular.</li>
                                                        <li> El participante y su agrupación deben adjuntar
                                                            certificación de afiliación EPS o Régimen Subsidiado.</li>
                                                        <li> Adjuntar certificación bancaria a nombre del
                                                            concursante, con el fin entregar premios en el caso de ganar
                                                            en su modalidad.
                                                        <li>Adjuntar Rut impreso actualizado.</li>
                                                    </ul>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Botón de inscripción -->
                                <button class="btn btn-lg bg-yellow px-4 btn__inscripciones my-4">
                                    <a href="https://forms.gle/xyesPdrDaitZEJAG8" target="_blank"
                                        class="text-decoration-none btn__inscripciones__link title title--space">Inscríbete
                                        aquí</a>
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-agrupacion" role="tabpanel"
                            aria-labelledby="v-pills-agrupacion-tab">
                            <div class="container m-auto">
                                <article class="row p-0 p-md-4">
                                    <div class="col-12 col-xl-6">
                                        <h1 class="title title--space m-0 mb-4">AGRUPACIONES</h1>
                                        <p class="text">Es un derreoche de alabanza a Dios y alegría para quienes tienen
                                            la oportunidad de vivirlo, se creó de incentivar el talento musical y crear
                                            una plataforma para para que las agrupaciones cristianas se muestren, se
                                            realiza el concurso de Agrupaciones Profesionales para quienes ya han puesto
                                            su música en el acetato y Aficionadas para que participen quienes aún no han
                                            grabado. <br> <br> La música Vallenata es una de las manifestaciones
                                            culturales de mucha trascendencia a nivel local, Nacional e Internacional,
                                            es por eso que se hace necesario fomentar un evento cultural, que ayude al
                                            fortalecimiento de nuestras raíces musicales, en el cual se apoye la
                                            práctica musical colectiva, de una de las ramas de esta como lo es la música
                                            vallenata Góspel en los cristianos, Iglesias y eventos seculares.</p>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <img class="w-100 ms-xl-5 mt-sm-3"
                                            src="./images/categorias/concurso-agrupaciones.jpg" alt="">
                                    </div>
                                </article>
                                <!-- Reglamenteo -->
                                <div class="accordion accordion-flush" id="accordionAgrupaciones">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                <strong class="">Requisitos y reglamentos de participación</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionAgrupaciones">
                                            <div class="accordion-body">
                                                <article class="mt-4">
                                                    <h1 class="accordion__subititle"><strong>Concurso agrupaciones de
                                                            vallenato cristiano - profesionales y aficionados</strong>
                                                    </h1>
                                                    <p>La Fundación Cejes Comunicaciones, en el marco del desarrollo del
                                                        evento Fiesta Celestial establece como términos de referencia
                                                        del presente concurso las siguientes disposiciones
                                                        reglamentarias, las cuales permitirán garantizar un concurso
                                                        objetivo, pulcro y transparente.</p>

                                                    <ul class="ps-5 mt-5 accordion__list">
                                                        <li>Se considera agrupación aficionado la que no haya grabado ni
                                                            publicado un álbum musical vallenato.</li>
                                                        <li>Se considera agrupación profesional la que por lo menos haya
                                                            grabado y publicado un álbum musical vallenato.</li>
                                                        <li>Las agrupaciones consideradas profesionales no pueden
                                                            participar en la categoría aficionado y viceversa. Será
                                                            motivo de descalificación quien incurra en este hecho.</li>
                                                        <li>Todas las agrupaciones que participan en FIESTA CELESTIAL
                                                            deben venir avaladas por una carta pastoral donde se indique
                                                            que los participantes son cristianos y de buen testimonio.
                                                            Sin esta carta no hay inscripción. Los participantes deben
                                                            diligenciar todos los datos del formulario de inscripción
                                                            que se podrá descargar de la pagina web <a
                                                                href="http://www.cejes.com">cejes.com</a>.</li>
                                                        <li>Las agrupaciones deben estar conformadas por un acordeonero,
                                                            un cajero y un guacharaquero como mínimo. Se permiten todos
                                                            los instrumentos musicales, adicionales a los anteriormente
                                                            descritos, que la agrupación considere necesaria para su
                                                            mejor ejecución.</li>
                                                        <li>Las canciones que participarán deben tener como fin
                                                            primordial, exaltar el nombre de Jesucristo, proclamando su
                                                            soberanía y sus obras.</li>
                                                        <li>Las canciones deben enviarse al correo oficial
                                                            <strong>fiestacelestial@cejes.com</strong> en formato de
                                                            video o audio con el título de la canción y el nombre del
                                                            compositor, además deben anexar la letra de la canción, así
                                                            como también una pequeña biografía del autor. Esta
                                                            información se tendrá en cuenta para el proceso de
                                                            preselección del concurso.
                                                        </li>
                                                        <li>Se hará la preselección de las canciones participantes y se
                                                            avisará por un boletín de prensa en nuestra página en
                                                            internet www.cejes.com, también en las cuentas de Instagram
                                                            y Facebook @iglesiacejescentral y grupos de whatsapp.</li>
                                                        <li>Cada agrupación en lo posible debe contar con sus propios
                                                            instrumentos.</li>
                                                        <li>No se permiten saludos, ni pregones durante la
                                                            interpretación, quienes lo hagan se les descontaran puntos,
                                                            según lo delibere el jurado calificador.</li>
                                                        <li>No se permiten vestimentas con propagandas comerciales, ni
                                                            con logos de patrocinadores, ni con figura o imágenes de
                                                            ningún tipo, ni publicidad política, así mismo no se
                                                            permitirán leyendas que no sean cristianas, ni vestimentas
                                                            indecorosas.</li>
                                                        <li>No se permitirán parodias, plagios, ni actuaciones en tarima
                                                            que copien modelos de la música secular.</li>
                                                        <li>El participante y su agrupación deben adjuntar certificación
                                                            de afiliación EPS o Régimen Subsidiado.</li>
                                                        <li>Adjuntar <strong><u>certificación bancaria</u></strong> a
                                                            nombre del concursante, con el fin entregar premios en el
                                                            caso de ganar en su modalidad.</li>
                                                        <li>Adjuntar Rut impreso actualizado.</li>
                                                    </ul>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Botón de inscripción -->
                                <button class="btn btn-lg bg-yellow px-4 btn__inscripciones my-4">
                                    <a href="https://forms.gle/7gh4zNMgpXZsfYnv6" target="_blank"
                                        class="text-decoration-none btn__inscripciones__link title title--space">Inscríbete
                                        aquí</a>
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-verseadores" role="tabpanel"
                            aria-labelledby="v-pills-verseadores-tab">
                            <div class="container m-auto">
                                <article class="row p-0 p-md-4">
                                    <div class="col-12 col-xl-6">
                                        <h1 class="title title--space m-0 mb-4">VERSEADORES</h1>
                                        <p class="text">El talento para el repentismo, para incentivar la risa y el
                                            sentido del humor músical, para el pique sano hacen de los verseadores una
                                            de las competencias más esperadas cada año en Fiesta Celestial. Con
                                            participantes de toda Colombia cada año más músicos se han ido preparando
                                            para realizar presentaciones de calidad dignas de la excelencia que exige el
                                            talento que les regaló Dios.</p>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <img class="w-100 ms-xl-5 mt-sm-3"
                                            src="./images/categorias/concurso-verseadores.jpg" alt="">
                                    </div>
                                </article>
                                <!-- Reglamenteo -->
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                <strong class="">Requisitos y reglamentos de participación</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <article class="mt-4">
                                                    <h1 class="accordion__subititle"><strong>Concurso de
                                                            verseadores</strong></h1>
                                                    <p>La Fundación Cejes Comunicaciones, en el marco del desarrollo del
                                                        evento Fiesta Celestial establece como términos de referencia
                                                        del presente concurso las siguientes disposiciones
                                                        reglamentarias, las cuales permitirán garantizar un concurso
                                                        objetivo, pulcro y transparente.</p>

                                                    <ul class="ps-5 mt-5 accordion__list">

                                                        <li>Todas las agrupaciones que participan en FIESTA CELESTIAL
                                                            deben venir avaladas por una carta pastoral donde se indique
                                                            que los participantes son cristianos y de buen testimonio.
                                                            Sin esta carta no hay inscripción. Los participantes deben
                                                            diligenciar todos los datos del formulario de inscripción
                                                            que se podrá descargar de la página web <a
                                                                href="http://www.cejes.com">cejes.com</a>.</li>
                                                        <li>Los verseadores deben estar acompañados por una agrupación
                                                            vallenata integrada por: Acordeonero, Cajero y
                                                            Guacharaquero.</li>
                                                        <li>Cada agrupación en lo posible debe contar con sus propios
                                                            instrumentos</li>
                                                        <li>Los versos deben contener un mensaje cuyo fin primordial es
                                                            el de exaltar el nombre de nuestro Señor Jesucristo y se
                                                            interpretarán en cualquiera de los 4 aires vallenatos
                                                            asignados por el jurado.</li>
                                                        <li>No se permiten saludos, ni pregones durante la
                                                            interpretación, quienes lo hagan se les descontarán puntos,
                                                            según lo delibere el jurado calificador.</li>
                                                        <li>No se permiten vestimentas con propagandas comerciales, ni
                                                            con logos de patrocinadores, ni con figuras o imágenes de
                                                            ningún tipo, así mismo no se permitirán leyendas que no sean
                                                            cristianas, ni vestimentas indecorosas.</li>
                                                        <li>No se permitirán parodias, plagios, ni actuaciones en tarima
                                                            que copien modelos de la música secular.</li>
                                                        <li>El participante y su agrupación deben adjuntar certificación
                                                            de afiliación EPS o Régimen Subsidiado.</li>
                                                        <li>Adjuntar <strong><u>certificación bancaria</u></strong> a
                                                            nombre del concursante, con el fin entregar premios en el
                                                            caso de ganar en su modalidad.</li>
                                                        <li>Adjuntar Rut impreso actualizado.</li>
                                                    </ul>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Botón de inscripción -->
                                <button class="btn btn-lg bg-yellow px-4 btn__inscripciones my-4">
                                    <a href="https://forms.gle/4WcDLUmVFfGdVoYg8" target="_blank"
                                        class="text-decoration-none btn__inscripciones__link title title--space">Inscríbete
                                        aquí</a>
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-infantiles" role="tabpanel"
                            aria-labelledby="v-pills-infantiles-tab">
                            <div class="container m-auto">
                                <article class="row p-0 p-md-4">
                                    <div class="col-12 col-xl-6">
                                        <h1 class="title title--space m-0 mb-4">AGRUPACIONES INFANTILES</h1>
                                        <p class="text">Esta dirigido a niños y niñas que no superen los 14 años. Las
                                            agrupaciones estarán conformadas por un acordeonero, un cajero y un
                                            guacharaquero, así también se permiten todos los instrumentos musicales,
                                            adicionales a los anteriormente descritos, que la agrupación considere
                                            necesaria para su mejor ejecución.</p>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <img class="w-100 ms-xl-5 mt-sm-3" src="./images/sombrero.png" alt="">
                                    </div>
                                </article>
                                <!-- Reglamenteo -->
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                <strong class="">Requisitos y reglamentos de participación</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <article class="mt-4">
                                                    <h1 class="accordion__subititle"><strong>Concurso agrupaciones de
                                                            Vallenato cristiano infantil</strong></h1>
                                                    <p>La Fundación Cejes Comunicaciones, en el marco del desarrollo del
                                                        evento Fiesta Celestial establece como términos de referencia
                                                        del presente concurso las siguientes disposiciones
                                                        reglamentarias, las cuales permitirán garantizar un concurso
                                                        objetivo, pulcro y transparente.</p>

                                                    <ul class="ps-5 mt-5 accordion__list">
                                                        <li>Se considera agrupación infantil, aquella que está
                                                            conformada por niños que no superan los 14 años.</li>
                                                        <li>Todas las agrupaciones infantiles que participan en
                                                            <em>FIESTA CELESTIAL</em> deben venir avaladas por una carta
                                                            pastoral donde se indique que los participantes son
                                                            cristianos y de buen testimonio. Sin esta carta no hay
                                                            inscripción. Los participantes deben diligenciar todos los
                                                            datos del formulario de inscripción que se podrá descargar
                                                            de la página web <a
                                                                href="https://www.cejes.com">www.cejes.com</a>.
                                                        </li>
                                                        <li>Las agrupaciones infantiles deben estar conformadas por un
                                                            acordeonero, un cajero y un guacharaquero como mínimo. Se
                                                            permiten todos los instrumentos musicales, adicionales a los
                                                            anteriormente descritos, que la agrupación considere
                                                            necesaria para su mejor ejecución.</li>
                                                        <li>Las canciones deben enviarse al correo oficial <a
                                                                href="mailto:fiestacelestial@cejes.com">fiestacelestial@cejes.com</a>
                                                            en formato de video o audio con el título de la canción y el
                                                            nombre del compositor, además deben anexar la letra de la
                                                            canción, así como también una pequeña biografía del autor.
                                                            Esta información se tendrá en cuenta para el proceso de
                                                            preselección del concurso.</li>
                                                        <li>Se hará la preselección de las canciones participantes y se
                                                            avisará por un boletín de prensa en nuestra página en
                                                            internet <a href="https://www.cejes.com">www.cejes.com</a>,
                                                            también en las cuentas de Instagram y Facebook <a
                                                                href="https://www.instagram.com/iglesiacejescentral">
                                                                @iglesiacejescentral</a> y grupos de whatsapp.</li>
                                                        <li>Las canciones que participaran deben tener como fin
                                                            primordial, exaltar el nombre de Jesucristo, proclamando su
                                                            soberanía y sus obras.</li>
                                                        <li>Cada agrupación en lo posible debe contar con sus propios
                                                            instrumentos.</li>
                                                        <li>No se permiten saludos, ni pregones durante la
                                                            interpretación, quienes lo hagan se les descontaran puntos,
                                                            según lo delibere el jurado calificador.</li>
                                                        <li>No se permiten vestimentas con propagandas comerciales, ni
                                                            con logos de patrocinadores, ni con figura o imágenes de
                                                            ningún tipo, ni publicidad política, así mismo no se
                                                            permitirán leyendas que no sean cristianas, ni vestimentas
                                                            indecorosas.</li>
                                                        <li>No se permitirán parodias, plagios, ni actuaciones en tarima
                                                            que copien modelos de la música secular.</li>
                                                        <li>Cada participante debe estar acompañado de su representante
                                                            legal o acudiente autorizado.</li>
                                                        <li>El participante y su agrupación deben adjuntar certificación
                                                            de afiliación EPS o Régimen Subsidiado.</li>
                                                        <li>Adjuntar certificación bancaria a nombre del concursante,
                                                            con el fin entregar premios en el caso de ganar en su
                                                            modalidad.</li>
                                                        <li>Adjuntar Rut impreso actualizado del representante legal o
                                                            acudiente autorizado.</li>
                                                    </ul>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Botón de inscripción -->
                                <button class="btn btn-lg bg-yellow title-space px-4 btn__inscripciones">
                                    <a href="https://forms.gle/6bP61Ecz8Q3JyF7j8" target="_blank"
                                        class="text-decoration-none btn__inscripciones__link title title--space">Inscríbete
                                        aquí</a>
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-talleres" role="tabpanel"
                            aria-labelledby="v-pills-talleres-tab">
                            <div class="container m-auto">
                                <article class="row p-0 p-md-4">
                                    <div class="col-12">
                                        <img src="./images/categorias/talleres.png" class="w-100"
                                            alt="Inscripción a talleres | Fiesta Celestial">
                                    </div>
                                </article>
                                <button class="btn btn-lg bg-yellow px-4 btn__inscripciones my-4">
                                    <a href="https://forms.gle/Jo8UXbUzeN3G8HxdA" target="_blank"
                                        class="text-decoration-none btn__inscripciones__link title title--space">Inscríbete
                                        aquí</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </sdection>

            <?php include('./partials/footer.php') ?>
        </div>

    </main>
    <?php include('./partials/scripts.php') ?>
</body>

</html>