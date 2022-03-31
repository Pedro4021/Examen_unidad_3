@extends('blog.layout.generic')
@section('TITULO')
    <h2>YEOMEN</h2>
@endsection
@Section('CONTENIDO')
    <h3 class="major">API</h3>
     @foreach($info as $item)
         <p>{{$item['activity']}}</p>
         <p>{{$item['type']}}</p>
         <p>{{$item['participants']}}</p>
         <p>{{$item['activity']}}</p>
         <p>{{$item['link']}}</p>
         <p>{{$item['key']}}</p>
         <p>{{$item['accessibility']}}</p>
     @endforeach
@endsection
