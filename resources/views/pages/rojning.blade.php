@extends('layouts.app')
@section('content')
<div class = "container mx-auto sm:px4 my-5">
    <div class = "flex flex-wrap  p-6 pb-0 lg:pe-0 lg:pt-12  rounded-3 border shadow-lg">
        <div class = "lg:w-4/5 pr-4 pl-4 p-6 lg:p-12 lg:pt-4">
            <h1 class = "text-3xl font-bold leading-tight text-gray-900 ">Röjning med röjsåg</h1>
            <p class = "text-xl font-light">Vill du röja undan ogräs, sly eller björkris så fixar vi det. Vi använder röjsåg som är en
                maskin som underlättar att hålla efter
                dina grönytor och öppna upp din mark. Vi kan även direkt flisa upp ditt ris så att du blir
                av med det.</p>
            <p class="text-lg font-light font-bold"> Röjning av träd,högt gräs eller vass</p>
            <p class = "text-lg font-light">
                Unga träd, sly,gräs och vass växer upp snabbare än man tror, så det är en god regel att hålla efter med jämna mellanrum.
                Du kan själv numera enkelt köpa en röjsåg som klarar en hel del, men det är ett ganska tungt jobb
                speciellt om man inte kan knepen för att underlätta arbetet.
                Ofta vill man börja längst in i röjningsområdet och arbeta sig utåt, tillbaka. Då blir det färre
                tillfällen då du måste gå igenom det fält där arbetet redan är utfört.
                Det är bra eftersom det är mycket jobbigare att hela tiden ta sig igenom mark som redan är röjd.
            </p>
            <p class = "text-lg font-light">Om du har många ungträd som behöver röjas med röjsåg så är en god regel att lämna runt två
                meter mellan stammarna. Det ger bättre förutsättning för att dimensionsutvecklingen på
                stammarna inte hämmas. Om det man ska röja mest består av lövträd är det absolut bäst att röja den tiden på året
                som löven slår ut. Man ser enklast vad som är lämpligt att lämna kvar då och risken för stubbskott i
                lövstubbarna blir lägre.
            </p>
            <p class = "text-lg font-light">För att få en så effektiv röjning som möjligt är det viktigt att även slipa röjklingan med
                jämna mellanrum. Ett bra tumregel kan vara att slipa klingan vid varje tankning.
                Då går det relativt fort och du får en effektiv röjsåg genom hela ditt arbete.

                Snåla inte heller när du skall köpa en röjsåg, det får du betala med senare i så fall.
                Röjningsarbete kan både vara tungt och farligt och att ha bra arbetsredskap minimerar
                risker och gör arbetet enklare.
                Även om du nu har rätt utrustning tänk på att sätta mål som går att genomföra. En
                proffesionell röjsågare klarar cirka en hektar om dagen. Om du har vana och är duktig
                räkna med att klara av ca hälften av detta.
                Om du trots allt känner att du behöver hjälp, tveka inte att kontakta oss så kommer vi och
                ger en gratisk offert.</p>
            <div class = "d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <form method = "POST" action = "/pages/kontakt.php">
                    <input type = "submit" class = "btn btn-success btn-lg px-4 me-md-2 fw-bold" value = "Förfrågan"/>
                </form>

                <!--				<button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>-->
            </div>
        </div>

        <div class = "flex md:w-2/5  rounded-2xl overflow-hidden shadow-lg">
            <img class = "rounded-lg-3" src = "/images/rojsag.webp" alt = "man som röjer med en röjsåg" >
        </div>
    </div>

</div>
@stop
