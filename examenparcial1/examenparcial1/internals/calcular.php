<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="images/logo.png" sizes="32x32" />
    <link rel="icon" href="images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
    <header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="..">Inicio</a>
			<a href="#">Proyecto</a>
			<a href="#">Donación</a>
			<a href="adopcion.php">Adopta</a>
			<a href="#">Simulador</a>
			<a href="#"><img src="../images/lupa.jpg" alt="Lupa"></a>
		</nav>
	</header>
	<main>
        <h2>Formulario de adopción</h2>
        <form method="post" action="procesar.php">
            <div class="grupoInput">
                <label for="nombres">Nombre</label>
                <input type="text" name="nombres" id="nombres" placeholder="Ingrese su nombre" required>
            </div>

             <div class="grupoInput">
                <label for="peso">Peso Corporal (kg)</label>
                <input type="number" name="peso" id="peso" placeholder="Ingrese el Peso Corporal"require>
            </div>

              <div class="grupoInput">
                <label for="distancia">Distancia occipucio - base cola</label>
                <input type="number" name="distancia" id="distancia" placeholder="Ingrese la distancia occipucio - base cola" required>
            </div>

             

            <div class="grupoInput">
                <label for="altura">Altura del hombro</label>
                <input type="number" name="altura" id="altura" placeholder="Ingrese la Altura del hombro" require>
            </div>

            <div class="grupoInput">
                <label for="Distancia">Distancia Pelvica</label>
                <input type="number" name="Distancia" id="Distancia" placeholder="Ingrese el Distancia Pelvica" require>
            </div>



             <div class="grupoInput">
                <label for="hs">HS   extremidad posterior derecha medida desde la rodilla a la articulación del tarso (cm)</label>
                <input type="number" name="hs" id="hs" placeholder="Ingrese el HS" required>
            </div>


             <div class="grupoInput">
                <label for="tcalculo">Tipo de raza</label>
                <select name="tcalculo" id="tcalculo" placeholder="Ingrese el tipo de raza" required>
                    <option value="raza">Razas mini toy: de 1 a 6 kilogramos.</option>
                    <option value="raza"> Razas pequeñas: de 7 a 15 kilogramos</option>
                    <option value="raza"> Razas pequeñas: de 7 a 15 kilogramos</option>
                    <option value="raza">Razas grandes: de 25 a 39 kilogramos.</option>
                    <option value="raza">Razas gigantes: de 34 a 82 kilogramos.</option>
                </select>
            </div>
           

         
            <div class="grupoInput">
                <label for="tcalculo">Tipo de calculo</label>
                <select name="tcalculo" id="tcalculo" placeholder="Ingrese el tipo de calculo" required>
                    <option value="macho">Grasa Corporal en Machos</option>
                    <option value="hembra">Grasa Corporal en Hembras</option>
                    <option value="imc">Índice de masa corporal</option>
                </select>
            </div>
           
            <div class="centrado">
                <button type="submit" class="boton">Calcular</button> 
            </div>
        </form>
        
    </main>
	<section class="sponsor">
		<figure class="logoSponsors">
            <a href="https://www.utpl.edu.ec"><img src="https://www.utpl.edu.ec/sites/default/files/Recurso%201%403x.png" alt="UTPL" class="utpl img"></a>
			<a href=".."><img src="../images/logotipoPet.png" alt="Pets" class="imgPets img"></a>
        </figure>
	</section>
	</section>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href="https//www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
			<a href="https//www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
			<a href="https//www.tiktok.com"><i class="fa-brands fa-tiktok"></i></a>
		</nav>
	</footer>
</div>
</body>
</html>

 