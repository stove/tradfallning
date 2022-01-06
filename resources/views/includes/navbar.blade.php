

    <nav class="bg-green-700 shadow rounded-2xl">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-around">
                <div class="flex space-x-7 mr-4">
                    <!--Website Logo-->
                    <a href="/home" class="flex items-center py-2 px-2">
                        {{--                                    <img src="/images/logo_blad.png" alt="Logo" class="h-8 w-8 mr-2">--}}
                        <span class="font-semibold text-white text-lg hover:text-green-300">
                                       Start
                        </span>
                    </a>
                </div>
                <div class="font-sans hidden md:flex items-center space-x-8 justify-between">
                    <a href="/tradfallning"
                       class="py-2 px-2 text-white  font-semibold hover:text-green-300">
                        Trädfällning
                    </a>
                    <a href="/rojning"
                       class="py-2 px-2 text-white font-semibold hover:text-green-300 transition duration-300">
                        Röjning
                    </a>
                    <a href="/kontakt"
                       class="py-2 px-2 text-white font-semibold hover:text-green-300 transition duration-300">
                        Kontakt
                    </a>
                    <a href="/fragor"
                       class="py-2 px-2 text-white font-semibold hover:text-green-300 transition duration-300">
                        Vanliga frågor
                    </a> <a href="/blog"
                            class="py-2 px-2 text-white font-semibold hover:text-green-300 transition duration-300">
                        Blogg
                    </a> <a href="/omoss"
                            class="py-2 px-2 text-white font-semibold hover:text-green-300 transition duration-300">
                        Om oss
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="outline-none menu-button">
                        <svg class="w-6 h-6 text-white" x-show="! showMenu" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 00 24 24" stroke="currentColor">
                            <path d="m4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden mobile-menu">
                    <ul class="text-white">
                        <li>
                            <a href="/tradfallning"
                               class="block text-sm px-2 py-4 hover:bg-green-300 font-semibold">
                                Trädfällning
                            </a>
                        </li>
                        <li>
                            <a href="/stubbfrasning"
                               class="block.text-sm.px-2.py-4 hover:bg-green-300 transition duration-300">
                                Stubbfräsning
                            </a>
                        </ltext
                        <li>
                            <a href="/rojning"
                               class="block.text-sm.px-2.py-4 hover:bg-green-300 transition duration-300">
                                Röjning
                            </a>
                        </li>
                        <li>
                            <a href="/kontakt"
                               class="block.text-sm.px-2.py-4 hover:bg-green-300 transition duration-300">
                                Kontakt
                            </a></li>
                        <li>
                            <a href="/fragor"
                               class="block.text-sm.px-2.py-4 hover:bg-green-300 transition duration-300">
                                Vanliga frågor
                            </a>
                        </li>
                        <li>
                            <a href="/omoss"
                               class="block.text-sm.px-2.py-4 hover:bg-green-300 transition duration-300">
                                Om oss
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <script>
        const btn = document.querySelector('button.menu-button');
        const menu = document.querySelector(".mobile-menu");
        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        })
    </script>

