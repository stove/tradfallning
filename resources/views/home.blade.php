@extends('layouts.app')

@section('content')
<main class="sm:container mx-auto sm:px-4 sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header>
                <div class="flex flex-wrap ">
                    <div class="md:w-1/6 pr-4 pl-4 pt-4 pr-0 sm:mr-6">
                        <img src="../img/logo_blad.webp" height="66" width="75" alt="logo treeleaf">
                    </div>
                    <div class="md:w-1/2 pr-4 pl-4 pt-4 pl-0">
                        <H2 class="text-left pt-2"> Trädfällning Gräskö AB</H2>
                        <p>Trädfällning i Roslagen och norra skärgården</p>
                    </div>

                    <div id="button_split_row" class="md:w-1/3 pr-4 pl-4 pt-5">
                        <p class="text-xl font-light font-bold">
                            <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline bg-green-500 text-white hover:bg-green-600 py-3 px-4 leading-tight text-xl " href="tel:0724449040" style=" border-radius: 15px;">
                                <span class="fas fa-phone" style="padding-left:5px; padding-right:5px;"></span>072-444 90 40

                            </a></p>
                    </div>
                </div>
               {{--navbar   --}}
            <!--START navbar-->
                <div class="flex flex-wrap ">
                    <div class="md:w-full pr-4 pl-4 pt-1 pb-2">
                        <nav class="relative flex flex-wrap items-center content-between py-3 px-4  bg-gray-900 text-white py-0 ">
                            <a class="inline-block pt-1 pb-1 mr-4 text-lg whitespace-no-wrap" href="../index.php">Start</a>
                            <!-- Toggler/collapsibe Button -->
                            <button class="py-1 px-2 text-md leading-normal bg-transparent border border-transparent rounded" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="px-5 py-1 border border-gray-600 rounded"></span>
                            </button>
                            <div id="collapsibleNavbar" class="hidden flex-grow items-center">
                                <ul class="flex flex-wrap list-none pl-0 mb-0 ">

                                    <li class="">
                                        <a class="inline-block py-2 px-4 no-underline text-white" href="../pages/tradfallning.php">Trädfällning</a>
                                    </li>
                                    <li class="">
                                        <a class="inline-block py-2 px-4 no-underline text-white" href="../pages/stubbfrasning.php">Stubbfräsning</a>
                                    </li>
                                    <li class="">
                                        <a class="inline-block py-2 px-4 no-underline text-white " href="../pages/rojning.php">Röjning</a>
                                    </li>
                                    <!-- <li class="">
                                         <a class="inline-block py-2 px-4 no-underline text-white" href="/pages/offert.php">Begär offert</a>
                                     </li>-->
                                    <li class="">
                                        <a class="inline-block py-2 px-4 no-underline text-white" href="../pages/kontakt.php">Kontakt</a>
                                    </li>
                                    <li class="">
                                        <a class="inline-block py-2 px-4 no-underline text-white" href="../pages/fragor.php">Vanliga frågor</a>
                                    </li>
                                    <li class="">
                                        <a class="inline-block py-2 px-4 no-underline text-white" href="../blog/index.php">Blogg</a>
                                    </li>
                                    <li class="">
                                        <a class="inline-block py-2 px-4 no-underline text-white" href="../pages/om.php">Om oss</a>
                                    </li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!--END navbar-->


            </header>

            <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in!
                </p>
            </div>

        </section>
    </div>
</main>
@endsection
