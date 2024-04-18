<x-app-layout>
    <x-slot name="title">
        {{ __('Edit Album') }}
    </x-slot>
    <div class="container mx-auto m-4 p-4 bg-white shadow-md rounded-lg">
        <div class="w-full m-2 p-2 flex justify-between">
            <span class="text-3xl">{{__('Update Album')}}</span>
            <a href="{{ route('albums.index') }}"
                class="bg-color-secondary text-white p-2 m-2 font-semibold rounded-lg">{{__('Back')}}</a>
        </div>
        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
            <form method="POST" action="{{ route('albums.update', $album->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="sm:col-span-6">
                    <label for="title" class="block text-sm font-medium text-gray-700">Título do album</label>
                    <div class="mt-1">
                        <input type="text" id="title" name="title" value="{{ old('title', $album->title) }}" placeholder="Album Title" required
                            class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                </div>
                <div class="sm:col-span-6 pt-5">
                    <label for="title" class="block text-sm font-medium text-gray-700">Escolher as imagens</label>
                    <div class="mt-1">
                        <input type="file" id="images" multiple name="images[]"
                            class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                </div>
                <div class="sm:col-span-6 pt-5">
                    <x-button class="bg-green-600">{{__('Update')}}</x-button>
                </div>
            </form>
            <div class="sm:col-span-6 pt-5">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-2 md:gap-4">
                    @foreach ($album->getMedia() as $photo)
                        <div class="bg-gray-300 p-2">
                            <a class="block relative h-56 rounded overflow-hidden">
                                <img alt="gallery" class="object-cover object-center w-full h-full block"
                                    src="{{ $photo->getUrl('thumb') }}">
                            </a>
                            <div class="flex justify-between mt-4 p-4">
                                <a class="m-2 p-2 bg-blue-500 hover:bg-blue-700 rounded-lg"
                                    href="{{ route('album.image.show', [$album->id, $photo->id]) }}">{{__('Full image')}}</a>
                                <form method="POST"
                                    action="{{ route('album.image.destroy', [$album->id, $photo->id]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="m-2 p-2 rounded-lg bg-red-500 hover:bg-red-700">{{__('Delete photo')}}</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
