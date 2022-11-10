<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#">Gerardo</a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onClick="seleccionar()">BEGIN</a></li>
                    <li><a href="index.php?menu=1" onClick="seleccionar()">ABOUT ME</a></li>
                    <li><a href="#skills" onClick="seleccionar()">SKILLS</a></li>
                    <li><a href="index.php?menu=2" onClick="seleccionar()">CV</a></li>
                    <li><a href="index.php?menu=3" onClick="seleccionar()">PORTFOLIO</a></li>
                    <li><a href="index.php?menu=4" onClick="seleccionar()">CONTACTO</a></li>
                
		
				</ul>
							<?php
  $url=$_GET['menu'];
					   
		  switch ($url) {
		  	case '1':
	  		include "sobre_mi.php";
			break;
            case '2':
	  		include "cv.php";
			break;
			  case '3':
	  		include "portafolio.php";
			break;
		
	  		  case '4':
	  		include "contacto.php";
			break;
				  case '5':
	  		include "eliadmin.php";
			break;
			}
	  
	  
	  ?>
					
            </nav>
		
            <div class="nav-responsive" onClick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
		

        </header>
    </div>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="img/fotos.png" alt="">
            </div>
            <h2 font-size:12px><strong>Gerardo Fabian Fonseca Bonilla</strong></h2>
            <h2>Computing Engineer</h2>
            <div class="redes">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-skype"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-solid fa-rss"></i></a>
            </div>
        </div>
    </section>
 
    <!-- SECCION SKILLS -->
    <section class="skills" id="skills">
        <div class="contenido-seccion">
            <h2>Skills</h2>
            <div class="fila">
                <!-- Technical Skill -->
                <div class="col">
                    <h3>Technical Skills</h3>
                    <div class="skill">
                        <span>Javascript</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>75%</span>                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>HTML & CSS</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Kotlin</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Wordpress</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>C++</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>                            </div>
                        </div>
                    </div>
					<div class="skill">
                        <span>React.JS</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>                            </div>
                        </div>
                    </div>
                </div>
                <!-- Professional Skills -->
                <div class="col">
                    <h3>Professional Skills</h3>
                    <div class="skill">
                        <span>Comunicaci�n</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Trabajo en Equipo</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Creatividad</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>99%</span>                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Dedicaci�n</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>65%</span>                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Proyect Management</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>94%</span>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
   

   

    <!-- SECCION CONTACTO -->
   

    <!-- footer -->
    <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>        </a>
        <div class="redes">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-skype"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#"><i class="fa-solid fa-rss"></i></a>
        </div>
</footer>

    <script src="script.js"></script>
</body>
</html>