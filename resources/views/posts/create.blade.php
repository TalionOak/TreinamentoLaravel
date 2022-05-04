<h1> cadastrar post </h1>
<a href="{{ route("posts.index") }}">Ver Posts</a>
<hr>

<form action="{{ route('posts.store') }}" method="post">
    
    @csrf
   
   
    <input type="text" name="title" id="title" placeholder="Titulo">
    <textarea name="content" id="content" cols="30" rows="10" placeholder="Conteudo"></textarea>
    <button type="submit">Enviar</button>

</form>