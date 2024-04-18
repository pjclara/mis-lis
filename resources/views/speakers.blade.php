<x-app-layout>
    <x-slot name="title">
        {{ __('Speakers') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-3 lg:px-4">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-green-900 dark:text-red-500">
                    <section id="palestrantes" class="bg-white">
                        <div class="container py-10">
                            <div class="text-center m-auto mb-10 md:w-1/2">
                                <h4 class="font-bold text-color-secondary mb-4">Palestrantes</hh4>
                                    <h1 class="title">Conheça os nossos palestrantes</h1>
                            </div>
                            <div class="mt-8">
                                <div class="flex items-center justify-center flex-wrap">
                                    <div>
                                        <img onclick="showDetails()"
                                            src="{{ asset('imagens/palestrantes/miguel_coelho.jpeg') }}"
                                            alt="Miguel Coelho"
                                            class="h-30 w-30 rounded-full p-1 m-3 cursor-pointer user-pic active-pic">
                                    </div>
                                    <div>
                                        <img onclick="showDetails()"
                                            src="{{ asset('imagens/palestrantes/nuno_rama.jpeg') }}" alt="Nuno Rama"
                                            class="h-30 w-30 rounded-full p-1 m-3 cursor-pointer user-pic">
                                    </div>
                                    <div>
                                        <img onclick="showDetails()"
                                            src="{{ asset('imagens/palestrantes/jaime_vilaça.jpeg') }}"
                                            alt="Jaime Vilaça"
                                            class="h-30 w-30 rounded-full p-1 m-3 cursor-pointer user-pic">
                                    </div>

                                </div>
                                <div class="grid place-items-center text-center m-auto md:w-4/5 min-h-[40vh]">
                                    <div class="user-text active-text">
                                        <p class="md:text-2xl mb-6">
                                            "Lorem ipsum
                                        </p>
                                        <h4 class="font-bold text-color-secondary mb-1">
                                            Dr. Miguel Coelho
                                        </h4>
                                        <p>
                                            Cirurgião Geral
                                        </p>
                                    </div>
                                    <div class="user-text">
                                        <p class="md:text-2xl mb-6">
                                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt
                                            provident
                                            tenetur?"
                                        </p>
                                        <h4 class="font-bold text-color-secondary mb-1">
                                            Prof Dr. Nuno Rama
                                        </h4>
                                        <p>
                                            Cirurgião Geral
                                        </p>
                                    </div>
                                    <div class="user-text">
                                        <p class="md:text-2xl mb-6">
                                            "dipisicing elit. Sapiente sunt provident
                                            tenetur?"
                                        </p>
                                        <h4 class="font-bold text-color-secondary mb-1">
                                            Prof Dr. Jaime Vilaça
                                        </h4>
                                        <p>
                                            Cirurgião Geral
                                        </p>
                                    </div>

                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
        <script>
            const hamburguer = document.querySelector('#hamburguer');
            const menu = document.querySelector('#menu');
            const hlink = document.querySelectorAll('#hlink');


            // palestrantes
            const userTexts = document.getElementsByClassName("user-text");
            const userPics = document.getElementsByClassName("user-pic");

            function showDetails() {
                for (userPic of userPics) {
                    userPic.classList.remove('active-pic');
                };
                for (userText of userTexts) {
                    userText.classList.remove('active-text');
                };
                let i = Array.from(userPics).indexOf(event.target);

                userPics[i].classList.add('active-pic');
                userTexts[i].classList.add('active-text');
            }
        </script>
</x-app-layout>
