@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
<h1>Crear nuevo post</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(["route" => 'admin.posts.store', 'autocomplete' => 'off']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}
            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        {!! Form::open(["route" => 'admin.posts.store']) !!}
        <div class="form-group">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder' => 'El valor del slug se actualizará automáticamente', 'readonly']) !!}
            @error('slug')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Categoría:') !!}
            {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
            @error('category_id')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <p class="font-weight-bold">Etiquetas</p>
            @foreach ($tags as $tag)
            <label class="mr-2">
                {!! Form::checkbox('tags[]', $tag->id, null) !!}
                {{$tag->name}}
            </label>
            @endforeach

            @error('tags')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>


        <div class="form-group">
            <p class="font-weight-bold">Estado</p>
            <label>
                {!! Form::radio('status', 1, true) !!}
                Borrador
            </label>
            <label>
                {!! Form::radio('status', 2) !!}
                Publicado
            </label>

            @error('status')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="row mb-3">
            <div class="col">
                <div class="image-wrapper">
                    <img src="https://cdn.pixabay.com/photo/2023/03/01/20/36/flowers-7823985_1280.jpg" alt="">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('file', 'Imagen que se mostrará en el post') !!}
                    {!! Form::file('file', ['class'=>'form-control-file']) !!}
                </div>
                Esta imagen debería de ser tal que así y cumplir con x....Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit tenetur asperiores commodi nesciunt unde praesentium recusandae? Pariatur officia est sit enim voluptatibus facilis. Consectetur voluptate vero quas natus. Explicabo, incidunt?
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('extract', 'Extracto:') !!}
            {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
            @error('extract')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Cuerpo del post:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            @error('body')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        {!! Form::submit('Crear post', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('css')
<style>
    .image-wrapper {
        position: relative;
        padding-bottom: 56.25%;
    }

    .image-wrapper img {
        position: absolute;
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>
@stop

@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
        });
    });


    ClassicEditor
        .create(document.querySelector('#extract'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#body'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection