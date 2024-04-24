<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    @foreach ($available_locales as $locale_name => $available_locale)
        @if ($available_locale === $current_locale)
            <img class="border-b-4 border-red-900 pb-1" src="{{ asset('imagens/logo/' . $locale_name . '.png') }}" width="40" height="40" alt="{{ $locale_name}}">
        @else
            <a class="ml-1 underline ml-2 mr-2" href="language/{{ $available_locale }}">
                <img src="{{ asset('imagens/logo/' . $locale_name . '.png') }}" width="40" height="40" alt="{{ $locale_name}}">
            </a>
        @endif
    @endforeach
</div>
