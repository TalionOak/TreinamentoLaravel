<h1> cadastrar post </h1>
<a href="{{ route("posts.index") }}">Ver Posts</a>
<hr>
@include('posts._partials.createEditErrors')

<form action="{{ route('posts.store') }}" method="post">
    @include('posts._partials.createEditForm')
</form>