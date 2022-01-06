@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header>
                <div class="row">
                    <div class="col-md-1 pt-4 pr-0 mr-sm-4">
                        <img src="../img/logo_blad.webp" height="66" width="75" alt="logo treeleaf">
                    </div>
                    <div class="col-md-6 pt-4 pl-0">
                        <H2 class="text-left pt-2"> Trädfällning Gräskö AB</H2>
                        <p>Trädfällning i Roslagen och norra skärgården</p>
                    </div>

                    <div id="button_split_row" class="col-md-4 pt-5">
                        <p class="lead font-weight-bold">
                            <a class="btn btn-success btn-lg " href="tel:0724449040" style=" border-radius: 15px;">
                                <span class="fas fa-phone" style="padding-left:5px; padding-right:5px;"></span>072-444 90 40

                            </a></p>
                    </div>
                </div>
               {{--navbar   --}}
            <!--START navbar-->
                <div class="row">
                    <div class="col-md-12 pt-1 pb-2">
                        <nav class="navbar navbar-expand-md bg-dark navbar-dark py-0 ">
                            <a class="navbar-brand" href="../index.php">Start</a>
                            <!-- Toggler/collapsibe Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="collapsibleNavbar" class="collapse navbar-collapse">
                                <ul class="nav nav-pills">

                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="../pages/tradfallning.php">Trädfällning</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="../pages/stubbfrasning.php">Stubbfräsning</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white " href="../pages/rojning.php">Röjning</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                         <a class="nav-link text-white" href="/pages/offert.php">Begär offert</a>
                                     </li>-->
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="../pages/kontakt.php">Kontakt</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="../pages/fragor.php">Vanliga frågor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="../blog/index.php">Blogg</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="../pages/om.php">Om oss</a>
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
