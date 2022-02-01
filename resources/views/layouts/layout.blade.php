<!doctype html>
<html lang="sv">
@include('includes.head')
<body class="{{ config('app.debug') == true ? 'debug-screens' : "" }} bg-gray-100 flex  h-screen justify-between">
<div class="tailcontainer mx-4 min-h-screen tablet:mx-6 desktop:mx-auto">
{{--    <div class="flex flex-col tailcontainer mx-auto md:mx-4 lg:mx-6 xl:mx-8 justify-between min-h-screen">--}}
    <section>
        @include('includes.header')
    </section>
    <section class="pt-10 pl-4">
       @yield('content')
    </section>
    <section>
        @include('includes.footer')
    </section>
</div>
</body>
</html>
