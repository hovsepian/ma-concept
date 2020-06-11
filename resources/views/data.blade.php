@extends('Layouts.app')
@section('content')
   <div class="container-fluid data">
       <h1 class="text-center">DATENSCHUTZERKLÄRUNG</h1>
       @foreach($page_content as $content)
           {!! $content->content !!}
       @endforeach
   </div>
@endsection
