<h1> Editando o post de ID: {{$post -> id}}! </h1>

<a href="{{ route('posts.index') }} ">Voltar para o inicio</a>
<hr>
@include('posts._partials.createEditErrors')

<form action="{{ route('posts.put', $post->id) }}" method="post">
    @csrf
    @method('put')
    @include('posts._partials.createEditForm')
</form>