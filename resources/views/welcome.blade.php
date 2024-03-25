<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
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

    <div class="w-full max-w-4xl mx-auto bg-white shadow-md rounded px-8 pt-6 mt-11 pb-8 mb-4">
        <h2 class="text-xl font-bold mb-4 text-center">Post ALL</h2>
        <table class="table-auto w-full shadow-md rounded overflow-hidden">
            <thead>
                <tr class="bg-gray-100 text-gray-700 font-bold">
                    <th class="px-6 py-3 border-b border-gray-200">No</th>
                    <th class="px-6 py-3 border-b border-gray-200">Judul</th>
                    <th class="px-6 py-3 border-b border-gray-200">Body</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                    <tr class="hover:bg-gray-100 ">
                        <td class="px-6 py-4 border-b border-gray-200">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $item->judul }}</td>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $item->body }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
