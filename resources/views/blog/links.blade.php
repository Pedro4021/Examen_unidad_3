@extends('blog.layout.generic')
@section('TITULO')
<h2>Links de apoyo</h2>
@endsection
@Section('CONTENIDO')
<table class ="table col-12 table-responsive">
	<thead>
		<tr>
			<td> ID </td>
			<td>Descripcion</td>
			<td> link</td>
			
        </tr>
</thead>
@foreach ($links as $links)
<tr>
	

			<td>{{$links->id}} </td>	
			<td> {{$links->descripcion}} </td>
			<td> {{$links ->link}}</td>
			

			
        </tr>	
	
		@endforeach</p>

								
									@endsection