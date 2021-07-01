<!DOCTYPE html>
<html lang="en">
    <head>        
        @include('_partials/meta')    

        <link rel="preload" href="assets/img/layout/wbm-hero-small-people-compressed.webp" as="image">
        <link rel="preload" href="assets/img/layout/wbm-hero-small-people-compressed.jpg" as="image">
        <link rel="preload" href="assets/img/layout/wbm-hero-people-compressed.webp" as="image">
        <link rel="preload" href="assets/img/layout/wbm-hero-people-compressed.jpg" as="image">
      
        <style>  
            .hero-text h1 {
                text-shadow: 1px 1px 2px rgba(9, 0, 0, 0.75);
            }  

            /* Small (sm) */
            @media (max-width: 639px) { 
                .webp .hero {
                    background-image: url(assets/img/layout/wbm-hero-small-people-compressed.webp);
                }

                .no-webp .hero {
                    background-image: url(assets/img/layout/wbm-hero-small-people-compressed.jpg);
                }
            }

            /* Medium (md) */
            @media (min-width: 640px) { 
                .webp .hero {
                    background-image: url(assets/img/layout/wbm-hero-people-compressed.webp);
                }

                .no-webp .hero {
                    background-image: url(assets/img/layout/wbm-hero-people-compressed.jpg);
                }
            }
        </style> 
    </head>
    <body data-sidebar-visible="true">

        <header class="absolute top-0 z-50 w-full">
            @include('_partials/header')                
        </header>
               
        <!-- Hero block -->
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center h-screen">
            <div class="absolute top-0 w-full h-full bg-red-700 bg-bottom bg-cover hero">
                <!-- <span class="w-full h-full absolute opacity-50 bg-red-700"></span> -->
            </div>

            <div class="absolute bottom-0 flex justify center pb-3">                
                <a class="scroll-link" href="#about-wbm">
                    <div class="mouse_scroll">
                        <div class="sr-only">Scroll down</div>
                        <div class="mouse">
                            <div class="wheel"></div>
                        </div>
                        <div>
                            <span class="m_scroll_arrows one"></span>
                            <span class="m_scroll_arrows two"></span>
                            <span class="m_scroll_arrows three"></span>
                        </div>
                    </div>
                </a>
                                                
            </div>


            <div class="container relative mx-auto">         

                <div class="w-full mx-auto text-center hero-text pt-12">
                    <h1 class="px-2 text-white font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight subpixel-antialiase">
                        Excellence in business intelligence 
                        <span class="block">in print, online, in person</span>                        
                    </h1>                        
                </div>                
                
            </div>                      
        </div>

        @yield('content')
                
        @include('_partials/footer')
    </body>
</html>

