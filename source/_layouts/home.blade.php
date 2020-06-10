<!DOCTYPE html>
<html lang="en">
    <head>        
        @include('_partials/meta')    
    </head>
    <body data-sidebar-visible="true">

        <header class="absolute top-0 z-50 w-full">

            <!-- <div class="hidden lg:block lg:w-full" style="background-color:rgba(44, 55, 65, 0.75)"> -->
            <div class="hidden md:block md:w-full text-white text-lg">
                <div class="container mx-auto p-2 flex justify-end">                                
                    <div class="flex pr-6">

                        <div class="flex items-start mr-6">
                            <div class="inline-block w-4 h-4 mr-3 pt-1">
                                <img class="" src="assets/img/layout/phone-icon-white.svg" alt="Phone icon" />
                            </div>
                            <div>
                                <a href="tel:+44 1342314300">01342 314 300</a>
                            </div>
                        </div>                                                                                    

                        <div class="flex items-start">
                            <div class="inline-block w-4 h-4 mr-3 pt-2">
                                <img src="assets/img/layout/email-icon-white.svg" alt="Email icon" />
                            </div>
                            <div>
                                <a href="mailto:admin@westernbusiness.media">admin@westernbusiness.media</a>
                            </div>
                        </div>                                          

                    </div>                  
                </div>            
            </div>

            <div style="background-color:rgba(32, 30, 31, 0.95)">
                <div class="container mx-auto flex justify-center md:justify-between">                                

                    <div class="py-3 px-6 max-w-xs md:max-w-lg">                
                        <a href="/">
                            <img class="" src="assets/img/layout/wbm-logo-compressed.png" alt="Western Business Media Limited">
                        </a>
                    </div>

                    <div class="hidden md:block md:w-full md:flex md:justify-end self-center pr-8">

                        <a href="https://www.linkedin.com/company/western-business-exhibitions" target="_blank" rel="noopener">
                            <img class="h-8" src="assets/img/layout/linkedin-logo-compressed.png" alt="Follow us on LinkedIn">                                
                        </a>

                               
                    </div>

                </div>            
            </div>
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

