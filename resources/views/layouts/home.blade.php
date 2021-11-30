    @extends('layouts.app')

    @section('content')
      <section class="w-full flex flex-wrap flex-col md:flex-row items-center ">
        <div class="w-full xl:w-3/5 py-6 overflow-y-hidden lg:p-12 lg:mt-12 mb-12">
          <img class="mx-auto slide-in-bottom" src="img/render.png">
        </div>

        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
          <h1 class="mt-5 mb-12 text-3xl md:text-5xl font-bold leading-tight text-left slide-in-bottom-h1" style="color:#1E212D">
            INTRODUCING <br>6% SENSE.
          </h1>

          <p class="leading-normal text-base mb-8 text-left slide-in-bottom-subtitle">
            A USB-C 6 key macropad with mechanical key switches.
            <br><br>
            Assign macros or shortcuts with <a href="https://get.vial.today/" target="_blank">Vial</a> to any key on the macropad and optimise the way you game, stream or do work.
          </p>

          <p class="leading-normal text-base mb-8 text-left slide-in-bottom-subtitle">Available on Etsy.</p>

          <a class="p-4 lg:text-left text-center border border-gray-900 w-full md:w-auto slide-in-bottom-subtitle hover:text-gray-500 hover:border-gray-500" target="_blank" href="https://www.etsy.com/au/listing/1077981726/6-sense-6-key-programmable-macropad">Get it now</a>
        
          <a class="leading-normal text-base mt-8 mb-8 text-left slide-in-bottom-subtitle underline hover:text-gray-500" href="/guide">Getting Started Guide</a>
        </div>
      </section>      
    @endsection