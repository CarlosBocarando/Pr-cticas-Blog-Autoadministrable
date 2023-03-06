<x-app-layout>
    <div class="container py-8">
        <h1 class="uppercase text-center text-3xl font-bold">Categoría: {{$category->name}}</h1>
        @foreach ($posts as $post)
        <article class="mb-8">
            <img src="{{Storage::url($post->image->url)}}" alt="">
        </article>
        @endforeach
    </div>

</x-app-layout>