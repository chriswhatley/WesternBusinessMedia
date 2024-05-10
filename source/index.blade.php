@extends('_layouts.home')

@section('content')

    <main class="main">

        <!-- About WBM -->
        <section id="about-wbm" class="about-wbm relative bg-gray-800 bg-no-repeat bg-center lg:bg-left bg-contain">      
            <div class="container mx-auto">
                <div class="px-6 py-12 w-full lg:w-1/2 lg:pr-12 leading-relaxed text-white">                                                                                          
                    <h2 class="pb-4 text-white text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">Who We Are</h2>                        
                    <p class="mb-6">We are Western Business Media Limited (WBM Ltd), formerly known as Western Business Exhibitions Ltd. We publish leading business-to-business titles across a wide variety of UK sectors as well as being the organisers of the prestigious Safety &amp; Health Excellent Awards (SHE Awards).</p>
                    <p>Our respected brands provide an independent voice for the diverse markets we serve. Delivering business insight, comment and the latest news on product innovation, services and legislation through print, digital and event platforms.</p>
                </div>
            </div>

            <div class="journals hidden lg:block absolute top-0 right-0 z-50 h-full w-1/2"></div>                                                                 
        </section>

        <!-- Journals Carousel -->
        <section class="bg-gray-200">
            <div class="container mx-auto flex flex-wrap py-12 lg:pb-2">                
                <div class="px-6 pt-4 text-gray-800 leading-relaxed">                    
                    <h2 class="pb-4 text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">What We Do</h2>
                    <p>Western Business Media Limited publish leading business-to-business titles across a wide variety of UK business sectors. Find out more about our journals below...</p>
                </div>          

                <div class="swiper-container swiper-journals mt-8 lg:h-132">
                    <div class="swiper-wrapper">
                        @foreach($journals as $journal)
                            <div class="swiper-slide">
                                @include('_components/journal-component')
                            </div>
                        @endforeach
                    </div>

                    <!-- Swiper Pagination -->
                    <div class="swiper-pagination hidden xl:block"></div>

                    <!-- Swiper Arrow Buttons -->
                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-10 h-10 text-red-500 fill-current">
                            <path d="M7.05 9.293L6.343 10 12 15.657l1.414-1.414L9.172 10l4.242-4.243L12 4.343z"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-10 h-10 text-red-500 fill-current">
                            <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
                        </svg>
                    </div>
                </div> 

            </div>
        </section>

        <!-- Events & Awards -->
        <section class="py-12">

            <div class="container mx-auto px-6">                
                <div class="pt-4 text-gray-800 leading-relaxed">                    
                    <h2 class="pb-4 text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">Events We Host</h2>
                    <p>Western Business Media Limited also organises and hosts leading business-to-business conferences, exhibitions and awards across a wide variety of sectors.</p>
                </div>     

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 md:gap-12 mt-8">

                    @foreach($events as $event)
                        @include('_components/event-component')
                    @endforeach

                </div>

        </section>



        <!-- Consultancy Services -->     
        <section class="bg-gray-300 pt-12 pb-10 text-grey-800 leading-relaxed">
            <div class="container mx-auto flex flex-wrap">                
                <div class="px-6">                    
                    <h3 class="mb-4 text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">PR, Design &amp; Contract Publishing Services</h3>
                    <h4 class="uppercase font-semibold">Access our in-house PR, design/content &amp; contract publishing &amp; events expertise.</h4>

                    <div class="flex flex-wrap mt-4">
                        <p class="w-full">You may know Western Business Media (WBM) as a long established B2B publishing & events company. Owners of a range of marketing leading brands, such as Industrial Plant & Equipment (IPE) and Health & Safety Matters (HSM) and the Safety & Health Excellence (SHE) Awards amongst others.</p>
                        <p class="w-full mt-4">What you may not know is that you can access our in-house content, advertising, design and media buying experience. Whether that be utilizing our editorial experience to create engaging content in print and online platforms, including social media etc. events logistics or the design of your advertising copy, WBM can provide the right solution for you.</p>                   
                    </div>
                </div>        

                     
                <ul class="pt-6 px-5 w-full flex flex-wrap">
                    <li class="w-full md:w-1/2 lg:w-1/4">
                        <div class="flex items-start px-2">
                            <div class="inline-block w-4 h-4 mr-2 pt-1">
                                <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                                    <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                                </svg>
                            </div>
                            <div class="inline-block mb-1">
                                PR &amp; Marketing
                            </div>                        
                        </div>
                    </li>

                    <li class="w-full md:w-1/2 lg:w-1/4">
                        <div class="flex items-start px-2">
                            <div class="inline-block w-4 h-4 mr-2 pt-1">
                                <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                                    <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                                </svg>
                            </div>
                            <div class="inline-block mb-1">
                                Content Creation <span class="inline-block lg:block xl:inline-block">(Print &amp; Digital)</span>
                            </div>                        
                        </div>
                    </li>

                    <li class="w-full md:w-1/2 lg:w-1/4">
                        <div class="flex items-start px-2">
                            <div class="inline-block w-4 h-4 mr-2 pt-1">
                                <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                                    <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                                </svg>
                            </div>
                            <div class="inline-block mb-1">
                                Media &amp; Print Buying
                            </div>                        
                        </div>
                    </li>

                    <li class="w-full md:w-1/2 lg:w-1/4">
                        <div class="flex items-start px-2">
                            <div class="inline-block w-4 h-4 mr-2 pt-1">
                                <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                                    <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                                </svg>
                            </div>
                            <div class="inline-block mb-1">
                                Design/Production Bureau
                            </div>                        
                        </div>
                    </li>
           
                    <li class="w-full md:w-1/2 lg:w-1/4">
                        <div class="flex items-start px-2">
                            <div class="inline-block w-4 h-4 mr-2 pt-1">
                                <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                                    <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                                </svg>
                            </div>
                            <div class="inline-block mb-1">
                                Event Logistics
                            </div>                        
                        </div>
                    </li>

                    <li class="w-full md:w-1/2 lg:w-1/4">
                        <div class="flex items-start px-2">
                            <div class="inline-block w-4 h-4 mr-2 pt-1">
                                <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                                    <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                                </svg>
                            </div>
                            <div class="inline-block mb-1">
                                Media Sales
                            </div>                        
                        </div>
                    </li>

                    <li class="w-full md:w-1/2 lg:w-1/4">
                        <div class="flex items-start px-2">
                            <div class="inline-block w-4 h-4 mr-2 pt-1">
                                <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                                    <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                                </svg>
                            </div>
                            <div class="inline-block mb-1">
                                Videography
                            </div>                        
                        </div>
                    </li>                            
                </ul>
                

                <div class="mt-6 px-6"> 
                    <p class="mt-4">It has never been more important to present your company's products & services in the most professional and competent light. We know that running your business requires 100% of your focus. We can help you do this by tapping into our expertise and present your company's messages the way you want!</p>                                      
                    <p class="mt-8 font-bold uppercase text-center text-grey-800 leading-relaxed">Please contact us for further information</p>
                </div>
            </div>
        </section>

        <!-- Clients -->        
        <section class="bg-gray-100 pt-12 pb-10 text-grey-800 leading-relaxed">
            <div class="container mx-auto flex flex-wrap"> 
                <div class="px-6">                    
                    <h1 class="text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">Our PR &amp; Contract Publishing Clients include</h1>                    
                </div> 

                <div class="flex flex-wrap justify-center w-full mb-4">
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5">
                    	<picture>
	    					<source srcset="/assets/img/clients/client-bsif-compressed.webp" type="image/webp">
	    					<source srcset="/assets/img/clients/client-bsif-compressed.png" type="image/png"> 
	    					<img src="/assets/img/clients/client-bsif-compressed.png" alt="BSIF">
	            		</picture> 
                    </div>
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5">
                    	<picture>
	    					<source srcset="/assets/img/clients/client-iirsm-compressed.webp" type="image/webp">
	    					<source srcset="/assets/img/clients/client-iirsm-compressed.png" type="image/png"> 
	    					<img src="/assets/img/clients/client-iirsm-compressed.png" alt="IIRSM">
	            		</picture> 
                    </div>
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5">
                    	<picture>
	    					<source srcset="/assets/img/clients/client-nineteen-compressed.webp" type="image/webp">
	    					<source srcset="/assets/img/clients/client-nineteen-compressed.png" type="image/png"> 
	    					<img src="/assets/img/clients/client-nineteen-compressed.png" alt="Nineteen">
	            		</picture> 
                    </div>
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5">
                    	<picture>
	    					<source srcset="/assets/img/clients/client-ssaib-compressed.webp" type="image/webp">
	    					<source srcset="/assets/img/clients/client-ssaib-compressed.png" type="image/png"> 
	    					<img src="/assets/img/clients/client-ssaib-compressed.png" alt="SSAIB">
	            		</picture> 
                    </div>  
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5">
                        <picture>
                            <source srcset="/assets/img/clients/client-reset-compliance-compressed.webp" type="image/webp">
                            <source srcset="/assets/img/clients/client-reset-compliance-compressed.png" type="image/png"> 
                            <img src="/assets/img/clients/client-reset-compliance-compressed.png" alt="Reset Compliance">
                        </picture> 
                    </div>                                              
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5">
                    	<picture>
	    					<source srcset="/assets/img/clients/client-facilities-event-compressed.webp" type="image/webp">
	    					<source srcset="/assets/img/clients/client-facilities-event-compressed.png" type="image/png"> 
	    					<img src="/assets/img/clients/client-facilities-event-compressed.png" alt="The Facilities Event">
	            		</picture> 
                    </div>   
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5">
                    	<picture>
	    					<source srcset="/assets/img/clients/client-fire-safety-event-compressed.webp" type="image/webp">
	    					<source srcset="/assets/img/clients/client-fire-safety-event-compressed.png" type="image/png"> 
	    					<img src="/assets/img/clients/client-fire-safety-event-compressed.png" alt="The Fire Safety Event">
	            		</picture> 
                    </div>
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5">
                    	<picture>
	    					<source srcset="/assets/img/clients/client-health-safety-event-compressed.webp" type="image/webp">
	    					<source srcset="/assets/img/clients/client-health-safety-event-compressed.png" type="image/png"> 
	    					<img src="/assets/img/clients/client-health-safety-event-compressed.png" alt="The Health & Safety Event">
	            		</picture> 
                    </div>
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5">
                    	<picture>
	    					<source srcset="/assets/img/clients/client-security-event-compressed.webp" type="image/webp">
	    					<source srcset="/assets/img/clients/client-security-event-compressed.png" type="image/png"> 
	    					<img src="/assets/img/clients/client-security-event-compressed.png" alt="The Security Event">
	            		</picture> 
                    </div>                    
                    <div class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/5">
                    	<picture>
	    					<source srcset="/assets/img/clients/client-international-security-expo-compressed.webp" type="image/webp">
	    					<source srcset="/assets/img/clients/client-international-security-expo-compressed.png" type="image/png"> 
	    					<img src="/assets/img/clients/client-international-security-expo-compressed.png" alt="International Security Expo">
	            		</picture> 
                    </div> 
                </div>                   
             
            </div>            
        </section>

          <!-- Testimonials Carousel -->
        <section class="testimonials bg-gray-200 bg-no-repeat bg-center md:bg-right bg-contain">
            <div class="container mx-auto flex flex-wrap py-12 lg:pb-6">                
                <div class="w-full px-6 pt-4 text-gray-800 leading-relaxed">                    
                    <h2 class="pb-4 text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">What our clients have to say</h2>
                </div>          
                    
                <div class="swiper-container swiper-testimonials w-full h-88 sm:h-56 md:h-64 lg:h-56 xl:h-48 mt-6 z-20 cursor-grab">
                    <div class="swiper-wrapper">
                        @foreach($testimonials as $testimonial)
                            <div class="swiper-slide">
                                @include('_components/testimonial-component')
                            </div>
                        @endforeach
                    </div>

                    <!-- Swiper Pagination -->
                    <div class="swiper-pagination"></div>                   
                </div> 

            </div>
        </section>


    </main>

@endsection
