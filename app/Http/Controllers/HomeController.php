<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Log;

    class HomeController extends Controller {
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct() {

//            $this->middleware('auth');
        }

        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
         */
        public function index() {

            $title = "Trädfällning Gräskö AB | Trädfällning & Stubbfräsning";
            $description = "Trädfällning Gräskö AB verkar i Roslagen och norra skärgården. Vi utför trädfällning, flisning, stubbfräsning
,röjning i skog och trimmning av trädgårdar.";
            $keywords = "Trädfällning, stubbfräsning, skärgården, Norrtälje, Roslagen";
            Log::warning("Somebody logged in");
            $data = ['title'=>$title,'description'=>$description, 'keywords'=>$keywords];
            return view('pages.home', $data);
        }
    }
