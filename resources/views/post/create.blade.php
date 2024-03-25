@extends('welcome')

@section('content')
    <div class="w-full max-w-xl mx-auto bg-white shadow-md rounded px-8 pt-6 mt-11 pb-8 mb-4">
        <h2 class="text-xl font-bold mb-4 text-center">Post Form</h2>
        <form action="{{ 'post' }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="" class="block text-gray-700 text-sm font-bold mb-2">Judul</label>
                <input type="text"
                    class="sha  appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-lg"
                    name="judul">
            </div>
            <div class="mb-4">
                <label for="" class="block text-gray-700 text-sm font-bold mb-2">Body</label>
                <textarea cols="30" rows="10" type="text"
                    class="sha  appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-lg"
                    name="body"></textarea>
            </div>
            <div class="mb-4">
                <button type="submit" class="py-3 rounded-md text-white w-full bg-slate-700 "> Save</button>
            </div>
        </form>
    </div>
@endsection
