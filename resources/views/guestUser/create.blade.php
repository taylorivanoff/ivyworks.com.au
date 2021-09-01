    @extends('layouts.home')

    @section('section')
        @if ($errors->any())
            <div class="py-4 slide-in-bottom-subtitle text-gray-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="flex flex-start flex-wrap items-center slide-in-bottom-subtitle gap-4" method="POST" action="/guest/store">
            @csrf
            <input class="p-4 text-gray-900 w-96" style="background-color: #fff" type="email" name="email_address" placeholder="your@email.com">
            <button class="p-4 border border-gray-900 w-full md:w-auto" type="submit">Notify me</button>
        </form>
    @endsection
