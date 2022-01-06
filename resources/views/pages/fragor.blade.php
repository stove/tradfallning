@extends('layouts.app')
@section('content')
    <div class = "container my-5">
        <div class = "flex flex-wrap p-4 pb-0 pe-lg-0 pt-5 align-items-center rounded-3xl border border-cool-gray-100 shadow-lg">
            <div class = "md:w-7/12  p-lg-5 pt-4">
                <h1 class = "font-bold text-4xl lh-1">Vanliga frågor</h1>
                <!--			Que and answ start-->
                <div itemscope = "" itemtype = "https://schema.org/FAQPage">
                    <div class = "flex flex-wrap p-4 pb-0  align-items-center rounded-3 border shadow-lg">
                        <!-- Fråga 2 -->
                        <div itemscope itemprop = "mainEntity" itemtype = "https://schema.org/Question">

                            <h3 itemprop = "name">När skall jag fälla ett träd?</h3>

                            <div itemscope itemprop = "acceptedAnswer" itemtype = "https://schema.org/Answer">
                                <div itemprop = "text">
                                    <p>
                                    <ol class="text-lg font-light" type = "1">
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
                         class = "flex flex-wrap p-4 pb-0  align-items-center rounded-3 border shadow-lg">
                        <!-- Fråga 3 -->
                        <div itemscope itemprop = "mainEntity" itemtype = "https://schema.org/Question">

                            <h3 itemprop = "name">Kan jag själv fälla mitt träd?</h3>

                            <div itemscope itemprop = "acceptedAnswer" itemtype = "https://schema.org/Answer">

                                <div itemprop = "text">
                                    <p>
                                        Trädfällning är i många fall en svår uppgift som kräver kunskap och träning.
                                        Här är lite vägledning till dig som själv tänker fälla ditt träd. Om du är det
                                        minsta osäker, avstå!
                                        I de flesta fallen är det bäst att anlita professionell hjälp. Om du ändå skall göra
                                        det, läs denna information först.
                                    </p>
                                    <p class = "text-lg font-light">
                                        1. Se till att ha rätt utrustning
                                    </p>
                                    <p>Du måste ha rätt utrustning för att genomföra en säker och lyckad fällning. Det du
                                        minst behöver är följande!</p>
                                    <p>
                                    <ul class="text-lg font-light">
                                        <li> Sågskyddsbyxor</li>
                                        <li> Hjälm med skydd mot flisstänk</li>
                                        <li> Stövlar med sågskydd</li>
                                        <li> Handskar med sågskydd</li>
                                        <li> Motorsåg med kastskydd</li>
                                        <li> Kilar</li>
                                        <li> Yxa</li>
                                        <li> Mobiltelefon</li>
                                    </ul>
                                    </p>

                                    <p class = "text-lg font-light">
                                        2. Förberedelser inför arbetet
                                    </p>

                                    <ul class="text-lg font-light">
                                        <li><span class = "font-bold">Bestäm fällriktning</span> - du måste bestämma
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
                                        <li><span class = "font-bold">Utse din reträttväg</span> - om något går galet
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
                                    <p class = "text-lg font-light">
                                        3. Trädfällningen
                                    </p>
                                    <ul class="text-lg font-light">
                                        <li>Du skall vara väl förtrogen med din motorsåg och väl känna till hur man fäller
                                            med metoden "säkert hörn".
                                        </li>
                                        <li>Här kan du läsa mer om hur detta går till på <a
                                                href = "https://sakerskog.se/praktika-info/arbetsteknik-och-utrustning/saker-tradfallning/">Säker
                                                Skog</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "flex flex-wrap p-4 pb-0  align-items-center rounded-3 border shadow-lg">
                        <!-- Fråga 1 -->
                        <div itemscope itemprop = "mainEntity" itemtype = "https://schema.org/Question">

                            <h3 itemprop = "name">Vad gäller för RUT-avdrag?</h3>

                            <div itemscope itemprop = "acceptedAnswer" itemtype = "https://schema.org/Answer">

                                <div itemprop = "text">

                                    <p> Generellt gäller att RUT-avdraget utgör 50% av arbetskostnaden till ett maxbelopp av
                                        50 000kr/år.
                                        Arbetet måste ske i ansluting till din bostad eller på tomten som hör till bostaden.
                                        Här kan du läsa mer om villkoren för <a target = "_blank"
                                                                                href = "https://www.skatteverket.se/privat/fastigheterochbostad/rotochrutarbete/villkorforattfarutavdrag.4.3810a01c150939e893f2b9d.html">RUT-avdrag</a>
                                        hos skatteverket.

                                    </p>
                                    <p>De tjänster som vi utför och som berörs av RUT-avdrag är följande:
                                    <ul>
                                        <li>Trädfällning</li>
                                        <li>Flistuggning</li>
                                        <li> Stubbfräsning</li>
                                        <li> Röjning av sly, gäller även vass</li>
                                        <li> Gräsklippning</li>
                                        <li> Beskärning av träd</li>
                                        <li> Beskärning eller klippning av buskar och träd</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3 pt-5">
                    <form method = "POST" action = "/kontakt">
                        <input type = "submit" class = "bg-green-500 text-white hover:bg-green-600 py-3 px-4 leading-tight text-xl px-4 md:me-2 fw-bold" value = "Kontakt"/>
                    </form>

                    <!--				<button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>-->
                </div>
            </div>
        </div>
    </div>
@stop




