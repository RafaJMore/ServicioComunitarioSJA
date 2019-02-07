<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'plantillas/head.php'; ?>
</head>
<body>
	<?php include 'plantillas/social.php' ?>

	<header>
	 <nav>
   		<?php include 'plantillas/nav.php'; ?>
     </nav>
    </header>

    <article>
	<center>
	<h3><i>Galería de Fotos</i></h3><br>
	<ul class="galeria">
		<a href="#img1"><img src="../img/01.jpg"></a>
		<a href="#img2"><img src="../img/02.jpg"></a>
		<a href="#img3"><img src="../img/03.jpg"></a>
		<a href="#img4"><img src="../img/04.jpg"></a>
		<a href="#img5"><img src="../img/05.JPG"></a>
		<a href="#img6"><img src="../img/06.jpg"></a>
		<a href="#img7"><img src="../img/07.jpg"></a>
		<a href="#img8"><img src="../img/08.jpg"></a>
	</ul>
	
	<div class="modal" id="img1">
		<h3>Foto 1</h3><br>
		<div class="imagen">
		<a href="#img8">&#60;</a>
		<a href="#img2">	<img src="../img/01.jpg"></a>
		<a href="#img2">></a>	
		</div><br>
		<a href="" class="cerrar">X</a>
	</div>
		<div class="modal" id="img2">
		<h3>Foto 2</h3><br>
		<div class="imagen">
		<a href="#img1">&#60;</a>
		<a href="#img3"><img src="../img/02.jpg"></a>
		<a href="#img3">></a>	
		</div><br>
		<a href="" class="cerrar">X</a>
	</div>
		<div class="modal" id="img3">
		<h3>Foto 3</h3><br>
		<div class="imagen">
		<a href="#img2">&#60;</a>
		<a href="#img4"><img src="../img/03.jpg"></a>
		<a href="#img4">></a>	
		</div><br>
		<a href="" class="cerrar">X</a>
	</div>
		<div class="modal" id="img4">
		<h3>Foto 4</h3><br>
		<div class="imagen">
		<a href="#img3">&#60;</a>
		<a href="#img5"><img src="../img/04.jpg"></a>
		<a href="#img5">></a>	
		</div><br>
		<a href="" class="cerrar">X</a>
	</div>
		<div class="modal" id="img5">
		<h3>Foto 5</h3><br>
		<div class="imagen">
		<a href="#img4">&#60;</a>
		<a href="#img6"><img src="../img/05.jpg"></a>
		<a href="#img6">></a>	
		</div><br>
		<a href="" class="cerrar">X</a>
	</div>
		<div class="modal" id="img6">
		<h3>Foto 6</h3><br>
		<div class="imagen">
		<a href="#img5">&#60;</a>
		<a href="#img7"><img src="../img/06.jpg"></a>
		<a href="#img7">></a>	
		</div><br>
		<a href="" class="cerrar">X</a>
	</div>
		<div class="modal" id="img7">
		<h3>Foto 7</h3><br>
		<div class="imagen">
		<a href="#img6">&#60;</a>
		<a href="#img8"><img src="../img/07.jpg"></a>
		<a href="#img8">></a>	
		</div><br>
		<a href="" class="cerrar">X</a>
	</div>
		<div class="modal" id="img8">
		<h3>Foto 8</h3><br>
		<div class="imagen">
		<a href="#img7">&#60;</a>
		<a href="#img1"><img src="../img/08.jpg"></a>
		<a href="#img1">></a>	
		</div><br>
		<a href="" class="cerrar">X</a>
	</div>
	</center>
	</article>

<footer>
    	<?php include 'plantillas/footer.php'; ?>
    </footer>
</body>
</html>