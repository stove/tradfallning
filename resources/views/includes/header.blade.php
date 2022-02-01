<header >
    <div class="block tablet:flex tablet:mt-10">
        <div class="basis-1/12 mx-6">
                <img src="/images/logo_blad.png" height="100" width="75" alt="logo treeleaf">
                {{--            <H2 class= "lg:text-4xl text-left text-black pt-5  "> Trädfällning Gräskö AB</H2>--}}
                {{--            <p class="text-base font-semibold">Trädfällning | Röjning | Stubbfräsning</p>--}}
        </div>
        <div class="basis-6/12 prose prose-lg tablet:prose-xl">
            <H2 class="mb-2" > Trädfällning Gräskö AB</H2>
            <p class="mb-2">Trädfällning | Röjning | Stubbfräsning</p>
        </div>

        <div class="block tablet:flex tablet:basis-5/12 tablet:items-end tablet:justify-center">
            <p class="block tablet:items-center tablet:justify-center"><a href="tel:0724449040">
                    <span class="fas fa-phone fa-1x " style="padding-left:5px; padding-right:5px;"></span>
                    <span class="text-xl text-green-900 font-semibold font-sans">072-444 90 40</span>
                </a>
               </p>
        </div>
    </div>
{{--   NEW DIV WITH NAVBAR AND CLASS OF FLEX --}}
<!-- Navbar goes here -->
    <div class="flex justify-end" x-data="{ open: false}">
        <!-- Desktop nav menu -->
        <nav class="grow justify-around hidden tablet:flex bg-green-900 rounded-lg text-white">
            <x-nav-link route="home">Start</x-nav-link>
            <x-nav-link route="tradfallning">Trädfällning</x-nav-link>
            <x-nav-link route="stubbfrasning">Stubbfräsning</x-nav-link>
            <x-nav-link route="rojning">Röjning</x-nav-link>
            <x-nav-link route="kontakt">Kontakt</x-nav-link>
            <x-nav-link route="fragor">Vanliga frågor</x-nav-link>
            <x-nav-link route="omoss">Om oss</x-nav-link>
        </nav>
       <div class="flex justify-items-end">
           <!-- Mobile Nav Menu -->
           <nav x-show="open" class=" mt-1">
               <x-mobile-nav-link route="home">Start</x-mobile-nav-link>
               <x-mobile-nav-link route="tradfallning">Trädfällning</x-mobile-nav-link>
               <x-mobile-nav-link route="stubbfrasning">Stubfräsning</x-mobile-nav-link>
               <x-mobile-nav-link route="rojning">Röjning</x-mobile-nav-link>
               <x-mobile-nav-link route="kontakt">Kontakt</x-mobile-nav-link>
               <x-mobile-nav-link route="fragor">Vanliga frågor</x-mobile-nav-link>
               <x-mobile-nav-link route="omoss">Om oss</x-mobile-nav-link>
           </nav>
           {{-- Mobile Menu Toggle Buttons --}}
           <div class=" mx-2 pt-2 tablet:hidden">
               <button @click="open = !open">
                   {{-- Hamburger Icon --}}
                   <svg x-show="!open" viewBox="0 0 20 20" width="30">
                       <g stroke="none"
                          stroke-width="1"
                          fill="none"
                          fill-rule="evenodd"
                       >
                           <g fill="black">
                               <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"></path>
                           </g>
                       </g>
                   </svg>

                   {{-- Close Icon --}}
                   <svg x-show="open" viewBox="0 0 20 20" width="30">
                       <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                           <g fill="black">
                               <polygon id="Combined-Shape" points="10 8.58578644 2.92893219 1.51471863 1.51471863 2.92893219 8.58578644 10 1.51471863 17.0710678 2.92893219 18.4852814 10 11.4142136 17.0710678 18.4852814 18.4852814 17.0710678 11.4142136 10 18.4852814 2.92893219 17.0710678 1.51471863 10 8.58578644"></polygon>
                           </g>
                       </g>
                   </svg>
               </button>
           </div>
       </div>

    </div>

</header>
