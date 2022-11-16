@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-yellow-700 bg-yellow-100 border border-yellow-300">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<input type="file" name="image" id="image" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<input name="institution" id="institution" placeholder="institution" value="{{ $post->institution ?? old('institution') }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
<textarea name="body" id="body" placeholder="body" cols="30" rows="4" placeholder="body" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">{{ $post->body ?? old('body') }}</textarea>
<div>
    <p>Start</p>
    <input type="date" class="form_control" id="start" name ="start">
</div>
<div>
    <p>End</p>
    <input type="date" class="form_control" id="end" name ="end">
</div>
<button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">Enviar</button>
