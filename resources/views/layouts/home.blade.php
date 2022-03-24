    @extends('layouts.app')

    @section('content')
      <section class="w-full flex flex-wrap flex-col md:flex-row items-center ">
        <div class="w-full xl:w-3/5 py-6 overflow-y-hidden lg:p-12 lg:mt-12 mb-12">
          <img class="mx-auto slide-in-bottom" src="img/render.png" width="420">
        </div>

        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
          <h1 class="mt-5 mb-12 text-3xl md:text-5xl font-bold leading-tight text-left slide-in-bottom-h1" style="color:#1E212D">
            INTRODUCING THE 6%<br>SENSE MACROPAD.
          </h1>

          <p class="leading-normal text-base mb-8 text-left slide-in-bottom-subtitle">
            6% SENSE is a plug-and-play, USB-C macropad with Gateron Black mechanical key switches.
            <br><br>
            Similar to a Stream Deck, you can assign functions to specific keys with the open-source software Vial.
            <br><br>
            Assign macros, shortcuts, keybinds and more with <a href="https://get.vial.today/" target="_blank">Vial</a> to any key on the macropad and optimise the way you game, stream or do work.
          </p>

          <a class="p-4 lg:text-left text-center border border-gray-900 w-full md:w-auto slide-in-bottom-subtitle hover:text-gray-500 hover:border-gray-500" target="_blank" href="https://www.etsy.com/au/listing/1077981726/6-sense-6-key-programmable-macropad">Go to Etsy</a>
        
          <a class="leading-normal text-base mt-8 mb-8 text-left slide-in-bottom-subtitle underline hover:text-gray-500" href="/guide">Getting Started Guide</a>
        </div>
      </section>      
    @endsection