iTabs - Insside Framewok®
===========

Un complemento (plugin)  desarrollado para la plataforma INSSIDE usando MooTools 1.5.2. Utiliza una semántica simple para su implementación, posee efectos de transición entre los elementos, y requiere muy pocas líneas de código para su implementación. Al utilizar iTabs creara un panel de pestañas de un solo elemento. Todo lo que necesita es un selector para las fichas (cabeceras, pestañas), y un selector de los contenidos correspondientes. La interacción con las  fichas está basada en eventos, no se necesita ningún esfuerzo para agregar fichas: simplemente añadir elementos con los nombres de las clases correctas (o nombres de etiqueta si ha especificado que su selector como tal) y listo!. La apariencia se deja totalmente en manos del usuario. Tanto si desea una lista en línea como los encabezados de la ficha o una serie de enlaces, es decisión del diseñador de la interface.


Utilización
----------

Se escribe algo de HTML para describir los botones y paneles:

	#HTML
	<ul id="tabs">
		<li><a class="tab" href="#" id="t1">Primero</a></li>
		<li><a class="tab" href="#" id="t2">Segundo</a></li>
		<li><a class="tab" href="#" id="t3">Tercero</a></li>
	</ul>
	<div id="home">
		<div class="feature">
			<!-- Contenido 1 //-->
		</div>
		<div class="feature">
			<!-- Contenido 2 //-->
		</div>
		<div class="feature">
			<!-- Contenido 3 //-->
		</div>
	</div>

Invoque el constructor. El primer argumento son las pestañas (fichas), el segundo argumento son los paneles que tienen el contenido. Un tercer argumento opcional y corresponde a una serie de opciones que activan los eventos visuales, como la transición, duración de la misma entre otros.

	#JS
	var tabs = new MGFX.Tabs('#tabs li a', '#home .feature');
	
