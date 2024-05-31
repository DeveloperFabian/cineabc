<!DOCTYPE html>
<html lang="en">

@include('layouts.webpage.components.head')

<body>
    <div class="wrapper">

        <div class="main">

            @include('layouts.webpage.components.navbar')

            <main class="content">
                <div class="container-fluid p-0">
					@yield('content')
                </div>
            </main>
        </div>
    </div>

    @vite('resources/js/app.js')

</body>

</html>
