<h1> Hello World, this is a route! </h1>
<a href="{{ route('posts.create') }}">Criar novo post</a>
<hr>

@if (session('message'))
    <div>
        <strong>{{session('message')}}</strong>
    </div>
@endif

<br>

<form action="{{route('posts.search')}}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form>

<br>


@foreach ($posts as $post)

    Id: {{$post->id}}  
    { <strong> <a href='{{route('posts.show', $post -> id)}}'> Visualizar detalhes</a></strong>
    | <strong> <a href='{{route('posts.edit', $post -> id)}}'> Editar </a></strong>
    } <br>
    Conteudo: {{$post->content}} <br>
@endforeach 