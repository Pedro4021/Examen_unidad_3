@extends('blog.layout.generic')
@section('TITULO')
<h2>YEOMEN</h2>
@endsection
@Section('CONTENIDO')
<h3 class="major">¿CÓMO PODEMOS UTILIZARLO?</h3>
									<p>Está claro que hay multitud de plantillas, incluso hay una plantilla para realizar Add-In de Office, pero en ENCAMINA lo estamos utilizando para tener una serie de plantillas dependiendo del proyecto que llevemos a cabo. Por ejemplo, si tenemos un proyecto de un sitio de Colaboración de SharePoint Onpremise, tenemos una plantilla Yeoman que crea una solución de Visual Studio con los proyectos que creemos que deben tener un proyecto de tipo</p>

									<p>Proyecto de Despliegue (PowerShell)
Proyecto de Clases de Modelo
Proyecto de Clase de Servicio
Proyecto de Test Unitarios
Proyecto de SharePoint</p>
<p> Además, dentro de estos proyectos tienen las librerías necesarias en un principio. Por ejemplo, si para el desarrollo en la parte cliente necesitamos tener descargado JQuery pues dentro del proyecto correspondiente estará cargado. O si en el proyecto de Test Unitarios utilizamos un determinado Inyector de Dependencias pues ya lo tenemos descargado.</p>

									<h3 class="major">Ventajas</h3>
									<p></p>

									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/ventajas.jpg" alt="" /></a>
											<h3 class="major">Ventajas</h3>
											<p>La principal ventaja de la utilización de Yeoman es que podemos estandarizar los proyectos que llevamos desarrollando entre manos. Independientemente de que lo realice un equipo de desarrollo u otro, ambos utilizarán las mismas herramientas/utilidades/librerías con lo que conseguimos que todo el equipo crezca en una misma dirección.	</p>
											
										</article>
										
									@endsection