<h1> Hello World, this is a route! </h1>
<a href="{{ route('posts.create') }}">Criar novo post</a>
<hr>

@foreach ($posts as $post)

    Id: {{$post->id}}<br>
    Conteudo: {{$post->content}} <br>
@endforeach 