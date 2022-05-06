<h1> Mostrando o post de ID: {{$post -> id}}! </h1>

<a href="{{ route('posts.index') }} ">Voltar para o inicio</a>
<hr>
Titulo: {{$post->title}}<br>
Conteudo: {{$post->content}} <br>

<form action="{{route('posts.destroy', $post->id)}}" method="post">
    @csrf
    <input type="hidden", name="_method" value="delete">
    <button type="submit">Apagar post</button>
</form>