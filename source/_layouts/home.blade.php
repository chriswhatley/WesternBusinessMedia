<!DOCTYPE html>
<html lang="en">
    <head>        
        @include('_partials/meta')    

        <link rel="preload" href="assets/img/layout/wbm-hero-small-people-compressed.jpg" as="image">
        <link rel="preload" href="assets/img/layout/wbm-hero-people-compressed.jpg" as="image">

        <style>            
            /* Small (sm) */
            @media (max-width: 639px) { 
                .hero {
                    background-image: url(assets/img/layout/wbm-hero-small-people-compressed.jpg);
                }
            }

            /* Medium (md) */
            @media (min-width: 640px) { 
                .hero {
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
                <div class="mouse_scroll">
                    <div class="mouse">
                        <div class="wheel"></div>
                    </div>
                    <div>
                        <span class="m_scroll_arrows one"></span>
                        <span class="m_scroll_arrows two"></span>
                        <span class="m_scroll_arrows three"></span>
                    </div>
                </div>                                
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

        <script src="assets/js/owl.carousel.min.js"></script>        
        <script type="text/javascript">
            $(document).ready(function(){                

                $(".journal-carousel").owlCarousel({                    
                    loop: true,
                    autoplay: true,                
                    autoplaySpeed: 2000,    
                    autoplayHoverPause: true,
                    margin: 10,
                    responsiveClass: true,
                    responsive: {
                        0:{
                            items:1,
                            nav:false
                        },
                        640:{
                            items:1,
                            nav:false
                        },
                        768:{
                            items:1,
                            nav:false
                        },
                        1024:{
                            items:3,
                            nav:false                            
                        },
                        1280:{
                            items:3,
                            nav:false                            
                        }
                    }                                             
                });
            });
        </script>

    </body>
</html>

