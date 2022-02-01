@extends("layouts.layout")
@section("content")
<div class = "tailcontainer prose max-w-screen-desktop ">
    <article>
        <div class = "flex flex-wrap">
            <div class = "w-7/12 ">
                <h1 class="mb-2">Om oss</h1>

                <h2 class = "my-1">Trädfällning Gräskö AB - ett trädfällningsföretag</h2>
                <p>
                    Företaget startades för att ge kunder i norra skärgården, roslagen och Norrtälje trakten hjälp med att
                    fälla träd på ett säkert och korrekt sätt.
                    Att själv fälla träd kan vara farligt och orsaka skador varför vår ambition är att med rätt verktyg och
                    hjälpmedel som
                    man normalt själv inte har hemma ge en proffesionell service åt våra kunder. Vi har även adekvat
                    utbildning genomförd hos <a href = "https://sakerskog.se/">Säker Skog.</a>
                </p>
                <h3 class ="my-1">Bra att veta om företaget</h3>
                <ul class = "list-unstyled ">
                    <li class="flex items-center align-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m9 12 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/>
                        </svg>
                        <p class="ml-1">Verkar i norra skärgården</p>

                    </li>
                    <i> <small>&nbsp; Blidö, Gräskö, Norröra, Söderöra, Svartlöga och
                            <a href = "/pages/tradfallning-norrtalje.php">Norrtälje</a></small></i>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m9 12 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/>
                        </svg>
                        <p class="ml-1">RUT-avdrag</p>
                    </li>
                    <i><small>RUT-avdraget gäller för arbeten på din tomt.</small></i>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m9 12 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/>
                        </svg>
                        <p class="ml-1">Har försäkring</p>
                    </li>
                    <i><small>Självklart är vi försäkrade så att du kan känna dig trygg.</small></i>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m9 12 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/>
                        </svg>
                        <p class="ml-1">Innehar F-skatt</p>
                    </li>
                    <!--				<li>- Organisationsnummer xxxxxx-xxxx</li>-->
                </ul>
                <h3 class ="my-1">Genomförande</h3>
                <p>Vi tar hand om hela planeringen och ser till att minimera risker för att några skador
                    aldrig uppstår varken på människor eller byggnader.
                    Vi kan även hjälpa till med att ta hand om rester och såga upp det i vedkubbslängder för
                    enkelt omhändertagande.
                    Möjlighet finns även till att göra flis av grenar och stammar som du kan använda i din
                    trädgård.
                    Efter att trädet är fällt har vi stubbfräs som enkelt tar bort irriterande stubbar.
                    Vi hjälper även till med röjningsarbeten på tomter med röjsåg eller trimmer.
                    Med våra kraftiga röjsågar kan vi även enkelt ta bort vass eller buskar som står i vägen
                    för din utsikt.
                    Vi ser fram emot att kunna hjälpa dig med!</p>
                <h3>Vår miljöpolicy</h3>
                <p>
                    När vi köper in verktyg eller material ska miljöaspekten finnas med. Miljövänliga alternativ ska alltid
                    väljas i första hand.
                    Vi driver våra redskap med miljövänlig bensin (Aspen) om det alternativet finns.
                    Alla våra utrangerade verktyg och maskiner lämnas till behörig återvinningsstation i Norrtälje.
                </p>


            </div>
            <div class = "block mx-auto mt-4 p-0 overflow-hidden shadow">
                <img class = "rounded-3xl" src = "/images/frontpage_image_stihl.webp" alt = "man med motorsåg"
                     width = "300">
            </div>
        </div>
    </article>

</div>
@stop
