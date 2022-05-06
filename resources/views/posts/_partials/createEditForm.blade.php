@csrf
<input type="text" name="title" id="title" placeholder="Titulo" value=" {{$post->title ?? old('title') }}">
<textarea name="content" id="content" cols="30" rows="10" placeholder="Conteudo">{{$post->content ?? old('content') }}</textarea>
<button type="submit">Enviar</button>