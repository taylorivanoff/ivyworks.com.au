    @extends('layouts.app')

    @section('content')
      <section class="mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <div class="w-full xl:w-3/5 py-6 overflow-y-hidden lg:p-12 lg:mt-12 mb-12">
          <img class="mx-auto lg:mr-0 slide-in-bottom" src="img/render.png">
        </div>

        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
          <h1 class="mt-5 mb-12 text-3xl md:text-5xl font-bold leading-tight text-left slide-in-bottom-h1" style="color:#1E212D">
            INTRODUCING <br>6% SENSE.
          </h1>

          <p class="leading-normal text-base md:text-2xl mb-12 text-left slide-in-bottom-subtitle">A cost-effective programmable macropad. <br><br>Coming October, 2021.</p>

          <p class="leading-normal text-base md:text-2xl mb-8 text-left slide-in-bottom-subtitle">Register your interest below to be notified when it drops.</p>

          @yield('section')

          <p class="leading-normal text-xs md:text-sm mb-8 mt-4 text-left slide-in-bottom-subtitle">{{ \App\Models\GuestUser::count() }} people are currently interested.</p>
        </div>
      </section>

      <section class="mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
          <h1 class="mt-5 mb-12 text-3xl md:text-5xl font-bold leading-tight text-left slide-in-bottom-h1" style="color:#1E212D">
            MAKE IT YOUR OWN.
          </h1>

          <p class="leading-normal text-base md:text-2xl mb-12 text-left slide-in-bottom-subtitle">Using the VIA configurator, you can create macros, assign shortcuts, remap keys and more.</p>

          <p class="leading-normal text-base md:text-2xl mb-12 text-left slide-in-bottom-subtitle">Your changes are then stored on the macropad, so you can take those same time-saving shortcuts wherever you go.</p>
        </div>

        <div class="w-full xl:w-3/5 py-6 overflow-y-hidden lg:p-12 lg:mt-12 mb-12">
          <img class="mx-auto lg:mr-0 slide-in-bottom" src="img/via.png">
          <p class="leading-normal text-center text-xs md:text-sm slide-in-bottom-subtitle">
          Available on Windows, Mac OS and Linux

          </p>
        </div>
      </section>
      
    @endsection