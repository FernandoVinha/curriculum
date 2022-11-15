


<h1 class="text-center text-3xl uppercase font-black my-4">Detalhes do Post {{ $post->institution }}</h1>


<ul>
    <li>{{ $post->institution}}</li>
    <li>{{ $post->body}}</li>
</ul>
<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-red-500 shadow-lg focus:outline-none hover:bg-red-900 hover:shadow-none">Deletar</button>
</form>
