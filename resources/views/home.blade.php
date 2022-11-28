@extends('layouts.app')
<link rel="shortcut icon" href="../images/logo.png"/>
 <!-- Swiper CSS -->
 <link rel="stylesheet" href="../assets/swiper-bundle.min.css">

 <!-- CSS -->
 <link rel="stylesheet" href="../assets/style.css">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('¡Supérate! Universities') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ingreso éxitoso - ¡Bienvenido!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slide-container swiper">
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="../images/uca.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Universidad Centroamericana José Simeón Cañas</h2>
                    <p class="description">La Universidad Centroamericana José Simeón Cañas, conocida simplemente como UCA El Salvador, es un centro de educación superior jesuita salvadoreño, de capital privado sin fines de lucro, también denominada como UCA. Fue la primera universidad en romper el monopolio de la Universidad de El Salvador en la educación superior salvadoreña y, por tanto, la primera...</p>

                    <form method="GET" action="/uca">
                    <input type="submit" class="button" value="Ver más"></input>
                    </form>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
    
                    <div class="card-image">
                        <img src="images/ues.jpg" alt="" class="card-img">
                    </div>
                </div>
    
                <div class="card-content">
                    <h2 class="name">Universidad de El Salvador</h2>
                    <p class="description">La Universidad de El Salvador es una institución pública y autónoma de educación superior, científica, crítica, participativa, democrática y comprometida con el desarrollo nacional integral, con la formación de profesionales de alta calidad humana, científica, tecnológica y con el medio ambiente y la vida , en todas sus formas y manifestaciones, así como con la producción y aplicación contextualizada...</p>
    
                    <form method="GET" action="/ues">
                        <input type="submit" class="button" value="Ver más"></input>
                        </form>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="../images/unssa.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Nueva San Salvador</h2>
                    <p class="description">La Universidad Nueva San Salvador “UNSSA”, nace en medio de una convulsión política y social que anunciaba apocalípticamente, la trágica y sangrienta guerra que enlutaría a nuestro país, y se constituye especialmente por la necesidad de abrir nuevas instituciones de educación superior, ante los frecuentes cierres de la Universidad de El Salvador. Surge con los anhelos de paz, libertad y cultura, convencida de...</p>

                    <form method="GET" action="/unssa">
                        <input type="submit" class="button" value="Ver más"></input>
                        </form>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/bosco.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Don Bosco</h2>
                    <p class="description">La Universidad Don Bosco (UDB) es una Universidad Salesiana de El Salvador localizada en el municipio de Soyapango, San Salvador, ciudad que forma parte del Área Metropolitana de San Salvador (AMSS). Esta universidad, de carácter privado, está integrada a la Ciudadela Don Bosco, que comprende la universidad misma junto al Colegio Don Bosco, institución de educación primaria y educación media...</p>

                    <form method="GET" action="/bosco">
                        <input type="submit" class="button" value="Ver más"></input>
                        </form>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="../images/matias.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Doctor José Matías Delgado</h2>
                    <p class="description">Nombrada en honor del sacerdote, abogado, político y héroe nacional José Matías Delgado, La Matías fue concebida como una organización sin fines de lucro por intelectuales, académicos y empresarios salvadoreños, con el objetivo de formar profesionales que tuviesen la capacidad de mejorar y dirigir el ámbito empresarial y judicial de la época. Desde su fundación en 1977, la característica de la Universidad...</p>

                    <form method="GET" action="/matias">
                        <input type="submit" class="button" value="Ver más"></input>
                        </form>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="../images/unicaes.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Cátolica de El Salvador</h2>
                    <p class="description">La Universidad Católica de El Salvador forma profesionales íntegros, con consciente posesión de conocimientos y estatura moral, que les impulse a servir con honestidad y eficacia al país y a sus semejantes.

                        La filosofía de la UNICAES está definida con la frase latina de nuestro emblema: LITTERAE SINE MORIBUS VANAE (La Ciencias sin Moral es Vana). La erudición sin ética carece de adecuado fundamento...</p>

                        <form method="GET" action="/unicaes">
                            <input type="submit" class="button" value="Ver más"></input>
                        </form>
                </div>
            </div>

            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/andres.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Dr. Andrés Bello</h2>
                    <p class="description">En el año de 1989, con la visión futurista que lo caracteriza al Dr. H. C. y Lic. Guillermo Escobar Hernández, dio inicio la creación de la Universidad Dr. Andrés Bello. El Dr. H. C. y Lic. Escobar socializó sus ideas con sus amigos más cercanos en esa época, muchos de ellos lo acompañaron brindándole apoyo moral y sugerencias para formar el tan visionario proyecto, así mismo pidió auxilio al Todopoderoso y fortalecido...</p>

                    <form method="GET" action="/bello">
                        <input type="submit" class="button" value="Ver más"></input>
                    </form>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/uma.jpg" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Modular Abierta</h2>
                    <p class="description">En 1981, año de grandes acontecimientos para la vida política, educativa, cultural y social de El Salvador, fue el momento en que un grupo de profesionales del país, decidieron crear una “nueva” institución que fuera capaz de ofrecer servicios educativos en el Nivel de educación Superior, con calidad y excelencia académica y con el imprescindible componente de accesibilidad a los estudios universitarios para las personas...</p>

                    <form method="GET" action="/modular">
                        <input type="submit" class="button" value="Ver más"></input>
                    </form>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/2.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Salvadoreña Alberto Masferrer</h2>
                    <p class="description">La Universidad Salvadoreña Alberto Masferrer (USAM), es una universidad privada ubicada en San Salvador, El Salvador. Fue fundada el 24 de noviembre de 1979. La Universidad Salvadoreña Alberto Masferrer fue nombrada en honor al ensayista y escritor salvadoreño Alberto Masferrer. Sus primeras ofertas académicas estaban en el rubro de las ciencias y la salud siendo las primeras carreras: Cirugía Dental...</p>

                    <form method="GET" action="/alberto">
                        <input type="submit" class="button" value="Ver más"></input>
                    </form>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/pili.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Universidad Politécnica</h2>
                    <p class="description">La Universidad Politécnica de El Salvador (UPES) es una universidad de utilidad pública, de capital privado, no lucrativa y carácter multidisciplinario, que forma parte del sistema de educación superior de la República de El Salvador. La UPES fue fundada el 8 de febrero de 1979 por cuarenta profesionales. En sus primeros años la universidad contó con el patrocinio de la Asociación de Profesionales en Tecnología...</p>

                    <form method="GET" action="/poli">
                        <input type="submit" class="button" value="Ver más"></input>
                    </form>
                </div>
            </div>
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img src="images/upan.png" alt="" class="card-img">
                    </div>
                </div>

                <div class="card-content">
                    <h2 class="name">Universidad Panamericana</h2>
                    <p class="description">La Universidad Panamericana de El Salvador, nace el 4 de mayo de 1989, según acuerdo N° 2432, publicado en El Diario Oficial, Tomo 307, N° 148, de fecha 19 de junio de 1990, como una corporación de utilidad pública, sin fines de lucro y como una institución privada y laica, con domicilio en San Salvador. Inició sus labores académicas a partir del 16 de marzo de 1990. Sus primeros Estatutos fueron aprobados...</p>

                    <form method="GET" action="/pana">
                        <input type="submit" class="button" value="Ver más"></input>
                    </form>
                </div>
        </div>
        <div class="card swiper-slide">
            <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                    <img src="images/ufg.jpg" alt="" class="card-img">
                </div>
            </div>

            <div class="card-content">
                <h2 class="name">Francisco Gavidia</h2>
                <p class="description">La Universidad Francisco Gavidia (UFG) es una universidad privada de El Salvador, ubicada en la ciudad de San Salvador, capital del país.2​. Se trata de una de las principales universidades del país, por su número de estudiantes y enseñanza académica. Aunado a ello, cuenta con las facultades de: Ingeniería y sistemas, Ciencias económicas, Arte y diseño, Ciencias sociales y Ciencias jurídicas La entidad universitaria...</p>

                <form method="GET" action="/gavidia">
                    <input type="submit" class="button" value="Ver más"></input>
                </form>
            </div>
        </div>
        <div class="card swiper-slide">
            <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                    <img src="images/uped.jpg" alt="" class="card-img">
                </div>
            </div>

            <div class="card-content">
                <h2 class="name">Pedagógica de El Salvador</h2>
                <p class="description">La Universidad Pedagógica de El Salvador surge como un centro de enseñanza superior con una mística y sello de trabajo que se caracteriza por la formación técnica, científica y humanística de recursos humanos en las diversas áreas del conocimiento del ámbito profesional; funciona bajo sistemas pedagógicos modernos cuya visión general de la educación es la de un proceso esencial para la formación integral...</p>

                <form method="GET" action="/pedagogica">
                    <input type="submit" class="button" value="Ver más"></input>
                </form>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                    <img src="images/esen2.png" alt="" class="card-img">
                </div>
            </div>
            <div class="card-content">
                <h2 class="name">Escuela Superior de Economía y Negocios</h2>
                <p class="description">La ESEN es una institución de educación superior, privada, sin fines de lucro, ubicada en la ciudad de Santa Tecla, departamento de La Libertad, El Salvador. La ESEN, que nace de un significativo y decisivo esfuerzo de un grupo de empresarios, ofrece tres programas de pregrado, bajo un enfoque de excelencia académica y oportunidad para todos: la Licenciatura en Economía y Negocios...</p>

                <form method="GET" action="/esen">
                    <input type="submit" class="button" value="Ver más"></input>
                </form>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                    <img src="images/monica.png" alt="" class="card-img">
                </div>
            </div>

            <div class="card-content">
                <h2 class="name">Escuela de Comunicaciones Mónica Herrera</h2>
                <p class="description">¿Sabés en qué nos diferenciamos?: unimos la educación a la vida. Nuestro objetivo siempre ha sido aplicar una metodología de aprendizaje centrada en el rigor académico, pero también en la aplicación práctica del conocimiento. Le llamamos: aprender haciendo. En la Escuela, el profesor es un facilitador del aprendizaje y vos, como alumno, aprendés desde tu propia individualidad...</p>

                <form method="GET" action="/monica">
                    <input type="submit" class="button" value="Ver más"></input>
                </form>
            </div>
        </div>
        <div class="card swiper-slide">
            <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                    <img src="images/itca.jpg" alt="" class="card-img">
                </div>
            </div>

            <div class="card-content">
                <h2 class="name">ITCA FEPADE Santa Tecla</h2>
                <p class="description">a Escuela Especializada en Ingeniería ITCA-FEPADE cuenta con una reconocida trayectoria académica, camino sustentado por el esfuerzo y la visión que dio paso a la concretización de su objetivo de fundación: impulsar la capacitación y el recurso humano de El Salvador. Estamos comprometidos con la calidad académica, la empresarialidad y la pertinencia de nuestra oferta educativa, por ello, hemos desarrollado un modelo...</p>

                <form method="GET" action="/itca">
                    <input type="submit" class="button" value="Ver más"></input>
                </form>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                    <img src="images/utec.png" alt="" class="card-img">
                </div>
            </div>
            <div class="card-content">
                <h2 class="name">Universidad tecnológica</h2>
                <p class="description">La proyección social es un componente fundamental de la educación superior, que permite la relación recíproca entre las instituciones de educación superior y la sociedad. Implica la comprensión del entorno, la puesta en práctica de mecanismos de aporte y facilitar medios para una interacción trascendente con los procesos académicos. Para la Utec, representa la función que, mediante proyectos y actividades que conllevan...</p>

                <form method="GET" action="/tecnologica">
                    <input type="submit" class="button" value="Ver más"></input>
                </form>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                    <img src="images/univo.jpg" alt="" class="card-img">
                </div>
            </div>
            <div class="card-content">
                <h2 class="name">Universidad de oriente</h2>
                <p class="description">La Universidad de Oriente (UNIVO) es un referente y actor social que promueve la gestión socialmente responsable y contribuye al desarrollo humano sustentable, principalmente en la Zona Oriental de El Salvador, no promueve el asistencialismo o la ayuda unilateral, y busca la cooperación entre distintos actores en términos de alianzas estratégicas, con un enfoque de acciones que promuevan el progreso...</p>

                <form method="GET" action="/univo">
                    <input type="submit" class="button" value="Ver más"></input>
                </form>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                    <img src="images/unsa.png" alt="" class="card-img">
                </div>
            </div>
            <div class="card-content">
                <h2 class="name">Universidad Autónoma de SA</h2>
                <p class="description">Nuestro objetivo es ser una institución modelo a nivel nacional e internacional en la formación de profesionales con sensibilidad humana y excelencia académica que promueva el desarrollo socioeconómico de El Salvador. Para la formación de profesionales a través de la docencia, investigación y proyección social, con calidad académica, ética y competitividad para contribuir al desarrollo nacional y así...</p>

                <form method="GET" action="/auto">
                    <input type="submit" class="button" value="Ver más"></input>
                </form>
            </div>
        </div>

        <div class="card swiper-slide">
            <div class="image-content">
                <span class="overlay"></span>

                <div class="card-image">
                    <img src="images/icc.png" alt="" class="card-img">
                </div>
            </div>
            <div class="card-content">
                <h2 class="name">Instituto Centro Cultural</h2>
                <p class="description">Somos una Institución que desarrolla actividades docentes para la enseñanza aprendizaje del Idioma Inglés e Informática, Formar Bachilleres Generales Y Asistentes Técnicos Bilingües, con las capacidades necesarias para responder a las exigencias modernas. Así mismo, realizar programas de expresión cultural que fortalezcan la identidad nacional y los que hagan posible el contacto con la cultura de los Estados Unidos de...</p>

                <form method="GET" action="/icc">
                    <input type="submit" class="button" value="Ver más"></input>
                </form>
            </div>
        </div>
    </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>


<!-- Swiper JS -->
<!--Uncomment this line-->
<script src="../assets/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<!--Uncomment this line-->
<script src="../assets/script.js"></script>
 
@endsection
