@extends('layouts.app')

@section('content')
  <section class="mx-auto flex flex-wrap flex-col md:flex-row items-center">
    <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
        <h1 class="mt-5 mb-12 text-3xl md:text-5xl font-bold leading-tight text-left slide-in-bottom-h1" style="color:#1E212D">
            MAKE IT YOUR OWN.
        </h1>

        <p class="leading-normal text-base mb-12 text-left slide-in-bottom-subtitle">
            Configure the macropad using an open-source QMK software such as Vial, which allows you to configure custom macros and assign keybinds on the fly to optimise any workflow.
        </p>

        <p class="leading-normal text-base mb-12 text-left slide-in-bottom-subtitle">
            Vial then saves any changes made onto the macropad itself, so you can take your macros on the go with the included carry case.
        </p>

        <a 
            class="p-4 lg:text-left text-center border border-gray-900 w-full md:w-auto slide-in-bottom-subtitle hover:text-gray-500 hover:border-gray-500"
            target="_blank"
            href="https://get.vial.today/download/"
        >
            Get Vial
        </a>
    </div>

    <div class="w-full xl:w-3/5 py-6 overflow-y-hidden lg:p-12 lg:mt-12 mb-12">
      <img class="mx-auto lg:mr-0 slide-in-bottom" src="img/vial.png">
      <p class="leading-normal text-center text-xs md:text-sm slide-in-bottom mt-2">
        Available on Windows, Mac OS and Linux
      </p>
    </div>
  </section>
@endsection