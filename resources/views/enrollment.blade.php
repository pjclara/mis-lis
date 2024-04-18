<x-app-layout>
    <x-slot name="title">
        {{ __('Enrollment') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-4">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-green-900 dark:text-red-500">
                    <section id="inscricao" class="bg-white">
                        <div class="container py-20">
                            <div class="text-center m-auto mb-5 md:w-1/2">
                                <h4 class="font-bold text-color-secondary mb-4">
                                    Inscrição nas jornadas
                                </h4>
                                <h1 class="title">
                                    Formulário de inscrição
                                </h1>
                                <p class="text-sm"><span class="">Preço da inscrição: </span>Especialista: 60
                                    euros |
                                    Interno: 30 euros</p>
                            </div>
                            <form action="">
                                <div class="w-full m-auto text-center md:w-2/3">
                                    <div class="text-color-primary-dark grid gap-6 mb-6 grid-cols-1">
                                        <input type="text"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded block w-full focus:ouline-none focus:border-color-secondary"
                                            placeholder="Nome" id="name" name="name" required>
                                        <input type="email"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded block w-full focus:ouline-none focus:border-color-secondary"
                                            placeholder="email" id="email" name="email" required>
                                        <select name="estatuto" id="estatuto" required>
                                            <option value="">Selecionar</option>
                                            <option value="estudante">Interno de Cirurgia</option>
                                            <option value="profissional">Especialista</option>
                                            <option value="profissional">Outro</option>
                                        </select>

                                        <button class="btn">{{ __('Send') }}</button>
                                    </div>
                                </div>
                            </form>

                    </section>
                </div>
            </div>
        </div>
</x-app-layout>
