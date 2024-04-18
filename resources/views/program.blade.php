<x-app-layout>
    <x-slot name="title">
        {{ __('Program') }}
    </x-slot>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-3 lg:px-4">
            <div class="overflow-hidden shadow-sm sm:rounded-3xl">
                <div class="text-green-900 dark:text-red-500">
                    <section id="programa">
                        <div class="container py-10">
                            <div class="text-center m-auto mb-10 md:w-1/2">
                                <h4 class="font-bold text-color-secondary mb-4">Como vai funcionar</h4>
                                <h1 class="title">Programa das jornadas</h1>
                            </div>
                        </div>

                        <div class="grid lg:grid-cols-2 gap-12 lg:gap-2 px-4 sm:px-6 lg:px-8">
                            <div class=" flex justify-center">
                                <div class="flex flex-col items-center">
                                    <div class="text-center mb-20">
                                        <div
                                            class="relative bg-color-secondary inline-block px-5 py-3 rounded-lg hover:bg-color-secondary ease-in duration-200">
                                            <p class="text-6xl">1</p>
                                        </div>
                                        <h3 class="text-xl font-bold py-4">Apresentação de temas</h3>
                                        <p class="leading-relaxed">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt
                                            provident
                                            tenetur?
                                            Amet, quibusdam! Placeat
                                        </p>
                                    </div>
                                    <div class="text-center mb-20">
                                        <div
                                            class="relative bg-color-secondary inline-block px-5 py-3 rounded-lg hover:bg-color-secondary ease-in duration-200">
                                            <p class="text-6xl">2</p>
                                        </div>
                                        <h3 class="text-xl font-bold py-4">Cirurgia ao vivo</h3>
                                        <p class="leading-relaxed">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt
                                            provident
                                            tenetur?
                                            Amet, quibusdam! Placeat
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <div
                                            class="relative bg-color-secondary inline-block px-5 py-3 rounded-lg hover:bg-color-secondary ease-in duration-200">
                                            <p class="text-6xl">3</p>
                                        </div>
                                        <h3 class="text-xl font-bold py-4">Partilha de experiências</h3>
                                        <p class="leading-relaxed">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt
                                            provident
                                            tenetur?
                                            Amet, quibusdam! Placeat
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class=" flex items-center justify-center p-10">
                                <img src="{{ asset('imagens/logo/cartaz.png') }}" alt="Programa" height="50">
                            </div>
                        </div>


                    </section>
                </div>
            </div>
        </div>
</x-app-layout>
