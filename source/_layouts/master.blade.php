<!DOCTYPE html>
<html lang="en">
    <head>        
        @include('_partials/meta')    
    </head>
    <body data-sidebar-visible="true">

        <header class="w-full bg-gray-800">            
            @include('_partials/header')                
        </header>

        <main class="main">
            @yield('content')
        </main>
                
        @include('_partials/footer')              
                         
    </body>
</html>
