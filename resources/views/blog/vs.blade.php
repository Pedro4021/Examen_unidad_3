@extends('blog.layout.generic')
@section('TITULO')
<h2>YEOMEN</h2>
@endsection
@Section('CONTENIDO')
<h3 class="major">YEOMAN VS TEMPLATES VISUAL STUDIO</h3>
									
									
									<p></p>

									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/ventajas.jpg" alt="" /></a>
											<h3 class="major">Ventaja 1</h3>
											<p>La primera ventaja de Yeoman es que todos los equipos de desarrollo lo pueden utilizar. Puede haber equipos que desarollen en Java, o aplicaciones multiplataformas ya sean Web o móvil. Yeoman es una herramienta que la pueden utilizar todos los equipos y de esta forma se estandariza la creación.</p>
											
										</article>
										<article>
											<a href="#" class="image"><img src="images/ventajas.jpg" alt="" /></a>
											<h3 class="major">ventaja 2</h3>
											<p>Otra ventaja es la distribución. Con NodeJS podemos crear un repositorio central dentro de la organización para poder tener todos los templates que vamos a utilizar. Otra opción es tener un «npm» privado y alojar allí las plantillas. Con los Templates habría que hacer una regla desde IT para que cada que vez que se instale Visual Studio se instalen estos templates ó bien que el propio desarrollador lo instale cuando considere oportuno (esto sin tener en cuenta que muchas veces desarrollamos en una máquina virtual que no esta dentro de la organización con lo cual las reglas de IT no se cumplen).</p>
											
										</article>
									</section>
									<section class="features">
										
										
									</section>
									@endsection