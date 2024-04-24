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
                                    <div class="text-center font-bold mb-10">
                                        <div
                                            class="relative bg-color-secondary inline-block px-5 py-3 rounded-lg hover:bg-color-secondary ease-in duration-200">
                                            <p class="text-6xl">1</p>
                                        </div>
                                        <h3 class="text-xl font-bold py-4">Apresentação de temas</h3>
                                        <p class="leading-relaxed">
                                            Importância da Inovação para o Doente e para o Cirurgião
                                        </p>
                                        <p class="leading-relaxed">
                                            Cirurgia robótica em 2030
                                        </p>
                                        <p class="leading-relaxed">
                                            Translação: do laboratório para a sala de operações
                                        </p>
                                        <p class="leading-relaxed">
                                            Sala de operações inteligente em 2024
                                        </p>
                                    </div>

                                    <div class="text-center mb-10 font-bold">
                                        <div
                                            class="relative bg-color-secondary inline-block px-5 py-3 rounded-lg hover:bg-color-secondary ease-in duration-200">
                                            <p class="text-6xl">2</p>
                                        </div>
                                        <h3 class="text-xl font-bold py-4">Cirurgia ao vivo</h3>
                                        <p class="leading-relaxed">
                                            Hérnia da parede abdominal: TAPP vs TEP
                                        </p>
                                        <p class="leading-relaxed">
                                            Colorectal: Colectomia direita com ETM vs Sigmoidectomia radical com ICG
                                        </p>
                                        <p class="leading-relaxed">
                                            Endócrina: Adrenalectomia posterior vs AAA
                                        </p>
                                        <p class="leading-relaxed">
                                            Proctologia: EPSiT vs Colposacropexia
                                        </p>
                                    </div>
                                    <div class="text-center font-bold">
                                        <div
                                            class="relative bg-color-secondary inline-block px-5 py-3 rounded-lg hover:bg-color-secondary ease-in duration-200">
                                            <p class="text-6xl">3</p>
                                        </div>
                                        <h3 class="text-xl font-bold py-4">Partilha de experiências</h3>
                                        <p class="leading-relaxed">
                                            Entre as apresentações e as cirurgias, haverá espaço para partilha de experiências
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class=" flex items-center justify-center p-10">
                                <img id="programImage" src="{{ asset('imagens/logo/cartaz_final.png') }}" alt="Programa"
                                    height="50">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <script>
            // Array of image URLs
            var images = [
                "{{ asset('imagens/logo/programaD1.png') }}",
                "{{ asset('imagens/logo/programaD2.png') }}",
                "{{ asset('imagens/logo/cartaz_final.png') }}",
            ];
            var currentIndex = 0;
            // Function to change the image
            function changeImage() {
                // Update the src attribute of the image
                document.getElementById('programImage').src = images[currentIndex];
                    currentIndex++;
                if (currentIndex >= images.length) {
                    currentIndex = 0;
                }
            }
            setInterval(changeImage, 5000);
        </script>
</x-app-layout>
