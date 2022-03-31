@extends('blog.layout.generic')
@section('TITULO')
<h2>YEOMEN</h2>
@endsection
@Section('CONTENIDO')
<h3 class="major">Que es yeoman</h3>
									<p>Yeoman es un creador de proyectos, de tal forma que evita a los desarrolladores los problemas de crear un proyecto de inicio. Dentro de este creador de proyectos, se introducen las lecciones aprendidas previamente, así como las buenas prácticas de los mismos. Por ejemplo, si utilizamos una determinada librería (como puede ser PnP), cuando tenemos creado el proyecto esta librería ya está disponible</p>

									<p>En la práctica podemos definir Yeoman como un «plugin» que se ejecuta dentro de NodeJs por el cual podemos crear proyectos de los principales proyectos Web, como pueda ser una aplicación vNext, una SPA basada en el framework JavaScript que decidamos utilizar en nuestro desarrollo (ReactJS, AngularJS, Backbone, etc..). De la misma forma, estas plantillas pueden utilizar otras herramientas de FrontEnd como Grunt, Bower o npm.</p>

									<h3 class="major">Herramientas</h3>
									<p></p>

									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/grunt.png" alt="" /></a>
											<h3 class="major">Grunt</h3>
											<p>Grunt es una herramienta para automatizar tareas es nuestros proyectos, hasta donde se proyectos web. La idea es que todas esas tareas rutinarias que debemos hacer en nuestros proyectos Grunt las haga por nosotros. Entre las tareas mas comunes están: Concatenación de archivos (CSS, JS, etc)</p>
											
										</article>
										<article>
											<a href="#" class="image"><img src="images/bower.png" alt="" /></a>
											<h3 class="major">Bower</h3>
											<p>es un gestor de dependencias. Es decir, básicamente es un programa que nos sirve para descargar y mantener actualizadas las librerías o frameworks que utilizamos para construir nuestro propio proyecto web</p>
											
										</article>
									</section>
									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/npm.png" alt="" /></a>
											<h3 class="major">npm</h3>
											<p>npm responde a las siglas de Node Package Manager o manejador de paquetes de node, es la herramienta por defecto de JavaScript para la tarea de compartir e instalar paquetes. Tal como reza su documentación, npm se compone de al menos dos partes principales</p>
											
										</article>
										
									</section>
									@endsection