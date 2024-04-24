<x-app-layout>
    <x-slot name="title">
        {{ __('About us') }}
    </x-slot>

    <div class="py-12">

        <div class="max-w-full mx-auto sm:px-3 lg:px-4">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <section id="inicio" class="relative">
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
                                        Serviço de Cirurgia Geral
                                    </h1>
                                    <p class="leading-relaxed mb-10">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Ipsa
                                        expedita sequi inventore sit repellat, rem nemo sed? Hic quod porro architecto
                                        inventore
                                        omnis sunt aut, reiciendis necessitatibus excepturi illo libero.
                                    </p>
                                </div>
                                <div class="md:w-1/2 flex justify-around">
                                    <div>
                                        <img src="{{ asset('imagens/logo/logo.png') }}" class="rounded-2xl"
                                            width="200" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center z-200 md:flex-row mt-6">
                                <div class="md:w-1/2 flex justify-around">
                                    <div class="flex">
                                        <img src="https://img.iol.pt/image/id/61669cc40cf241cadce2d425/1024.jpg"
                                            class="rounded-2xl shadow-2xl" alt="" width="300">
                                    </div>
                                </div>
                                <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10 ">
                                    <h1 class="title mb-4">
                                        <span>Unidade Local de Saúde da Região de Leiria</span>
                                    </h1>
                                    <p class="leading-relaxed mb-10">A área de influência direta corresponde aos
                                        concelhos de Batalha, Leiria, Marinha Grande, Porto de Mós, Nazaré, Pombal,
                                        Pedrógão Grande, Figueiró dos Vinhos, Castanheira de Pêra, Ansião, Alvaiázere e
                                        parte dos concelhos de Alcobaça, Ourém e Soure.
                                    </p>
                                    <p class="leading-relaxed">
                                        <span><a class="font-bold underline"
                                                href="https://www.sns.gov.pt/entidades-de-saude/unidade-local-de-saude-da-regiao-de-leiria/"
                                                target="blank">Aqui</a> tem mais informações sobre a ULS de
                                            Leiria.</span>
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-col items-center z-200 md:flex-row mt-6">
                                <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10 ">
                                    <h1 class="title mb-4">
                                        <span>Cidade de leiria</span>
                                    </h1>
                                    <p class="leading-relaxed">{{__('Entre o Castelo e o rio Lis nasceu e cresceu Leiria.')}}</p>
                                    <p class="leading-relaxed">
                                        {{__('Enamorada por dois rios, o Lis e o Lena, banhando-se nas areias douradas do Atlântico, povoada de belas matas, a cidade de Leiria propicia a quem a visita locais inesquecíveis e de raro encanto.')}}</p>
                                    <p class="leading-relaxed mb-10">
                                        Capital de distrito e localizada no centro litoral do país, a atração pelo
                                        concelho de Leiria está à vista: rios, praia, pinhal, lagoas, salinas, abrigos
                                        rupestres, arquitetura religiosa e civil, a monumentalidade das construções
                                        medievais, museus, termas, tradições populares nas suas manifestações mais
                                        puras, artesanato e muita, muita e rica gastronomia.</p>
                                    <p class="leading-relaxed">
                                        <a class="font-bold underline" href="https://www.visiteleiria.pt/"
                                            target="blank">Aqui</a> pode encontrar sugestões de alguns dos locais mais
                                        turísticos de Leiria!
                                    </p>
                                </div>
                                <div class="md:w-1/2 flex justify-around">
                                    <div class="flex">
                                        <img src="https://as2.ftcdn.net/v2/jpg/03/11/88/49/1000_F_311884955_MqHy4m7IEkqZp4IVCmNuiPZ4k1sAs3X4.jpg"
                                            class="rounded-2xl shadow-2xl" alt="" width="300">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
</x-app-layout>
