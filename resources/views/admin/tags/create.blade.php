@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
<h1>Crear etiqueta</h1>
@stop

@section('content')
<div class="card">
    
        {!! Form::submit('Crear etiqueta', ['class'=> 'btn btn-primary']) !!}
            @include('admin.tags.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });
</script>
@endsection