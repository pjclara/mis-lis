<x-guest-layout>

    <section id="inicio" class="bg-color-primary-light relative">
        <div
            class="w-80 h-80 bg-color-bob absolute top-0 -left-5 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full ">
        </div>
        <div
            class="w-80 h-80 bg-color-bob absolute bott bottom-10 right-0 -z-10 blur-2xl opacity-30 overflow-hidden rounded-full ">
        </div>
        <div class="container py-20">
            <div class="flex flex-col items-center z-200 md:flex-row">
                <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10 ">
                    <h1 class="title mb-4">
                        Cirurgia Minimamente Invasiva E Inovação
                    </h1>
                    <p class="leading-relaxed mb-10">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                        expedita sequi inventore sit repellat, rem nemo sed? Hic quod porro architecto inventore
                        omnis sunt aut, reiciendis necessitatibus excepturi illo libero.
                    </p>
                </div>
                <div class="md:w-1/2 flex justify-around">
                    <div>
                        <img src="http://blog.clinicanexa.com.br/wp-content/uploads/2019/10/cirurgia-minimamente-invasiva.jpg"
                            class="rounded-2xl shadow-2xl" width="300" height="300" alt="">
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center z-200 md:flex-row mt-6">
                <div class="md:w-1/2 flex justify-around">
                    <div class="flex">
                        <img src="https://img.iol.pt/image/id/61669cc40cf241cadce2d425/1024.jpg"
                            class="rounded-2xl shadow-2xl" alt="" width="300" height="300">
                    </div>
                </div>
                <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10 ">
                    <h1 class="title mb-4">
                        <span>Unidade Local de Saúde da Região de Leiria</span>
                    </h1>
                    <p class="leading-relaxed mb-10">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                        expedita sequi inventore sit repellat, rem nemo sed? Hic quod porro architecto inventore
                        omnis sunt aut, reiciendis necessitatibus excepturi illo libero.
                    </p>
                </div>
            </div>
            <div class="flex flex-col items-center z-200 md:flex-row mt-6">
                <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10 ">
                    <h1 class="title mb-4">
                        <span>Cidade de leiria</span>
                    </h1>
                    <p class="leading-relaxed mb-10">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                        expedita sequi inventore sit repellat, rem nemo sed? Hic quod porro architecto inventore
                        omnis sunt aut, reiciendis necessitatibus excepturi illo libero.
                    </p>
                </div>
                <div class="md:w-1/2 flex justify-around">
                    <div class="flex">
                        <img src="https://as2.ftcdn.net/v2/jpg/03/11/88/49/1000_F_311884955_MqHy4m7IEkqZp4IVCmNuiPZ4k1sAs3X4.jpg"
                            class="rounded-2xl shadow-2xl" alt="" width="300" height="300">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="features" class="bg-color-primary-light relative">
        <div class="container py-20 relative">
            <div class="text-center m-auto mb-20 md:w-1/2">
                <h4 class="font-bold text-color-secondary mb-4">Mensagem de boas vindas</h4>
                <h1 class="title">Jornadas de Cirurgia Minimamente Invasiva E Inovação de Leiria</h1>
                <h6><a href="#inicio">Top</a></h6>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">
                <!-- Card 1 -->
                <div
                    class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                    <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                        <img src="{{ asset('img/palestrantes/miguel_coelho.jpeg') }}" alt="Miguel Coelho"
                            class="rounded-full p-1 m-3 h-30 cursor-pointer user-pic">
                    </div>
                    <h3 class="text-xl font-bold py-4">Dr. Miguel Coelho</h3>
                    <p class="leading-relaxed">
                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt provident tenetur?
                        Amet, quibusdam! Placeat"
                    </p>
                </div>
                <!-- Card 2 -->
                <div
                    class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                    <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                        <img src="{{ asset('img/palestrantes/nuno_rama.jpeg') }}" alt="Nuno Rama"
                            class="rounded-full p-1 m-3 h-30 cursor-pointer user-pic">
                    </div>
                    <h3 class="text-xl font-bold py-4">Prof. Dr. Nuno Rama</h3>
                    <p class="leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt provident tenetur?
                        Amet, quibusdam! Placeat
                    </p>
                </div>
                <!-- Card 3 -->
                <div
                    class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                    <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                        <img src="{{ asset('img/palestrantes/jaime_vilaça.jpeg') }}" alt="Jaime Vilaça"
                            class="rounded-full p-1 m-3 h-30 cursor-pointer user-pic">
                    </div>
                    <h3 class="text-xl font-bold py-4">Prof. Dr. Jaime Vilaça</h3>
                    <p class="leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt provident tenetur?
                        Amet, quibusdam! Placeat
                    </p>
                </div>
            </div>

    </section>

    <section id="programa" class="bg-color-primary-light">
        <div class="container py-20">
            <div class="text-center m-auto mb-10 md:w-1/2">
                <h4 class="font-bold text-color-secondary mb-4">Como vai funcionar</h4>
                <h1 class="title">Fluxograma do congresso</h1>
            </div>
        </div>

        <div class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-6">

            <!-- Card 1 -->
            <div class="text-center cursor-pointer">
                <div
                    class="relative bg-color-secondary inline-block px-5 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                    <p class="text-6xl">1</p>
                </div>
                <h3 class="text-xl font-bold py-4">Apresentação de temas</h3>
                <p class="leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt provident tenetur?
                    Amet, quibusdam! Placeat
                </p>

            </div>
            <!-- Card 1 -->
            <div class="text-center cursor-pointer">
                <div
                    class="relative bg-color-secondary inline-block px-5 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                    <p class="text-6xl">2</p>
                </div>
                <h3 class="text-xl font-bold py-4">Cirurgia ao vivo</h3>
                <p class="leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt provident tenetur?
                    Amet, quibusdam! Placeat
                </p>

            </div>
            <!-- Card 1 -->
            <div class="text-center cursor-pointer">
                <div
                    class="relative bg-color-secondary inline-block px-5 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                    <p class="text-6xl">3</p>
                </div>
                <h3 class="text-xl font-bold py-4">Partilha de experiências</h3>
                <p class="leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt provident tenetur?
                    Amet, quibusdam! Placeat
                </p>

            </div>
        </div>

    </section>

    <section id="palestrantes" class="bg-color-primary-light">
        <div class="container py-20">
            <div class="text-center m-auto mb-10 md:w-1/2">
                <h4 class="font-bold text-color-secondary mb-4">Palestrantes</hh4>
                    <h1 class="title">Conheça os nossos palestrantes</h1>
            </div>
            <div class="mt-8">
                <div class="flex items-center justify-center flex-wrap">
                    <img onclick="showDetails()" src="{{ asset('img/palestrantes/miguel_coelho.jpeg') }}"
                        alt="Miguel Coelho" class="h-30 w-30 rounded-full p-1 m-3 cursor-pointer user-pic active-pic">
                    <img onclick="showDetails()" src="{{ asset('img/palestrantes/nuno_rama.jpeg') }}" alt="Nuno Rama"
                        class="h-30 w-30 rounded-full p-1 m-3 cursor-pointer user-pic">
                    <img onclick="showDetails()" src="{{ asset('img/palestrantes/jaime_vilaça.jpeg') }}"
                        alt="Jaime Vilaça" class="h-30 w-30 rounded-full p-1 m-3 cursor-pointer user-pic">
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
                            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente sunt provident
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


    <section id="inscricao" class="bg-color-primary-light">
        <div class="container py-20">
            <div class="text-center m-auto mb-20 md:w-1/2">
                <h4 class="font-bold text-color-secondary mb-4">
                    Inscrição nas jornadas
                </h4>
                <h1 class="title">
                    Formulário de inscrição
                </h1>
                <p class="text-sm"><span class="">Preço da inscrição: </span>Especialista: 60 euros |
                    Interno: 30 euros</p>
            </div>
            <form action="">
                <div class="w-full m-auto text-center md:w-2/3">
                    <div class="text-color-primary-dark grid gap-6 mb-6 grid-cols-1">
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-sm rounded block w-full focus:ouline-none focus:border-color-secondary"
                            placeholder="Nome" required>
                        <input type="email"
                            class="bg-gray-50 border border-gray-300 text-sm rounded block w-full focus:ouline-none focus:border-color-secondary"
                            placeholder="email" required>
                        <select name="estatuto" id="estatuto">
                            <option value="">Selecionar</option>
                            <option value="estudante">Interno de Cirurgia</option>
                            <option value="profissional">Especialista</option>
                            <option value="profissional">Outro</option>
                        </select>

                        <button class="btn">Enviar</button>
                    </div>

                </div>
            </form>
        </div>

    </section>

    <section id="blog" class="bg-color-primary-light">
        <div class="container py-20">
            <div class="text-center m-auto mb-20 md:w-1/2">
                <h4 class="font-bold text-color-secondadry mb-4">
                    Blog
                </h4>
                <h1 class="title">
                    Últimas entradas
                </h1>
            </div>
        </div>

    </section>

    <section id="footer">
        <div class="bg-color-primary-dark relative">
            <div class="container py-10">
                <div class="grid gad-10 md:grid-cols-3 pb-10">
                    <div class="space-y-6">
                        <h4 class="font-bold text-lg">Sobre nós</h4>
                        <p class="leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                            expedita
                            sequi inventore sit repellat, rem nemo sed? Hic quod porro architecto inventore omnis
                            sunt
                            aut, reiciendis necessitatibus excepturi illo libero.</p>

                    </div>
                    <div class="flex justify-around">
                        <div>
                            <h4 class="font-bold text-lg">Contactos</h4>
                            <div class="space-y-6">
                                <p>Serviço de Cirurgia</p>
                                <p>Telefone: 244 817 000</p>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg">Redes Sociais</h4>
                            <div class="space-y-6">
                                <p>Facebook</p>
                                <p>Watsup</p>
                            </div>
                        </div>

                    </div>
                    <div class="space-y-6">
                        <h4 class="font-bold text-lg">Patrocinadores</h4>
                        <div class="flex justify-around">
                            <p><img src="https://www.graffgroup.com/wp-content/uploads/2016/06/metronic.jpg"
                                    alt="" width="100" height="100"></p>
                            <p><img src="https://logowik.com/content/uploads/images/applied-materials4038.jpg"
                                    alt="" width="100" height="100"></p>
                        </div>

                    </div>
                </div>
                <div class="flex justify-center pt-10 border-t border-color-gray">
                    <p class="text-sm">Copyright © 2024 - SurgTuga - Todos os Direitos Reservados</p>
                </div>
            </div>
        </div>
    </section>



</x-guest-layout>
