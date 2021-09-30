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

          <p class="leading-normal text-base italic mb-8 text-left slide-in-bottom-subtitle">
            "After making the switch to a 60% keyboard and falling in love with the small form-factor and portability, I felt like something was missing (obviously a lot of keys).
            <br><br>
            So I designed this 6 key programmable macropad to help fill that void without adding size to my keyboard.
            <br><br>
            Sometimes I use it as a silly Discord soundboard, for shortcuts in Photoshop, a streamdeck, different keybinds, macros for games and more. Your imagination is the limit"
          </p>

          <p class="leading-normal text-base mb-8 text-left slide-in-bottom-subtitle">Now available on Etsy.</p>

          <a class="p-4 lg:text-left text-center border border-gray-900 w-full md:w-auto slide-in-bottom-subtitle" target="_blank" href="https://www.etsy.com/au/listing/1077981726/6-sense-6-key-programmable-macropad">Get it now</a>
        </div>
      </section>      
    @endsection