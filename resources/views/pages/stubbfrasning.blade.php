@extends('layouts.layout')
@section('content')
    <div class = "tailcontainer prose max-w-screen-desktop">
        <div class = "flex">
            <article class="basis-2/3 ">
                <h1>Stubbfräsning</h1>
                <p>Stubbfräsning är oftast det effektivaste sättet att bli av med en stubbe. Vi hjälper dig
                    ta bort enstaka eller hundratals stubbar.
                    Det ger den minsta åverkan på din mark och fliset som blir kvar kan du använda som
                    marktäckare i rabatter och buskage,
                    det är dessutom ogräshämmande. Tjänsten stubbfräsning, är även RUT-avdragsberättigad.
                </p>
                <h2>Stubbfräsning - pris</h2>
                <p>
                    Här nedan kan du se priser på stubbräsning. Normalstorlek på en stubbe ligger på mellan 50-60 cm.
                    Generellt kan det vara svårt att beräkna kostnaden exakt för utfört arbete med nedan ser du vilken
                    tariff som vi utgår ifrån.
                    Ibland finns även besvärliga rotsystem runt stubben som kräver lite mer arbete och det är en kostnad som
                    kan tillkomma. Det går vi dock
                    alltid igenom noga innan vi påbörjar vårt arbete.
                    Här kan du läsa om vad som gäller för att använda <a href = "../pages/fragor.php"> RUT-avdrag för
                        stubbfräsning. </a>
                </p>
                <table class = "not-prose table-auto shadow-lg border-solid border-2 border-black">
                    <thead class=" border-2 border-black">
                    <tr>
                        <th class="text-center" scope = "col">#</th>
                        <th scope = "col">Storlek på stubbe</th>
                        <th scope = "col">Pris</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class=" border-2 border-black">
                        <th class="border-2 border-black bg-green-200 border text-left px-8 py-4 text-center" scope = "row">1</th>
                        <td class="border-2 border-black bg-green-200 border text-left px-8 py-4">Stubbe som mäter upp till 70 cm mätt i marknivå</td>
                        <td class="border-2 border-black bg-green-200 border text-left px-8 py-4">Från 600 kr med RUT-avdrag</td>

                    </tr>
                    <tr class=" border-2 border-black">
                        <th class="border-2 border-black bg-green-200 border text-left px-8 py-4 text-center" scope = "row">2</th>
                        <td class="border-2 border-black bg-green-200 border-black  text-left px-8 py-4"> Stubbe 70-120 cm i marknivå</td>
                        <td class="border-2 border-black bg-green-200 border text-left px-8 py-4">Tillkommer 120 kr per dm med RUT-avdrag</td>

                    </tr>
                    <tr class=" border-2 border-black">
                        <th class="border-2 border-black bg-green-200 border text-left px-8 py-4 text-center" scope = "row">3</th>
                        <td class="border-2 border-black bg-green-200 border text-left px-8 py-4">Stubbe större än 120 cm i marknivå</td>
                        <td class="border-2 border-black bg-green-200 border text-left px-8 py-4">Begär offert</td>
                    </tr>
                    </tbody>
                </table>

                <p>En stubbfräs avlägsnar stubbar genom att flytta ett skärblad i svepande rörelser fram och
                    tillbaka. Det är kraftiga tänder som är tillverkade
                    i volframkarbid som slipar ner stubben för varje svepande rörelse med upp till 2,5 cm per
                    gång. Maskinen går enkelt att förflytta genom stabila handtag mellan stubbar i samma
                    område.
                   <p> Kellfri stubbfräs används för att avlägsna stubbar genom att flytta bladet i en svepande
                    rörelse i sidled.
                    Det går även att hyra stubbfräsar men se till att du är väl förtrogen med hur man arbetar
                    med ett sådant redskap då det annars kan vara ett riskfyllt arbete.
                    Om man gör fel kan maskinen slå mot stubben och orsaka skador på maskinföraren.</p>
                </p>
            </article>
            <div class="basis-1/3 pt-10">
                <img width = "300" class = "rounded-3xl" src = "/images/stubbfras.webp" alt = "man med motorsåg"
                     >
            </div>
        </div>

{{--        <div class = "col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">--}}
{{--            <img class = "rounded-lg-3" src = "../img/stubbfras.webp" alt = "subbfräs som fräser bort en stubbe"--}}
{{--                 width = "360">--}}
{{--        </div>--}}
    </div>
@stop
