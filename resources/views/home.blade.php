@extends('layouts.app')
{{--comment--}}
@section('content')
    <div class="container mx-auto sm:px-4 my-5">

        <div class="flex flex-wrap  py-1 px-2 pb-0 lg:pe-0 lg:pt-4  rounded shadow-lg">
            <div class="mx-1/12 pl-4 px-2/12-6 text-center ">
                <h1 class="font-bold leading-3 text-gray-900 my-3 mt-9 mb-10">Trädfällning i norra Skärgården</h1>
                @include('layouts.onecard')
                <p class="text-lg py-2 text-base leading-7 space-y-2 text-gray-700">
                    Vi innehar motorsågskörkort samt är registrerade för F-skatt och har
                    ansvarsförsäkring.
                </p>
                <p class="text-lg pt-2 text-base leading-7 space-y-2 text-gray-700 font-semibold">De tjänster vi kan
                    erbjuda omfattar: </p>
                <div class="flex">
                    <div class="">

                    </div>
                    <div class="">
                    </div>
                </div>
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
    </div>
    <div class="w-full sm:px-6">
        @if (true)

        @endif
        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-700 bg-green-100 px-3 py-4 mb-4"
                 role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{-- <div class="w-full p-6">
             <p class="text-gray-700">
                 You are logged in!
             </p>
         </div>--}}

    </div>

@endsection
