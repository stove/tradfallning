@extends('layouts.app')
{{--comment--}}
@section('content')
    <div class="h-full flex items-center px-6 lg:px-32">


                <h1 class="font-bold text-center leading-2 text-gray-900 mb-8 mt-4 mb-10">Trädfällning i norra Skärgården</h1>

                @include('layouts.onecard')
                <div class="w-full md:w-9/12 xl:w-8/12 ">
                    <p class="text-lg text-gray-700 items-center">
                        Vi innehar motorsågskörkort samt är registrerade för F-skatt och har
                        ansvarsförsäkring.
                    </p>

                    <p class="text-lg py-4 text-base leading-7 space-y-2 text-gray-700"> Vi arbetar främst i Roslagen på öar
                        såsom
                        <a class="no-underline text-green-400 hover:text-green-700" href="/pages/tradfallning-blido.php">Blidö</a>
                        ,
                        <a class="no-underline text-green-400 hover:text-green-700" href="/pages/tradfallning-yxlan.php">Yxlan</a>,
                        Gräskö samt i
                        <a class="no-underline text-green-400 hover:text-green-700"
                           href="/pages/tradfallning-norrtalje.php">Norrtälje</a>.
                        Vi innehar motorsågskörkort samt är registrerade för F-skatt och har
                        ansvarsförsäkring.
                    </p>
                    <p class="text-lg py-4 text-base leading-7 space-y-2 text-gray-700">
                        Vi erbjuder alltid en kostnadsfri offert på det arbete ni vill ha utfört, så tveka inte att
                        höra
                        av er.
                        Och glöm inte att vid arbete på tomt så kan eventuellt en skattereduktion sökas, så kallat
                        <a
                            href="../pages/fragor.php">RUT-avdrag </a>, med upp till hela 50 procent av
                        arbetskostnaden.
                        Vi kan även erbjuda delad transportkostnad om ni är fler på samma ö som behöver hjälp.
                    </p>
                    <p class="text-lg pt-2-4 text-base leading-7 space-y-2 text-gray-700 font-bold">Varför välja
                        Trädfällning Gräskö AB?</p>
                    <p class="text-lg py-2 text-base leading-7 space-y-2 text-gray-700">
                        Arbetet utförs alltid i nära kontakt med kunden och vi är lyhörda för
                        kundens behov. Arbetet
                        utförs också alltid med säkerhet i fokus.
                        Det gör oss till ett tryggt val för dig som kund. Har du fortfarande någon fråga
                        kontakta oss via något av de sätt som finns tillgängliga på vår hemsida.
                        Om du befinner dig i roslagen eller i norra skärgården, hör av dig genom att ringa oss, eller skicka
                        ett email,
                        så hjälper vi dig.
                        Välkommen till oss som kund!
                    </p>
                    <p class="text-lg py-2 text-base leading-7 space-y-2 text-gray-700">Här kan du läsa mer om vår tjänst <a
                            class="no-underline text-green-400 hover:text-green-700" href="/pages/tradfallning.php">trädfällning
                            och vad det
                            kostar</a>
                    </p>
                    <p class="text-lg py-2 text-base leading-7 space-y-2 text-gray-700">Läs mer om våra <a
                            class="no-underline text-green-400 hover:text-green-700" href="/pages/stubbfrasning.php">priser
                            för
                            stubbfräsning </a> här!</p>
                </div>

    </div>
@endsection
{{--    <div class="w-full sm:px-6">--}}
{{--        @if (true)--}}

{{--        @endif--}}
{{--        @if (session('status'))--}}
{{--            <div class="text-sm border border-t-8 rounded text-green-700 border-green-700 bg-green-100 px-3 py-4 mb-4"--}}
{{--                 role="alert">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--    </div>--}}


