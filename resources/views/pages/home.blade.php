@extends('layouts.layout')
{{--comment--}}
@section('content')
    <div class=" relative pb-10 px-6 md:px-20 xl:px-32">
        <div class="flex flex-row">
            <div class="basis-1/3">
                <img tabindex="0" role="img" aria-label="man som sågar med motorsåg" class="mx-4" src="images/myhero_sm.png"  alt="man som sågar med motorsåg"/>
            </div>
            <div   class="basis-2/3">
                <article class="prose"><h1 class="mt-8">Trädfällning i Skärgården</h1>
                    <p class="mb-10">Trädfällning Gräskö AB utför trädfällning och trädgårdsskötsel i norra Skärgården.  Vi arbetar främst i Roslagen på öar såsom Blidö , Yxlan, Gräskö samt i Norrtälje.
                        Vi innehar motorsågskörkort samt är registrerade för F-skatt och har ansvarsförsäkring.
                        Vi erbjuder alltid en kostnadsfri offert på arbetet. Man kan söka RUT-avdrag vid arbete på egen tom som kan uppgå till 50% på arbetet.</p>
                    <p class="text-center text-sm tablet:text-lg"> <a href="tel:0724449040"> <button class="bg-gray-100 border-green-900 border-2 rounded-lg px-8 py-4 text-2xl text-green-900 font-bold"><span class="fas fa-phone fa-1x " style="padding-left:5px; padding-right:5px;"></span><span class="text-xs tablet:text-lg desktop:text-2xl" >072-444 90 40 </span></button></a></p></article>
            </div>

        </div>
        <article class="flex flex-wrap prose prose-a:text-green-900 max-w-none mt-10">
            <div class="tablet:w-full pr-4 pl-4  text-center">
                <p class="m-1 ">
                    Här kan du läsa mer om våra tjänster <a "  href="/pages/tradfallning">trädfällning</a>
                    och <a  href="/pages/stubbfrasning"> stubbfräsning </a> och vad det kostar.
                </p>
                <p class="m-0">Våra tjänster: Trädfällning | Röjning av sly&gräs | Stubbfräsning | Flismaskin | Borttagning av vass </p>
            </div>
        </article>
    </div>
@endsection
