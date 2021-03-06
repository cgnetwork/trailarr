@extends('app')

@section('content')
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 table text-center">

            <iframe width="640" height="360" src="https://www.youtube.com/embed/{{ $key }}"></iframe>

            <form method="POST" action="/{{ $item['id'] }}/download">
                @csrf

                <input type='hidden' name='key' value='{{ $key }}'>

                @if(session('success'))
                    <button type="button" class="mt-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Downloading
                    </button>
                @else
                    <button type="submit" class="mt-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Download
                    </button>
                @endif
            </form>
        </div>
    </div>
@endsection
