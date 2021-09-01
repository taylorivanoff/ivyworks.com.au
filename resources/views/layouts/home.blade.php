    @extends('layouts.app')

    @section('content')
      <!--Right Col-->
      <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
        <img class="mx-auto lg:mr-0 slide-in-bottom" src="img/render.png">
      </div>

      <!--Left Col-->
      <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
        <h1 class="mt-5 mb-12 text-3xl md:text-5xl font-bold leading-tight text-center md:text-left slide-in-bottom-h1" style="color:#1E212D">
          INTRODUCING <br>6% SENSE.
        </h1>

        <p class="leading-normal text-base md:text-2xl mb-12 text-center md:text-left slide-in-bottom-subtitle">A cost-effective six key programmable macropad keyboard. Coming soon.</p>

        <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Register your interest below to be kept updated.</p>

        @yield('section')
      </div>
    @endsection