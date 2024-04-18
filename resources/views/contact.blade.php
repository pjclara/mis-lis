<x-app-layout>
    <x-slot name="title">
        {{ __('Contact us') }}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-4">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-green-900 dark:text-red-500">
                    <section id="contact" class="bg-white">
                        <div class="container py-5">
                            <div class="text-center m-auto mb-5 md:w-1/2">
                                <h1 class="title">
                                    Deixe a sua mensagem
                                </h1>
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
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            class="bg-gray-50 border border-gray-300 text-sm rounded block w-full focus:ouline-none focus:border-color-secondary"
                                            placeholder="Mensagem" required></textarea>

                                        <button class="btn">{{ __('Send') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
