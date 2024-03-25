@extends('welcome')

@section('content')
    <div class="w-full max-w-4xl mx-auto bg-white shadow-md rounded px-8 pt-6 mt-11 pb-8 mb-4">
        <h2 class="text-xl font-bold mb-4 text-center">Post ALL</h2>
        <a href="{{ url('/post') }}" class="py-2 px-10 rounded bg-slate-700 text-white float-right mb-3">Add</a>
        <table class="table-auto w-full shadow-md rounded overflow-hidden">
            <thead>
                <tr class="bg-gray-100 text-gray-700 font-bold">
                    <th class="px-6 py-3 border-b border-gray-200">No</th>
                    <th class="px-6 py-3 border-b border-gray-200">Action</th>
                    <th class="px-6 py-3 border-b border-gray-200">Judul</th>
                    <th class="px-6 py-3 border-b border-gray-200">Body</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                    <tr class="hover:bg-gray-100 ">
                        <td class="px-6 py-4 border-b border-gray-200">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 border-b border-gray-200">
                            <a href="" class=""></a>
                        </td>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $item->judul }}</td>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $item->body }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
