<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class PageController extends Controller {
        //

        public function __construct() {}

        public function tradfallning() {
            $title = "Trädfällning i norra skärgården och Norrtälje";
            $description = "Vi utför trädfällning både på tomter och i skogsområden.
			Sättet vi trädfäller på anpassas alltid efter situationen och platsens förutsättningar. Arbetet utförs alltid med högsta säkerhet men på ett effektivt sätt.
			Vi utför även precisionsfällning där speciella redskap och tekniker används.";
            $keywords = "Trädfällning, Sektions trädfällning, Avancerad Trädfällning, Trädfällning Skärgården, Trädfällning Blidö, Trädfällning Yxlan";
            return view('pages.tradfallning', ['title'=>$title, 'description'=> $description, 'keywords'=>$keywords ]);
        }

        public function rojning() {
            $title = "Röjning med röjsåg i norra skärgården och Norrtälje";
            $description = "Vill du röja undan ungskog, högtgräs,
            sly eller vass så fixar vi det. Vi använder röjsåg som är en maskin som underlättar att hålla efter dina grönytor och öppna upp din mark.
            Vi kan även direkt flisa upp ditt ris så att du blir av med det. ";
            $keywords = "Röjsåg, Röjning vass, Röjsåg sly, Slyröjning, Gräsklippning";
            return view('pages.rojning', ['title'=>$title, 'description'=> $description, 'keywords'=>$keywords ]);
        }
        public function kontakt() {
            $title = "Kontakt - tag kontakt med oss här";
            $description = "Kontaktsida med formulär för att skicka meddelande till Trädfällning Gräskö AB ";
            $keywords = "Kontakta, Gräskö, Trädfällning";
            return view('pages.kontakt', ['title'=>$title, 'description'=> $description, 'keywords'=>$keywords ]);
        }
        public function fragor() {
            $title = "Svar på dina frågor om trädfällning";
            $description = "Här svarar vi på vanliga frågor gällande trädfällning";
            $keywords = "Frågor, vägledning, guider";
            return view('pages.fragor', ['title'=>$title, 'description'=> $description, 'keywords'=>$keywords ]);
        }
        public function omoss() {
            $title = "Om oss - information om Trädfällning Gräskö AB";
            $description = "Vi verkar i roslagen och norra skärgården. Bland annat på öar såsom Blidö,Gräskö och Norröra m.fl. Vi har försäkring och oftast gäller RUT-avdrag på värt arbete.";
            $keywords = "om oss,Information om Trädfällning Gräskö AB";
            return view('pages.omoss', ['title'=>$title, 'description'=> $description, 'keywords'=>$keywords ]);
        }
    }
