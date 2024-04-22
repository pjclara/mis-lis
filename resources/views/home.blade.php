<x-app-layout>
    <x-slot name="title">
        {{ __('Home') }}
    </x-slot>
    <div class="bg-color-primary-light p-10 grid lg:grid-cols-12">
        <div class="lg:col-span-10 text-center">
            <h1 class="text-6xl font-extrabold text-color-secondary mb-5">
                <span class="text-white">MIS.</span>LIS
            </h1>
            <h2 class="text-3xl font-bold">
                {{ __('Jornadas de Cirurgia Minimamente Invasiva E Inovação de Leiria') }}</h2>
        </div>
        <div class="lg:col-span-2 flex justify-center items-center mt-5">
            <img src="imagens/logo/logo.png" alt="MIS-LIS" width="100">
        </div>
    </div>
    <div class="bg-color-primary-dark p-5 ">
        <h3 class="flex md:justify-center">
            <span class="text-center mr-10">Centro Hospitalar de Leiria</span>
            <span class="text-center">Auditório do IPLeiria</span>
        </h3>
    </div>
    <div class="p-10  text-center">
        <p class="mb-5">
            As
            <span class="text-color-secondary font-bold">Jornadas de Cirurgia Minimamente Invasiva e Inovação de
                Leiria</span>
            são um evento organizado pelo serviço de
            cirurgia de Leiria, nos auditórios do <b>Instituto Politécnico de Leiria</b>.
        </p>
        <p class="mb-5">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis similique nemo quae laboriosam quasi,
            in quibusdam perspiciatis modi tempore consequuntur, soluta sequi rem nihil id ea rerum at aliquid
            doloribus?
        </p>
        <p class="mb-5">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis similique nemo quae laboriosam quasi,
            in quibusdam perspiciatis modi tempore consequuntur, soluta sequi rem nihil id ea rerum at aliquid
            doloribus?
        </p>
        <p class="font-extrabold text-color-secondary p-5">
            Contamos consigo em Novembro de 2024 nas MIS-LIS!
        </p>
        <p class="font-extrabold text-color-secondary p-5">
            Inscrições abrem em breve!
        </p>
        @auth
            @hasRole('admin')
                <a href="{{ route('enrollment') }}" class="btn">Inscrição</a>
            @endhasRole
        @endauth
    </div>
    <div class="bg-color-primary-dark p-5 text-center">
        <span id="title" class="text-2xl font-bold">LOCAL DO EVENTO</span>
    </div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-2 px-4 sm:px-6 lg:px-8">
        <div class="m-2">
            <img src="{{ asset('imagens/logo/IPL.jpeg') }}" alt="IPLeiria" width="100%" height="100%">
        </div>
        <div class="text-center flex flex-col justify-center m-2">
            <p class="text-3xl font-bold mb-5">Instituto Politécnico de Leiria</p>
            <p class="text-2xl">Rua General Norton De Matos Edif. Sede Aptd. 4133 2411-901 - LEIRIA. PORTUGAL.</p>
        </div>
        <div class="m-2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6136.309599279899!2d-8.821644953185164!3d39.73617348668056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sipleiria!5e0!3m2!1sen!2spt!4v1712512515402!5m2!1sen!2spt"
                width="100%" height="100%" style="border:none;" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="bg-color-primary-dark p-5 text-center">
        <span id="title" class="text-2xl font-bold">COMISSÃO ORGANIZADORA</span>
    </div>
    <div class="p-5 text-center">
        <div class="grid lg:grid-cols-5 md:grid-cols-2 gap-4 lg:gap-2 px-4 sm:px-6 lg:px-8">

            <div class="text-center rounded-2xl cursor-pointer p-2">
                <div class=" inline-block rounded-2xl">
                    <img src="{{ asset('imagens/palestrantes/miguel_coelho.jpeg') }}" alt="Miguel Coelho"
                        class="rounded-full p-1 m-3 h-20 cursor-pointer user-pic">
                </div>
                <h3 class="py-4">Dr. Miguel Coelho</h3>
            </div>

            <div class="text-center rounded-2xl cursor-pointer p-2">
                <div class=" inline-block rounded-2xl">
                    <img src="{{ asset('imagens/palestrantes/nuno_rama.jpeg') }}" alt="Nuno Rama"
                        class="rounded-full p-1 m-3 h-20 cursor-pointer user-pic">
                </div>
                <h3 class="py-4">Prof. Dr. Nuno Rama</h3>
            </div>

            <div class="text-center rounded-2xl cursor-pointer p-2">
                <div class=" inline-block rounded-2xl">
                    <img src="{{ asset('imagens/palestrantes/jaime_vilaça.jpeg') }}" alt="Jaime Vilaça"
                        class="rounded-full p-1 m-3 h-20 cursor-pointer user-pic">
                </div>
                <h3 class="py-4">Prof. Dr. Jaime Vilaça</h3>
            </div>

            <div class="text-center rounded-2xl cursor-pointer p-2">
                <div class=" inline-block rounded-2xl">
                    <img src="{{ asset('imagens/palestrantes/pauloclara.jpg') }}" alt="Paulo Clara"
                        class="rounded-full p-1 m-3 h-20 cursor-pointer user-pic">
                </div>
                <h3 class="py-4">Dr. Paulo Clara</h3>
            </div>

            <div class="text-center rounded-2xl cursor-pointer p-2">
                <div class=" inline-block rounded-2xl">
                    <img src="{{ asset('imagens/palestrantes/mic.jpeg') }}" alt="Maria Inês Coelho"
                        class="rounded-full p-1 m-3 h-20 cursor-pointer user-pic">
                </div>
                <h3 class="py-4">Drª. Maria Inês Coelho</h3>
            </div>
        </div>
    </div>
    <div class="bg-color-primary-dark p-5 text-center">
        <span id="title" class="text-2xl font-bold">APOIO CIENTÍFICO</span>
    </div>
    <div class="bg-cor-primaria-clara p-5 flex justify-around">
        <div>
            <img src="{{ asset('imagens/logo/spcir.png') }}" alt="SPCIR" height="100" width="200">
        </div>
        <div>
            <img src="{{ asset('imagens/logo/spcmin.png') }}" alt="SPCMin" height="100" width="100">
        </div>
    </div>
    <div class="bg-color-primary-dark p-5 text-center">
        <span id="title" class="text-2xl font-bold">Patrocinadores</span>
    </div>
    <div class="bg-cor-primaria-clara p-5 flex justify-around">

    </div>


</x-app-layout>
