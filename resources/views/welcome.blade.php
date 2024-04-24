<x-guest-layout>

    <section id="inicio" class="bg-color-primary-light relative">
        <div
            class="w-80 h-80 bg-color-bob absolute top-0 -left-5 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full ">
        </div>
        <div
            class="w-80 h-80 bg-color-bob absolute bott bottom-10 right-0 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full ">
        </div>
        <div class="container py-10">
            <div class="text-center m-auto mb-10 md:w-1/2">
                @include('components.language_switcher')
            </div>
            <div class="text-center m-auto mb-10 md:w-1/2">
                {{ __('Welcome to the website of the 1st International Congress of Robotic Surgery of the Portuguese Society of Surgery.') }}
            </div>
        </div>




</x-guest-layout>
