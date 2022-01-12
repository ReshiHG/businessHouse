<?php 
    $siteTitle = "Business House | Propiedades";
	include_once('Templates/header.php');
?>	


    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 text-center">
                    <h1>Propiedades</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->   

    <!-- Projects -->
	<section id="projects" class="filter bg-gray">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Propiedades</h2>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <button class="button is-checked" data-filter="*">TODAS</button>
                        <button class="button" data-filter=".casa">Casas</button>
                        <button class="button" data-filter=".departamento">Departamentos</button>
                        <button class="button" data-filter=".terreno">Terrenos</button>
                        <button class="button" data-filter=".oficina">Oficinas</button>
                        <button class="button" data-filter=".local">Locales</button>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="element-item casa">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#CasaRemodeladaEnSateliteNaucalpan" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/card-img.jpg" alt="Foto Casa remodelada en Satélite Naucalpan">
                            <h4>Casa remodelada en Satélite Naucalpan</h4>
                            <p class="p-small direccion-card">Cerrada de Acuario 25 Jardines de Satélite, Naucalpan.</p>
                            <p class="precio-card">$8,500,000</p>
                            <p class="info-card">Hermosa casa completamente remodelada, con acabados modernos, fina madera en closet y puertas, en fraccionamiento con seguridad, calle cerrada con excelente ubicación muy cerca del Colegio Cristóbal Colón, Plaza Satélite y La Cuspide.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Casa remodelada en Satélite Naucalpan">Contactar</button>
                        </div>
                        <div class="element-item departamento">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#DepartamentoRemodeladoEnCalacoaya" src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/card-img.jpg" alt="Foto Departamento remodelado en Calacoaya">
                            <h4>Departamento remodelado en Calacoaya</h4>
                            <p class="p-small direccion-card">Av. Camino Real de Calacoaya #69 "A" Colonia Calacoaya Departamento J-301, Atizapán de Zaragoza.</p>
                            <p class="precio-card">$3,900,000</p>
                            <p class="info-card">Hermoso departamento remodelado en Calacoaya, frente a Club de Golf, con 2 estacionamientos, 3 recámaras, Elevador, 3 baños completos, Cuarto de servicio, Doble persiana (en cada cuarto), Sala comedor.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Departamento remodelado en Calacoaya">Contactar</button>
                        </div>
                        <div class="element-item departamento">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#ExcelenteDepartamentoEnVentaEnInsurgentesMixcoac" src="PropiedadesIMG/Departamento Mixcoac/card-img.jpg" alt="Foto Excelente Departamento en venta, en Insurgentes Mixcoac">
                            <h4>Excelente Departamento en venta, en Insurgentes Mixcoac</h4>
                            <p class="p-small direccion-card">Campana 20, Insurgentes Mixcoac, Benito Juárez, 03920 Ciudad de México, CDMX</p>
                            <p class="precio-card">$4,980,000</p>
                            <p class="info-card">Departamento en PLANTA BAJA, ubicado en Insurgentes Mixcoac. Son 3 torres, cada torre cuenta con 3 niveles , y 8 departamentos por piso. Excelente mantenimiento, acogedor e iluminado, cuenta con dos recámaras. La principal con baño completo, otro baño completo para áreas comunes, sala, comedor y cocina en espacios abiertos, área para lavadora.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Excelente Departamento en venta, en Insurgentes Mixcoac">Contactar</button>
                        </div>
                        <div class="element-item casa">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#CasaEnLasAlamedas" src="PropiedadesIMG/Casa Las Alamedas/card-img.jpg" alt="Foto Tortolas # 44 Fraccionamiento Las Alamedas, Atizapán de Zaragoza">
                            <h4>Casa en Las Alamedas</h4>
                            <p class="p-small direccion-card">Tortolas # 44 Fraccionamiento Las Alamedas, Atizapán de Zaragoza</p>
                            <p class="precio-card">$6,200,000</p>
                            <p class="info-card">Casa recién remodelada en Las Alamedas, Atizapán de Zaragoza, con 4 recámaras, 2 1/2 baños, con estacionamiento para 4 autos, sala de estar y de televisión, estudio, desayunador, cocina nueva con una isla, patio trasero con jardín y sala techada.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Casa en Las Alamedas">Contactar</button>
                        </div>
                        <div class="element-item casa">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#CasaEnValleDorado" src="PropiedadesIMG/Casa en Valle Dorado/card-img.jpg" alt="Fotos Casa en Valle Dorado">
                            <h4>Casa en Valle Dorado</h4>
                            <p class="p-small direccion-card">Boulevard Tulpan #23, Fracc. Valle Dorado, Tlalnepantla de Baz.</p>
                            <p class="precio-card">$4,300,000</p>
                            <p class="info-card">Casa ubicada en Valle Dorado, Tlalnepantla de Baz con 2 entradas, 3 recámaras, 2 baños completos, minibar, cisterna, 4 armarios, cuarto de recepción, cocina intgral y un garage con capacidad de 2 a 3 carros dependiendo el tamaño.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Casa en Valle Dorado">Contactar</button>
                        </div>
                        <div class="element-item casa">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#CasaEnValleEscondido" src="PropiedadesIMG/Casa en Valle Escondido/card-img.jpg" alt="Foto Casa en Valle Escondido">
                            <h4>Casa en Valle Escondido</h4>
                            <p class="p-small direccion-card">Cto. Valle Hermoso 65 Loma de Vallescondido Atizapán</p>
                            <p class="precio-card">$10,990,000.00</p>
                            <p class="info-card">Casa en Valle Escondido, Atizapán, con 3 recámaras, 3 baños completos y 2 medios baños, cocina integral con isla, jardín con pasto sintético, sótano, estacionamiento para 3 autos, cuarto de lavado, cuarto de despensa, estudio, sala y espacio para comedor.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Casa en Valle Escondido">Contactar</button>
                        </div>
                        <div class="element-item departamento">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#DepartamentoSantaFe" src="PropiedadesIMG/Santa Fé (Departamento)/card-img.jpg" alt="Foto Departamento Santa Fe">
                            <h4>Departamento Santa Fe</h4>
                            <p class="p-small direccion-card">Colonia Cedros a 10 min de Santa Fe</p>
                            <p class="precio-card">$6,500,000</p>
                            <p class="info-card">Departamento ubicado a 10 min de Santa Fe con 3 recámaras, 2 1/2 baños, 2 lugares de estacionamiento, y uno para visitas, Sala, comedor, antecomedor, lavandería, alberca techada, gimnasio, pista para correr, salón de fiestas, área de asadores y bosques con juegos para niños.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Departamento Santa Fe">Contactar</button>
                        </div>
                        <div class="element-item departamento">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#DepartamentoBerriozabal" src="PropiedadesIMG/Berriozabal/card-img.jpg" alt="Foto Departamento Beriozábal">
                            <h4>Departamento Beriozábal</h4>
                            <p class="p-small direccion-card">Cerrada de Berriozabal No. 11, Colonia Tlalnepantla Centro, Tlalnepantla de Baz, Edo. Méx, C.P. 54000</p>
                            <p class="precio-card">$3,224,000.00 </p>
                            <p class="info-card">Departamento inteligente de 88 m2, 2 recámaras, 2 baños completos, Cocina con cubiertos de Granito, Closets y persianas.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Departamento Beriozábal">Contactar</button>
                        </div>
                        <div class="element-item terreno">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#TerrenoHaciendaLaConcepción" src="PropiedadesIMG/Hacienda L C/card-img.jpg" alt="Foto Terreno Hacienda La Concepción">
                            <h4>Terreno Hacienda La Concepción</h4>
                            <p class="p-small direccion-card">Carretera Tepotzotlán a Arcos del Sitio Km. 12.5 Hacienda la Concepción, C.P. 54657</p>
                            <p class="precio-card">Desde $900,000</p>
                            <p class="info-card">Terrenos ubicados en el desarrollo Hacienda La Concepción con todos los servicios, a solo 20 min de Tepotzotlán con calles empedradas, mirador y con próxima zona comercial.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Terreno Hacienda La Concepción">Contactar</button>
                        </div>
                        <div class="element-item departamento">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#DepartamentoiKANI" src="PropiedadesIMG/iKANI/card-img.jpg" alt="Foto Departamento Ikani">
                            <h4>Departamento Ikani</h4>
                            <p class="p-small direccion-card">Lago Patzcuaro 636 Cumbres del Lago 76230 Juriquilla, Qro. México</p>
                            <p class="precio-card">Desde $4,000,000</p>
                            <p class="indo-card">Departamento de 147 m2 con vistas provilegiadas, 2 recámaras, 2 baños completos, 1 baño medio. Y diversas amenidades como: Parque, Estaciones de juego, ejercicio, descanso y culinarias, hamacas, salones de usos multiples, de musica, de video, canchas de Basquet, cancha polivalente y más.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Departamento Ikani">Contactar</button>
                        </div>
                        <div class="element-item terreno">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#terrenosNusKah" src="PropiedadesIMG/Nus Kah/card-img.jpg" alt="Foto terrenos Nus Kah">
                            <h4>Terrenos Nus kah</h4>
                            <p class="p-small direccion-card">Progreso, 97323 Nus Káh, Yuc.</p>
                            <p class="precio-card">$704,000.00</p>
                            <p class="info-card">Terreno en ubicación privilegiada en la península de Yucatán, a 20 minutos de Mérida, Club exclusivo con restaurante yucateco gourmet, piscina con bar, muelle social, palapas, camastros, spa, baños y vestidores.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Terrenos Nus Kah">Contactar</button>
                        </div>
                        <div class="element-item departamento">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#depaRinconadaValleDorado" src="PropiedadesIMG/Rinconada Valle Dorado/card-img.jpg" alt="Foto Departamento Rinconada Valle Dorado">
                            <h4>Departamento Rinconada Valle Dorado</h4>
                            <p class="p-small direccion-card">Fraccionamiento el dorado, 54020 Tlalnepantla de Baz, Méx., México</p>
                            <p class="precio-card">Desde $2,800,000</p>
                            <p class="info-card">Departamentos en Rinconada de valle Dorado, de 106 a 108 m2, entrega inmediata, listos para habitar, cuentan con todos los servicios, 3 recámaras, sala, comedor, cocina equipada, 2 baños completos, área de lavado, elevador y roof garden</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Departamento Rinconada Valle Dorado">Contactar</button>
                        </div>
                        <div class="element-item casa">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#casaVivace" src="PropiedadesIMG/Vivace Casa/card-img.jpg" alt="Foto Casa Vivace">
                            <h4>Casa Vivace</h4>
                            <p class="p-small direccion-card">Calle Jacarandas 6, Jardines de Atizapán, Ciudad López Materos, Edo. Mex.</p>
                            <p class="precio-card">Desde $5,250,000</p>
                            <p class="info-card">Casa de 190 m2, 3 recámaras, 3 1/2 Baños, sala, comedor, vestidor, terraza, patio de servicio, jardín, áreas verdes y área de lavado.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Casa Vivace">Contactar</button>
                        </div>
                        <div class="element-item departamento">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#departamentoVivace" src="PropiedadesIMG/Vivace Depto/card-img.jpg" alt="Foto Departamento Vivace">
                            <h4>Departamento Vivace</h4>
                            <p class="p-small direccion-card">Calle Jacarandas 6, Jardines de Atizapán, Ciudad López Materos, Edo. Mex.</p>
                            <p class="precio-card">Desde $3,231,000</p>
                            <p class="info-card">Departamento de 116 m2, 2 o 3 recámaras, 2 baños, sala, comedor, terraza y patio de servicio, 2 lugares de estacionamiento y excelentes acabados.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Departamento Vivace">Contactar</button>
                        </div>
                        <div class="element-item terreno">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#terrenoLaReserva" src="PropiedadesIMG/La Reserva/card-img.jpg" alt="Foto La Reserva">
                            <h4>Terreno La Reserva</h4>
                            <p class="p-small direccion-card">km 7.8, Carretera Mérida - Progreso, Mérida - Chicxulub, 97342 Mérida, Yuc.</p>
                            <p class="precio-card">Desde $3,160 el m2</p>
                            <p class="info-card">Terreno ubicado en la zona de mayor plusvalía, a pocos minutos de zonas comerciales, hospitales y escuelas, cuenta con seguridad, un portón de acceso, áreas verdes y una valla perimetral electrificada.</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Terreno La Reserva">Contactar</button>
                        </div>
                        <div class="element-item terreno">
                            <img class="img-fluid" data-bs-toggle="modal" data-bs-target="#TerrenoElFaroDeLosCisnes" src="PropiedadesIMG/Terreno El faro de los cisnes/Principal.jpeg" alt="Foto El faro de los cisnes">
                            <h4>Terreno El Faro de los Cisnes</h4>
                            <p class="p-small direccion-card">Carretera Estatal 413 Santa Bárbara-Coroneo, Km. 11.2 Santa Bárbara, Carr. Huimilpan-Coroneo, 76900 Santa Barbara, Qro.</p>
                            <p class="precio-card">Desde $2,760 el m2</p>
                            <p class="info-card">Terreno ubicado en el El Faro de los Cisnes, con un espectacular entorno natural con urbanización de primer nivel, como lo son escuelas y universidades, club Hípico, ciclovías y amplias vialidades, extensas áreas verdes y áreas especiales para mascotas</p>
                            <button class="btn-solid-reg propiedadBtn" data-propiedad="Terreno El Faro de los Cisnes">Contactar</button>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </section> <!-- end of filter -->
    <!-- end of projects -->

    <aside class="modal fade LightBoxGallery" id="CasaRemodeladaEnSateliteNaucalpan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <figure class="LB-gallery-item">
                                    <img src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/principal.jpeg" alt="Fachada" class="d-block w-100">
                                    <figcaption>Fachada</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/Sala_vista_completa.jpeg" alt="Sala" class="d-block w-100">
                                    <figcaption>Sala</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/Sala_1.jpeg" alt="Sala" class="d-block w-100">
                                    <figcaption>Sala</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/Pasillo_interior.jpeg" alt="Pasillo" class="d-block w-100">
                                    <figcaption>Pasillo</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/Pasillo_interior_2.jpeg" alt="Pasillo" class="d-block w-100">
                                    <figcaption>Pasillo</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/Comedor_1.jpeg" alt="Comedor" class="d-block w-100">
                                    <figcaption>Comedor</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/Comedor_lejos.jpeg" alt="Comedor" class="d-block w-100">
                                    <figcaption>Comedor</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/Cocina_integral.jpeg" alt="Cocina" class="d-block w-100">
                                    <figcaption>Cocina</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/Cocina_espaciosa.jpeg" alt="Cocina" class="d-block w-100">
                                    <figcaption>Cocina</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/Baño_jacuzzi.jpeg" alt="Baño" class="d-block w-100">
                                    <figcaption>Baño</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/Baño_completo_1.jpeg" alt="Baño" class="d-block w-100">
                                    <figcaption>Baño</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa remodelada Satelite Naucalpan (Acuario)/Baño_completo_2.jpeg" alt="Baño" class="d-block w-100">
                                    <figcaption>Baño</figcaption>
                                </figure>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="DepartamentoRemodeladoEnCalacoaya" tabindex="-1" aria-labelledby="depaCalacoayaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                    <div id="depaCalacoayaControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <figure class="LB-gallery-item">
                                    <img src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/principal.jpeg" alt="Sala" class="d-block w-100">
                                    <figcaption>Sala</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/Sala_1.jpeg" alt="Sala" class="d-block w-100">
                                    <figcaption>Sala</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/Puerta_entrada.jpeg" alt="Entrada" class="d-block w-100">
                                    <figcaption>Entrada</figcaption>
                                </figure>
                            </div>

                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/Dormitorio_pantalla.jpeg" alt="Dormitorio" class="d-block w-100">
                                    <figcaption>Dormitorio</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/Dormitorio_closet.jpeg" alt="Dormitorio" class="d-block w-100">
                                    <figcaption>Dormitorio</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/Cocina_fregadero.jpeg" alt="Cocina" class="d-block w-100">
                                    <figcaption>Cocina</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/Pasillo.jpeg" alt="Pasillo" class="d-block w-100">
                                    <figcaption>Pasillo</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/Piscina.jpeg" alt="Piscina" class="d-block w-100">
                                    <figcaption>Piscina</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/Estacionamiento_1.jpeg" alt="Estacionamiento" class="d-block w-100">
                                    <figcaption>Estacionamiento</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/Gimnasio_1.jpeg" alt="Gimnasio" class="d-block w-100">
                                    <figcaption>Gimnasio</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/Baño_completo.jpeg" alt="Baño" class="d-block w-100">
                                    <figcaption>Baño</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento remodelado Calacoaya (Ale)/Regadera.jpeg" alt="Baño" class="d-block w-100">
                                    <figcaption>Baño</figcaption>
                                </figure>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#depaCalacoayaControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#depaCalacoayaControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="ExcelenteDepartamentoEnVentaEnInsurgentesMixcoac" tabindex="-1" aria-labelledby="depaMixcoacLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                    <div id="depaMixcoacControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <figure class="LB-gallery-item">
                                    <img src="PropiedadesIMG/Departamento Mixcoac/principal.jpg" alt="Fachada" class="d-block w-100">
                                    <figcaption>Fachada</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Sala y comedor.jpg" alt="Sala y comedor" class="d-block w-100">
                                    <figcaption>Sala y comedor</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Estancia.jpg" alt="Estancia" class="d-block w-100">
                                    <figcaption>Estancia</figcaption>
                                </figure>
                            </div>

                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Cocina_integral.jpg" alt="Cocina integral" class="d-block w-100">
                                    <figcaption>Cocina Integral</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Terraza con acceso a sala, y a ambas recamaras.jpg" alt="Terraza" class="d-block w-100">
                                    <figcaption>Terraza</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Recámara secundaria.jpg" alt="Recámara" class="d-block w-100">
                                    <figcaption>Recámara</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Baño_completo_1.jpg" alt="Baño" class="d-block w-100">
                                    <figcaption>Baño</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Área común, salón usos multiples.jpg" alt="Área común" class="d-block w-100">
                                    <figcaption>Área común</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Área de gimnasio con servicio de WC.jpeg" alt="Gimnasio" class="d-block w-100">
                                    <figcaption>Gimnasio</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Estacionamiento.jpeg" alt="Estacionamiento" class="d-block w-100">
                                    <figcaption>Estacionamiento</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Roof Garden 4.jpg" alt="Roof Garden" class="d-block w-100">
                                    <figcaption>Roof Garden</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Recepción con vigilancia.jpg" alt="Recepción con vigilancia" class="d-block w-100">
                                    <figcaption>Recepción con vigilancia</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Departamento Mixcoac/Elevador.jpg" alt="Elevador" class="d-block w-100">
                                    <figcaption>Elevador</figcaption>
                                </figure>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#depaMixcoacControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#depaMixcoacControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="CasaEnLasAlamedas" tabindex="-1" aria-labelledby="depaMixcoacLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                    <div id="casaEnLasAlamedasControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <figure class="LB-gallery-item">
                                    <img src="PropiedadesIMG/Casa Las Alamedas/principal.jpg" alt="Sala" class="d-block w-100">
                                    <figcaption>Sala</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa Las Alamedas/Sala_2.jpg" alt="Sala" class="d-block w-100">
                                    <figcaption>Sala</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa Las Alamedas/Comedor_1.jpg" alt="Comedor" class="d-block w-100">
                                    <figcaption>Comedor</figcaption>
                                </figure>
                            </div>

                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa Las Alamedas/Patio_hamaca.jpg" alt="Patio" class="d-block w-100">
                                    <figcaption>Patio</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa Las Alamedas/Escaleras_arriba.jpg" alt="Escaleras" class="d-block w-100">
                                    <figcaption>Escaleras</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa Las Alamedas/Dormitorio_1.jpg" alt="Dormitorio" class="d-block w-100">
                                    <figcaption>Dormitorio</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa Las Alamedas/Dormitorio_2.jpg" alt="Dormitorio" class="d-block w-100">
                                    <figcaption>Dormitorio</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa Las Alamedas/Baño_medio.jpg" alt="Baño" class="d-block w-100">
                                    <figcaption>Baño</figcaption>
                                </figure>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#casaEnLasAlamedasControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#casaEnLasAlamedasControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </div>
    </aside>
    
    <aside class="modal fade LightBoxGallery" id="CasaEnValleDorado" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                    <div id="casaValleDoradoControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <figure class="LB-gallery-item">
                                    <img src="PropiedadesIMG/Casa en Valle Dorado/principal.jpeg" alt="Fachada" class="d-block w-100">
                                    <figcaption>Fachada</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Portón_entrada.jpeg" alt="Patio delantero" class="d-block w-100">
                                    <figcaption>Patio Delantero</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Entrada_1.jpeg" alt="Entrada" class="d-block w-100">
                                    <figcaption>Entrada</figcaption>
                                </figure>
                            </div>
                    
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Estancia_vista_completa.jpeg" alt="Estancia" class="d-block w-100">
                                    <figcaption>Estancia</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Cocina_1.jpeg" alt="Cocina" class="d-block w-100">
                                    <figcaption>Cocina</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Barra_1.jpeg" alt="Barra" class="d-block w-100">
                                    <figcaption>Barra</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Barra_2.jpeg" alt="Barra" class="d-block w-100">
                                    <figcaption>Barra</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Alacena_1.jpeg" alt="Alacena" class="d-block w-100">
                                    <figcaption>Alacena</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Cuarto_1.jpeg" alt="Cuarto" class="d-block w-100">
                                    <figcaption>Cuarto</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Cuarto_2.jpeg" alt="Cuarto" class="d-block w-100">
                                    <figcaption>Cuarto</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Cuarto_3.jpeg" alt="Cuarto" class="d-block w-100">
                                    <figcaption>Cuarto</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Closet_1.jpeg" alt="Closet" class="d-block w-100">
                                    <figcaption>Closet</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Dorado/Baño_completo_1.jpeg" alt="Baño" class="d-block w-100">
                                    <figcaption>Baño</figcaption>
                                </figure>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#casaValleDoradoControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#casaValleDoradoControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="CasaEnValleEscondido" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                    <div id="CasaEnValleEscondidoControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <figure class="LB-gallery-item">
                                    <img src="PropiedadesIMG/Casa en Valle Escondido/principal.jpg" alt="Fachada" class="d-block w-100">
                                    <figcaption>Fachada</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Escondido/Jardín_pasillo.jpg" alt="Pasillo" class="d-block w-100">
                                    <figcaption>Pasillo</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Escondido/Patio_vista_casa.jpg" alt="Patio" class="d-block w-100">
                                    <figcaption>Patio</figcaption>
                                </figure>
                            </div>
                    
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Escondido/Comedor_y_alacena.jpg" alt="Comedor" class="d-block w-100">
                                    <figcaption>Estancia</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Escondido/Comedor_mesa.jpg" alt="Comedor" class="d-block w-100">
                                    <figcaption>Comedor</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Escondido/Cocina_integral.jpg" alt="Cocina" class="d-block w-100">
                                    <figcaption>Cocina</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Escondido/Cocina_isla_enmedio.jpg" alt="Cocina" class="d-block w-100">
                                    <figcaption>Cocina</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Escondido/Escaleras_abajo.jpg" alt="Escaleras" class="d-block w-100">
                                    <figcaption>Escaleras</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Escondido/Escaleras_arriba.jpg" alt="Escaleras" class="d-block w-100">
                                    <figcaption>Escaleras</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Casa en Valle Escondido/Baño_lavabo.jpg" alt="Baño" class="d-block w-100">
                                    <figcaption>Baño</figcaption>
                                </figure>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#CasaEnValleEscondidoControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#CasaEnValleEscondidoControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="DepartamentoSantaFe" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="DepartamentoSantaFeControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="LB-gallery-item">
                                <img src="PropiedadesIMG/Santa Fé (Departamento)/Vista_fachada.jpeg" alt="Fachada" class="d-block w-100">
                                <figcaption>Fachada</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Santa Fé (Departamento)/principal.jpeg" alt="Sala" class="d-block w-100">
                                <figcaption>Sala</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Santa Fé (Departamento)/Sala.jpeg" alt="Sala" class="d-block w-100">
                                    <figcaption>Sala</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Santa Fé (Departamento)/Mesa.jpeg" alt="Mesa" class="d-block w-100">
                                    <figcaption>Mesa</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Santa Fé (Departamento)/Cocina_integral.jpeg" alt="Cocina" class="d-block w-100">
                                    <figcaption>Cocina</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Santa Fé (Departamento)/Mesas.jpeg" alt="Patio" class="d-block w-100">
                                    <figcaption>Patio</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Santa Fé (Departamento)/Jardín_trasero.jpeg" alt="Jardín" class="d-block w-100">
                                    <figcaption>Jardín</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Santa Fé (Departamento)/Piscina.jpeg" alt="Piscina" class="d-block w-100">
                                    <figcaption>Piscina</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Santa Fé (Departamento)/Baño_lavamanos.jpeg" alt="Baño" class="d-block w-100">
                                    <figcaption>Baño</figcaption>
                                </figure>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#DepartamentoSantaFeControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#DepartamentoSantaFeControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </div>
    </aside>
    
    <aside class="modal fade LightBoxGallery" id="DepartamentoBerriozabal" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="DepartamentoBerriozabalControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="LB-gallery-item">
                                <img src="PropiedadesIMG/Berriozabal/principal.JPG" alt="Sala" class="d-block w-100">
                                <figcaption>Sala</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Berriozabal/Sala_2.JPG" alt="Sala" class="d-block w-100">
                                <figcaption>Sala</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Berriozabal/Comedor_1.JPG" alt="Comedor" class="d-block w-100">
                                    <figcaption>Comedor</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Berriozabal/Cocina_1.JPG" alt="Cocina" class="d-block w-100">
                                    <figcaption>Cocina</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Berriozabal/Dormitorio_1.JPG" alt="Dormitorio" class="d-block w-100">
                                    <figcaption>Dormitorio</figcaption>
                                </figure>
                            </div>
                    
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Berriozabal/Dormitorio_2.JPG" alt="Dormitorio" class="d-block w-100">
                                    <figcaption>Dormitorio</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Berriozabal/Closet_1.JPG" alt="Closet" class="d-block w-100">
                                    <figcaption>Closet</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Berriozabal/Cuarto_de_lavado.JPG" alt="Cuarto de lavado" class="d-block w-100">
                                    <figcaption>Cuarto de Lavado</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Berriozabal/Baño_1.JPG" alt="Baño" class="d-block w-100">
                                    <figcaption>Baño</figcaption>
                                </figure>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#DepartamentoBerriozabalControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#DepartamentoBerriozabalControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="TerrenoHaciendaLaConcepción" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="TerrenoHaciendaLaConcepciónControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="LB-gallery-item">
                                <img src="PropiedadesIMG/Hacienda L C/principal.jpg" alt="Vialidades empedradas" class="d-block w-100">
                                <figcaption>Vialidades empedradas</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Hacienda L C/Lago.jpg" alt="Lago" class="d-block w-100">
                                <figcaption>Lago</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Hacienda L C/Camino_de_piedra.jpg" alt="Camino empedrado" class="d-block w-100">
                                <figcaption>Camino empedrado</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Hacienda L C/Parque.jpg" alt="Bancas" class="d-block w-100">
                                <figcaption>Bancas</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Hacienda L C/Terreno_1.jpg" alt="Terreno" class="d-block w-100">
                                <figcaption>Terreno</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Hacienda L C/Terreno_2.jpg" alt="Terreno" class="d-block w-100">
                                <figcaption>Terreno</figcaption>
                            </figure>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#TerrenoHaciendaLaConcepciónControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#TerrenoHaciendaLaConcepciónControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="DepartamentoiKANI" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="DepartamentoiKANIControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="LB-gallery-item">
                                <img src="PropiedadesIMG/iKANI/principal.jpg" alt="Sala" class="d-block w-100">
                                <figcaption>Sala</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/iKANI/Sala.jpg" alt="Sala" class="d-block w-100">
                                <figcaption>Sala</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/iKANI/Dormitorio_1.jpg" alt="Dormitorio" class="d-block w-100">
                                <figcaption>Dormitorio</figcaption>
                            </figure>
                        </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/iKANI/Dormitorio_2.jpg" alt="Dormitorio" class="d-block w-100">
                                <figcaption>Dormitorio</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/iKANI/Balcon.jpg" alt="Balcon" class="d-block w-100">
                                <figcaption>Balcon</figcaption>
                            </figure>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#DepartamentoiKANIControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#DepartamentoiKANIControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="terrenosNusKah" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="terrenosNusKahControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="LB-gallery-item">
                                <img src="PropiedadesIMG/Nus Kah/principal.jpeg" alt="Terreno" class="d-block w-100">
                                <figcaption>Terreno</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Nus Kah/Camastros.jpg" alt="Camastros" class="d-block w-100">
                                <figcaption>Camastros</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Nus Kah/Mesas.jpg" alt="Mesas" class="d-block w-100">
                                    <figcaption>Mesas</figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure class="LB-gallery-item">
                                    <img loading="lazy" src="PropiedadesIMG/Nus Kah/Render zona de hamacas Paal.jpeg" alt="Zona de hamacas" class="d-block w-100">
                                    <figcaption>Zona de Hamacas</figcaption>
                                </figure>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#terrenosNusKahControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#terrenosNusKahControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="depaRinconadaValleDorado" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="depaRinconadaValleDoradoControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="LB-gallery-item">
                                <img src="PropiedadesIMG/Rinconada Valle Dorado/Principal.jpg" alt="Sala Cocina" class="d-block w-100">
                                <figcaption>Sala Cocina</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Rinconada Valle Dorado/Entrada.jpg" alt="Entrada" class="d-block w-100">
                                <figcaption>Entrada</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Rinconada Valle Dorado/Cocina_integral_2.jpg" alt="Cocina" class="d-block w-100">
                                <figcaption>Cocina</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Rinconada Valle Dorado/Cuarto_1.jpg" alt="Cuarto" class="d-block w-100">
                                <figcaption>Cuarto</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Rinconada Valle Dorado/Baño_completo.jpg" alt="Baño" class="d-block w-100">
                                <figcaption>Baño</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Rinconada Valle Dorado/Balcon.jpg" alt="Balcon" class="d-block w-100">
                                <figcaption>Balcon</figcaption>
                            </figure>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#depaRinconadaValleDoradoControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#depaRinconadaValleDoradoControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    
    <aside class="modal fade LightBoxGallery" id="casaVivace" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="casaVivaceControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="LB-gallery-item">
                                <img src="PropiedadesIMG/Vivace Casa/principal.png" alt="Comedor Sala" class="d-block w-100">
                                <figcaption>Comedor Sala</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Vivace Casa/Fachada.png" alt="Fachada" class="d-block w-100">
                                <figcaption>Fachada</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Vivace Casa/Planta_baja.png" alt="Comedor" class="d-block w-100">
                                <figcaption>Comedor</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Vivace Casa/Piso_de_arriba.png" alt="Planta alta" class="d-block w-100">
                                <figcaption>Planta alta</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Vivace Casa/Dormitorio.png" alt="Dormitorio" class="d-block w-100">
                                <figcaption>Dormitorio</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Vivace Casa/Foto.png" alt="Cuarto de lavado" class="d-block w-100">
                                <figcaption>Cuarto de lavado</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Vivace Casa/Baño_completo.png" alt="Baño" class="d-block w-100">
                                <figcaption>Baño</figcaption>
                            </figure>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#casaVivaceControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#casaVivaceControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="departamentoVivace" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="casaVivaceControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="LB-gallery-item">
                                <img src="PropiedadesIMG/Vivace Depto/principal.jpg" alt="Fachada" class="d-block w-100">
                                <figcaption>Fachada</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Vivace Depto/Vista_posterior.jpg" alt="Vista posterior" class="d-block w-100">
                                <figcaption>Vista posterior</figcaption>
                            </figure>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#casaVivaceControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#casaVivaceControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="terrenoLaReserva" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="terrenoLaReservaControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="LB-gallery-item">
                                <img src="PropiedadesIMG/La Reserva/principal.jpg" alt="Entrada" class="d-block w-100">
                                <figcaption>Entrada</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/La Reserva/Entrada.jpg" alt="Entrada" class="d-block w-100">
                                <figcaption>Entrada</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/La Reserva/Amplias_avenidas.jpg" alt="Amplias avenidas" class="d-block w-100">
                                <figcaption>Amplias avenidas</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/La Reserva/Palapas.jpg" alt="Palapas" class="d-block w-100">
                                <figcaption>Palapas</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/La Reserva/Amplias_vialidades.jpg" alt="Amplias vialidades" class="d-block w-100">
                                <figcaption>Amplias vialidades</figcaption>
                            </figure>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#terrenoLaReservaControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#terrenoLaReservaControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <aside class="modal fade LightBoxGallery" id="TerrenoElFaroDeLosCisnes" tabindex="-1" aria-labelledby="casaValleDoradoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div id="TerrenoElFaroDeLosCisnesControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <figure class="LB-gallery-item">
                                <img src="PropiedadesIMG/Terreno El faro de los cisnes/Principal.jpeg" alt="Entrada principal" class="d-block w-100">
                                <figcaption>Entrada principal</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Terreno El faro de los cisnes/Lago.jpeg" alt="Lago" class="d-block w-100">
                                <figcaption>Lago</figcaption>
                            </figure>
                        </div>
                        <div class="carousel-item">
                            <figure class="LB-gallery-item">
                                <img loading="lazy" src="PropiedadesIMG/Terreno El faro de los cisnes/Vista_areas_verdes.jpeg" alt="Areas verdes" class="d-block w-100">
                                <figcaption>Areas verdes</figcaption>
                            </figure>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#TerrenoElFaroDeLosCisnesControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#TerrenoElFaroDeLosCisnesControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <aside id="form-popup" class="hide">
        <div class="fp-container">
            <h2>Pide más información</h2>
        <!-- Contact Form -->
            <span id="form-exit" class="fa-stack">
                <i class="fas fa-times"></i>
            </span>
            <form id="contactForm" action="https://formspree.io/f/mzbynpwy" method="POST">
                <div class="form-group">
                    <input type="text" name="Nombre" class="form-control-input" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <input type="number" name="Teléfono" class="form-control-input" placeholder="Teléfono" required>
                </div>
                <div class="form-group">
                    <input type="email" name="Email" class="form-control-input" placeholder="correo@ejemplo.com" required>
                </div>
                <div class="form-group hide">
                    <input id="formPropiedad" type="text" name="Propiedad" class="form-control-input" placeholder="">
                </div>
                <div class="form-group">
                    <textarea id="formMensaje" name="Mensaje" class="form-control-textarea" placeholder="Mensaje" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control-submit-button">Enviar</button>
                </div>
            </form>
        <!-- end of contact form -->
        </div>
    </aside>

    <aside class="form-advice hide">
        <div class="fa-container">
            <div class="col-lg-12 col-sm-12">
                <h5 class="text-light">¡Datos enviados!</h4>
                <p class="text-light p-small">Nos pondremos en contacto contigo muy pronto</p>
            </div>
            <div class="col-lg-12 col-sm-12">
                <button class="btn-solid-reg" id="fa-btn">Aceptar</button>
            </div>
        </div>
    </aside>

<?php 
	include_once('Templates/footer.php');
?>	