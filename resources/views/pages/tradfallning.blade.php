@extends('layouts.app')
@section('content')
    <div class = "container mx-auto sm:px-4 my-5">
        <div class = "flex flex-wrap  p-6 pb-0 lg:pe-0 lg:pt-12 rounded-3 border shadow-lg">
            <div class = "lg:w-3/5 pr-4 pl-4 p-6 lg:p-12 lg:pt-4">
                <h1 class = "text-4xl font-bold leading-tight text-gray-900 ">Trädfällning</h1>
                <p class = "text-lg font-light">Vi utför fällning av träd både på tomter och i skogsområden.
                    Sättet vi fäller på anpassas alltid efter situationen och platsens förutsättningar.
                    Arbetet utförs alltid med högsta säkerhet men på ett effektivt sätt.
                    Vi utför även precisionsfällning där speciella redskap och tekniker används. Vi kan även
                    direkt flisa upp grenar från träden vilket underlättar enormt efterarbetet på tomten.
                    Kontakta oss idag med din förfrågan.</p>
                <h2 class = "text-lg font-bold leading-tight text-gray-900 "> Trädfällning priser</h2>
                <p class = "text-lg font-light">
                    Prisuppgifter här gäller nertagning av trädet samt att alla grenar sågas av och trädet kapas i 60 cm
                    kubbar.
                    Varje träd är ju i sig unikt genom hur det är placerat samt sin storlek. Därför är det svårt att ge
                    generella priser.
                    Som ett riktvärde kan man uppskatta kostnaden till att nertagning av ett normalstort träd med upp till
                    60 cm i diameter i marknivå ligger runt 500 - 1500 kr med RUT-avdrag.
                    Priset kan påverkas av att trädet är bredare eller står på ett sätt gentemot känslig egendom eller andra
                    träd som försvårar nertagningen.
                    Vi ger dock alltid en gratis offert vid förfrågan.
                    Här kan du läsa mer om vad som gäller för <a href = "/fragor">RUT-avdrag för
                        trädfällning.</a>
                </p>
                <h2 class = "text-2xl font-bold leading-tight text-gray-900 ">Trädfällning i Roslagen</h2>
                <p class = "text-lg font-light">Här kan du läsa mer om var vi utför trädfällning i Skärgården :
                <ul>
                    <li><a href = "/tradfallning-blido">Blidö</a></li>
                    <li><a href = "/tradfallning-yxlan">Yxlan</a></li>
                    <li><a href = "/tradfallning-norrtalje">Norrtälje</a></li>
                </ul>

                </p>
                <div class = "d-grid gap-2 md:flex md:justify-start mb-4 lg:mb-4 pt-2">
                    <form method = "POST" action = "/kontakt.php">
                        <input type = "submit" class = "inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline bg-green-500 text-white hover:bg-green-600 py-3 px-4 leading-tight text-xl px-4 md:me-2 fw-bold" value = "Förfrågan"/>
                    </form>

                    <!--				<button type="button" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700 py-3 px-4 leading-tight text-xl px-4">Default</button>-->
                </div>
            </div>

            <div class = "lg:w-1/5  p-0 overflow-hidden shadow-lg">
                <img class = "rounded-2xl pl-1 mx-auto" src = "/images/tradfallning-norrtalje.webp" alt = "trädfällning med motorsåg">
            </div>
        </div>
    </div>
@stop
