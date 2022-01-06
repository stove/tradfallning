<!doctype html>
<html class="font-spartan" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
<body class="{{ config('app.debug') == true ? 'debug-screens' : "" }} bg-gray-100 h-screen antialiased leading-none font-normal leading-relaxed text-gray-800 font-base">
<div id="app">
    <main class="sm:container mx-auto sm:px-4 sm:mx-auto sm:mt-10">
        @include('includes.header')
        @include('includes.navbar')
        @if (request()->getRequestUri() == "/home" || request()->getRequestUri() == "/")
            @include('includes.hero')
        @endif
{{--        {{ session()->previousUrl() }}--}}

{{--        {{ url()->current() }}--}}
        @yield('content')
        @include('includes.cards')
        @include('includes.footer')
    </main>
</div>

</body>
</html>
{{--
public function getData()
{
$request = url()->previous(); // Get previous URL
$request = parse_url($request)['path']; // Remove domain name
$request = ltrim($request, '/'); // Remove first slash
error_log($request);
dd($request); // Returns the route where the view is (ex: participants)
if ($request == 'participants') {
//return query
} elseif ($request == 'complete') {
//return complete
} else {
//return failed
}
}--}}
