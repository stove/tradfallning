@extends("layouts.layout")
@section("content")
    <div class="container text-white mx-auto mt-6">
        <div class="grid grid-cols-3 gap-4">
            <div>
                <h1 class="text-3xl">My DEV Blog</h1>
            </div>
            <div class="col-span-2 text-right">
                menu
            </div>
        </div>
    </div>

    <div class="container mx-auto px-6 py-10 bg-gray-100 my-10 text-gray-600 rounded-md shadow-md">
        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-3">

                <div class="mb-10">
                    <img src="https://picsum.photos/1000/420" alt="Post header image" class="rounded-lg my-4"/>
                    <h1 class="text-3xl">This is the title of my first post</h1>

                    <p>This is the description bnablab alba lbal ablabla blab al.</p>
                </div>

                <div class="my-10">
                    <img src="https://picsum.photos/1000/420?sjdj" alt="Post header image" class="rounded-lg my-4"/>
                    <h1 class="text-3xl">This is the title of my second post</h1>

                    <p>This is the description bnablab alba lbal ablabla blab al.</p>
                </div>

            </div>

            <div>
                <h2 class="text-gray-400 text-xl">Categories</h2>

                <ul>
                    <li><a href="#">Linux</a></li>
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">Development</a></li>
                    <li><a href="#">Devops</a></li>
                    <li><a href="#">Career</a></li>
                </ul>
            </div>
        </div>
    </div>
@stop

