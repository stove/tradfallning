@extends('layouts.layout')
@section('content')
    <div class = "tailcontainer prose max-w-screen-desktop ">
        <article>
                    <h1>Vanliga frågor</h1>
                    <!--			Que and answ start-->
                    <div itemscope = "" itemtype = "https://schema.org/FAQPage">
                        <div class = "flex flex-wrap  ">
                            <!-- Fråga 2 -->
                            <div itemscope itemprop = "mainEntity" itemtype = "https://schema.org/Question">
                                <h2 class="mt-0" itemprop = "name">När skall jag fälla ett träd?</h2>
                                <div itemscope itemprop = "acceptedAnswer" itemtype = "https://schema.org/Answer">
                                    <div itemprop = "text">
                                        <p>
                                        <ol type = "1">
                                            <li>Trädet är döende eller har dött.</li>
                                            <li> Skador på trädet efter storm, och det finns risk att det ramlar av sig
                                                självt.
                                            </li>
                                            <li>Trädet är nära placerat ett hus och det finns risk för skador om det
                                                ramlar.
                                            </li>
                                            <li>Tecken på sjukdomar eller stora insektsangrepp.</li>
                                            <li> Trädet kommer stå ivägen vid planerad nybyggnation.
                                            </li>
                                        </ol>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- slut fråga 2 -->
                        </div>
                        <div id = "falla_sjalv"
                             class = "flex flex-wrap pb-0  align-items-center">
                            <!-- Fråga 3 -->
                            <div itemscope itemprop = "mainEntity" itemtype = "https://schema.org/Question">

                                <h2 class="mt-1" itemprop = "name">Kan jag själv fälla mitt träd?</h2>

                                <div itemscope itemprop = "acceptedAnswer" itemtype = "https://schema.org/Answer">

                                    <div itemprop = "text">
                                        <p>
                                            Trädfällning är i många fall en svår uppgift som kräver kunskap och träning.
                                            Här är lite vägledning till dig som själv tänker fälla ditt träd. Om du är det
                                            minsta osäker, avstå!
                                            I de flesta fallen är det bäst att anlita professionell hjälp. Om du ändå skall göra
                                            det, läs denna information först.
                                        </p>
                                        <h3>
                                            1. Se till att ha rätt utrustning
                                        </h3>
                                        <p>Du måste ha rätt utrustning för att genomföra en säker och lyckad fällning. Det du
                                            minst behöver är följande!</p>
                                        <p>
                                        <ul class="list-none p-0 m-0 leading-6 border-0">
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Sågskyddsbyxor</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Hjälm med skydd mot flisstänk</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Stövlar med sågskydd</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Handskar med sågskydd</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Motorsåg med kastskydd</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Kilar</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Yxa</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Mobiltelefon</li>
                                        </ul>
                                        </p>

                                        <h3>
                                            2. Förberedelser inför arbetet
                                        </h3>
                                        <ul class="list-none p-0 m-0 leading-6 border-0">
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span><span class="font-bold">Bestäm fällriktning</span> - du måste bestämma
                                                dig för vilken
                                                fällriktning du vill
                                                ha på trädet. Det
                                                vill säga åt vilket
                                                håll
                                                trädet skall falla.
                                                Man måste ta hänsyn
                                                till vindriktning,
                                                vindstyrka samt
                                                trädets naturliga
                                                lutning.
                                            </li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span><span class = "font-bold">Utse din reträttväg</span> - om något går galet
                                                måste du snabbt
                                                kunna flytta dig.
                                                Reträttvägen bör
                                                vara snett bakåt i
                                                båda
                                                riktningarna från
                                                trädet.
                                                Röj ordentligt så
                                                att du har fri väg.
                                            </li>
                                        </ul>
                                        <h3>
                                            3. Trädfällningen
                                        </h3>
                                        <ul class="list-none p-0 m-0 leading-6 border-0">
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span>Du skall vara väl förtrogen med din motorsåg och väl känna till hur man fäller
                                                med metoden "säkert hörn".
                                            </li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span>Här kan du läsa mer om hur detta går till på <a
                                                    href = "https://sakerskog.se/praktika-info/arbetsteknik-och-utrustning/saker-tradfallning/">Säker
                                                    Skog</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class = "flex flex-wrap pb-0  align-items-center">
                            <!-- Fråga 1 -->
                            <div itemscope itemprop = "mainEntity" itemtype = "https://schema.org/Question">

                                <h3 class="mt-1" itemprop = "name">Vad gäller för RUT-avdrag?</h3>

                                <div itemscope itemprop = "acceptedAnswer" itemtype = "https://schema.org/Answer">

                                    <div itemprop = "text">

                                        <p> Generellt gäller att RUT-avdraget utgör 50% av arbetskostnaden till ett maxbelopp av
                                            50 000kr/år.
                                            Arbetet måste ske i ansluting till din bostad eller på tomten som hör till bostaden.
                                            Här kan du läsa mer om villkoren för
                                            <a target = "_blank" href = "https://www.skatteverket.se/privat/fastigheterochbostad/rotochrutarbete/villkorforattfarutavdrag.4.3810a01c150939e893f2b9d.html">RUT-avdrag</a>
                                            hos skatteverket.

                                        </p>
                                        <p>De tjänster som vi utför och som berörs av RUT-avdrag är följande:
                                        <ul class="list-none p-0 m-0 leading-6 border-0">
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span>Trädfällning</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span>Flistuggning</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Stubbfräsning</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Röjning av sly, gäller även vass</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Gräsklippning</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Beskärning av träd</li>
                                            <li class="box-border relative py-1 pl-0 text-left" > <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-green-700 rounded-full"><span class="text-sm font-bold">✓</span></span> Beskärning eller klippning av buskar och träd</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   {{-- <div class = "d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3 pt-5">
                        <form method = "POST" action = "/kontakt">
                            <input type = "submit" class = "bg-green-900 text-white hover:bg-green-600 py-3 px-4 leading-tight text-xl px-4 md:me-2 fw-bold" value = "Trädfällning Gräskö AB 072-444 90 40"/>
                        </form>--}}

                        <!--				<button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>-->

        </article>
    </div>
@stop




