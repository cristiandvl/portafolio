<?php 
require_once 'includes/header.php';
?>
<style>
    body {
        background: #252525 ;
        color: #2ECC18;
        font-family: "Chakra Petch", sans-serif;
  font-weight: 300;
  font-style: normal
}
/* section{
  padding: 3%;
} */
  /* Estilo difuminado para las imágenes */
  img {
        border-radius: 8px; /* Difuminado en los bordes */
        overflow: hidden; /* Para que la imagen respete el borde redondeado */
        object-fit: cover; /* Para que la imagen se ajuste al contenedor */
        max-width: 100%; /* Imagenes no excedan su contenedor */
        height: auto; /* Altura automática */
    }
</style>

<!-- Primera sección -->

<section id="bienvenido" style="height: 100vh; position: relative;">
  <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
    <div class="row">
      <div class="col-12">
        <h1 class="mb-4"><strong>HOLA, SOY CRISTIAN VALLEJOS - DESARROLLADOR FULL STACK DISEÑO Y DESARROLLO DE APLICACIONES WEB</strong></h1>
      </div>
    </div>
  </div>
  <div class="text-center w-100 position-absolute bottom-0">
    <div class="mb-3">
      <p><strong>Más información de lo que hago</strong></p>
    </div>
    <a href="#perfil" style="background-color: transparent; border-color: #007bff; color: #ffffff;"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
  </div>
</section>


<!-- Segunda sección -->

<section id="perfil">
<div class="container mt-5"><!-- Agregamos margen superior -->
        <div class="row">

            <!-- Primera y Segunda -->
            <div class="col-md-6 d-flex flex-column align-items-center mt-5">
                <img src="./img/sop1.png" class="img-fluid" alt="Imagen 1" style="height: 350px;">
                <h3 class="mt-3 text-center">DESARROLLO FRONTEND Y BACKEND DE APLICACIONES WEB</h3>
            </div>

            <div class="col-md-6 d-flex flex-column align-items-center mt-5">
                <img src="./img/software.png" class="img-fluid" alt="Imagen 2" style="height: 350px;">
                <h3 class="mt-3 text-center">DESARROLLO FRONTEND Y BACKEND DE SOFTWARE JAVA-PHP-PYTHON-C#</h3>
            </div>

            <!-- Tercera -->
            <div class="col-12 d-flex flex-column align-items-center">
                <img src="./img/responsive.png" class="img-fluid" alt="Imagen 3" style="height: 380px;">
                <h3 class="mt-3 text-center">DESARROLLO RESPONSIVE DE APLICACIONES WEB</h3>
            </div>
        </div>
    </div>
</section>


</section>
<section id="portafolio">


<?php 
require_once 'includes/footer.php';
?>

