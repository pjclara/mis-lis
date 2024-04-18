<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Laravel') }} @if (isset($title))
            | {{ $title }}
        @endif
    </title>
    <link rel="icon" href="{!! asset('imagens/logo/logo.png') !!}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-color-primary-light dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-full mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
            <button id="btnInicio" onclick="voltarAoInicio()" style="display: none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm.53 5.47a.75.75 0 0 0-1.06 0l-3 3a.75.75 0 1 0 1.06 1.06l1.72-1.72v5.69a.75.75 0 0 0 1.5 0v-5.69l1.72 1.72a.75.75 0 1 0 1.06-1.06l-3-3Z"
                        clip-rule="evenodd" />
                </svg>
            </button>

        </main>
    </div>

    <section id="footer">
        <div class="bg-color-primary-dark relative">
            <div class="container py-3">
                {{-- 
                <div class="grid gad-10 md:grid-cols-4 pb-5">
                    <div class="space-y-6 pr-5 col-span-3">
                        <h3 class="font-bold text-lg">Contactos</h3>
                        <p class="leading-relaxed text-white">
                            <span class="text-bold">Telefone: </span>244 817 000
                        </p>
                        <p class="leading-relaxed text-white">
                            <span class="text-bold">Email: </span>sec@chleiria.min-saude.pt
                        </p>
                    </div>
                    <div class="space-y-6">
                        <h3 class="font-bold text-lg">Contactos</h3>
                        <p class="leading-relaxed text-white">
                            <span class="text-bold">Telefone: </span>244 817 000
                        </p>
                        <p class="leading-relaxed text-white">
                            <span class="text-bold">Email: </span>sec@chleiria.min-saude.pt
                        </p>
                    </div>

                </div>
                --}}
                <div class="flex justify-between">
                    <div class="flex items-end">
                       <img src="{{ asset('imagens/logo/usrl.jpeg') }}" alt="ULSRL" width="200">
                    </div>
                    <div class="flex items-end">
                        <p class="text-sm text-white">©2024 SurgTuga </p>
                        <img src="{{ asset('imagens/logo/surgtuga.png') }}" alt="Logo SurgTuga" width="30"
                            class="bg-white rounded-t ml-2">
                    </div>

                </div>

            </div>
        </div>
    </section>

    <script>
        window.onscroll = function() {
            mostrarBotaoInicio()
        };

        function mostrarBotaoInicio() {
            if (document.body.scrollTop > (document.documentElement.clientHeight / 2) || document.documentElement
                .scrollTop > (document.documentElement.clientHeight / 2)) {
                document.getElementById("btnInicio").style.display = "block";
            } else {
                document.getElementById("btnInicio").style.display = "none";
            }
        }

        // Função para rolar a página para o início suavemente
        function voltarAoInicio() {
            const scrollStep = -window.scrollY / (500 / 15);
            const scrollInterval = setInterval(function() {
                if (window.scrollY != 0) {
                    window.scrollBy(0, scrollStep);
                } else clearInterval(scrollInterval);
            }, 15);
        }
    </script>
    <style>
        /* Estilo para o botão */
        #btnInicio {
            position: fixed;
            top: 50%;
            transform: translateY(-50%);
            right: 5px;
            /* Ajuste a posição lateral aqui */
            padding: 5px 10px;
            background-color: lightgrey;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>

</body>

</html>
