<!-- Footer -->
<footer class="bg-gray-900 text-white leading-relaxed">
    <div class="container mx-auto flex flex-wrap bg-no-repeat bg-left-bottom bg-auto">
        <div class="md:w-1/2 lg:w-1/3 max-w-sm px-6 pt-12">   
            <picture>
                <source srcset="{{ $page->baseUrl }}/assets/img/layout/wbm-logo-compressed.webp" type="image/webp">
                <source srcset="{{ $page->baseUrl }}/assets/img/layout/wbm-logo-compressed.png" type="image/png"> 
                <img src="{{ $page->baseUrl }}/assets/img/layout/wbm-logo-compressed.png" alt="Western Business Media Limited" class="w-56 sm:w-64">
            </picture>

            <div class="flex items-start mt-8">
                <div class="inline-block w-4 h-4 mr-3 pt-1 md:pt-2">
                   <img src="{{ $page->baseUrl }}/assets/img/layout/home-icon.svg" alt="Home icon" />
                </div>
                <div>
                    Dorset House, 64 High Street,<br />
                    East Grinstead, West Sussex,<br />
                    RH19 3DE
                </div>
            </div>
            
            <div class="flex w-1/2 items-start mt-6">
                <div class="inline-block w-4 h-4 mr-3 pt-5">
                   <img src="{{ $page->baseUrl }}/assets/img/layout/phone-icon.svg" alt="Phone icon" />
                </div>
                <div>
                    <a class="inline-block py-3 hover:text-red-600 transition duration-300 ease-in-out" href="tel:+441342314300">01342 314 300</a>
                </div>
            </div>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-2 md:pt-2">
                   <img src="{{ $page->baseUrl }}/assets/img/layout/email-icon.svg" alt="Email icon" />
                </div>
                <div>
                    <a href="mailto:admin@westernbusiness.media" class="text-sm md:text-base hover:text-red-600 transition duration-300 ease-in-out">admin@westernbusiness.media</a>
                </div>
            </div>

            <div class="flex items-start mt-6">
                <div class="inline-block w-4 h-4 mr-3 pt-1 md:pt-2">
                   <img src="{{ $page->baseUrl }}/assets/img/layout/clock-icon.svg" alt="Clock icon" />
                </div>
                <div>
                    Office Hours<br />
                    Monday-Thursday : 09:00-17:00<br />
                    Friday : 09:00-16:30
                </div>
            </div>

            <div class="ml-6 mt-8 ">
                
                <div class="inline-block pt-1 mr-4">
                    <a href="https://www.linkedin.com/company/western-business-exhibitions" target="_blank" rel="noopener">
                        <img class="w-1/3 ml-1" src="{{ $page->baseUrl }}/assets/img/layout/linkedin-logo-compressed.png" alt="Follow us on LinkedIn">                                
                    </a>
                </div>
                                
            </div>

        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-6 py-8 md:py-12 quick-links">
            <h2 class="pb-4 text-white text-xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">Quick Links</h2>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://www.hsmsearch.com/" target="_blank" rel="noopener">Health &amp; Safety Matters</a>
                </div>                        
            </div>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://www.ipesearch.co.uk/" target="_blank" rel="noopener">Industrial, Plant &amp; Equipment</a>
                </div>                        
            </div>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://www.hsssearch.co.uk/" target="_blank" rel="noopener">Handling &amp; Storage Solutions</a>
                </div>                        
            </div>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://www.controlsdrivesautomation.com/" target="_blank" rel="noopener">Controls, Drives &amp; Automation</a>
                </div>                        
            </div>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://www.cleaning-matters.co.uk/" target="_blank" rel="noopener">Cleaning Matters</a>
                </div>                        
            </div>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://www.fsmatters.com/" target="_blank" rel="noopener">Fire Safety Matters</a>
                </div>                        
            </div>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://www.fsmatters.com/security-matters" target="_blank" rel="noopener">Security Matters</a>
                </div>                        
            </div>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://www.cleaning-matters.co.uk/facilities-matters" target="_blank" rel="noopener">Facilities Matters</a>
                </div>                        
            </div>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://www.she-awards.com/" target="_blank" rel="noopener">SHE Awards</a>
                </div>                        
            </div>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://firesecurityawards.com/" target="_blank" rel="noopener">FSM Awards</a>
                </div>                        
            </div>

            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://cleaningexcellenceawards.com/" target="_blank" rel="noopener">Cleaning Excellence Awards</a>
                </div>                        
            </div>
            <div class="flex items-start">
                <div class="inline-block w-4 h-4 mr-3 pt-1">
                   <svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
                    </svg>
                </div>
                <div class="inline-block mb-1 hover:text-red-600 transition duration-300 ease-in-out">
                    <a href="https://tomorrowswarehouse.live" target="_blank" rel="noopener">Tomorrows Warehouse Event</a>
                </div>                        
            </div>
           
        </div>

        <div class="w-full lg:w-1/3 px-6 lg:pl-0 py-6 md:py-12">
            <h2 class="pb-4 text-white text-xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">Contact Us</h2>
             
            <div class="w-full mb-8">                       
                <div class="mb-1">                            
                    <span class="font-bold">Mark Sennett</span> <span class="invisible sm:visible">-</span> <span class="block sm:inline-block">Chief Executive Officer</span>
                </div>                                           

                <div class="flex items-start">                    
                    <div class="inline-block w-4 h-4 mr-3 pt-5">
                       <img src="{{ $page->baseUrl }}/assets/img/layout/phone-icon.svg" alt="Phone icon" />
                    </div>
                    <div>
                        <a class="inline-block py-3 hover:text-red-600 transition duration-300 ease-in-out" href="tel:+441342333722">01342 333 722</a>  <span class="inline-block mx-2">|</span>  <a class="inline-block py-3 hover:text-red-600 transition duration-300 ease-in-out" href="tel:+447751678621">07751 678 621</a>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="inline-block w-4 h-4 mr-3 pt-4">
                       <img src="{{ $page->baseUrl }}/assets/img/layout/email-icon.svg" alt="Email icon" />
                    </div>
                    <div>
                        <a href="mailto:msennett@westernbusiness.media" class="text-sm sm:text-base inline-block py-2 hover:text-red-600 transition duration-300 ease-in-out">msennett@westernbusiness.media</a>
                    </div>
                </div>
            </div>

            <div class="mb-8">                       
                <div class="mb-1">                            
                    <span class="font-bold">Keith Gabriel</span> <span class="invisible sm:visible">-</span> <span class="block sm:inline-block">Managing Director</span>
                </div>                                           

                <div class="flex items-start">
                    <div class="inline-block w-4 h-4 mr-3 pt-5">
                       <img src="{{ $page->baseUrl }}/assets/img/layout/phone-icon.svg" alt="Phone icon" />
                    </div>
                    <div>
                        <a class="inline-block py-3 hover:text-red-600 transition duration-300 ease-in-out" href="tel:+441342333742">01342 333 742</a>  <span class="inline-block mx-2">|</span>  <a class="inline-block py-3 hover:text-red-600 transition duration-300 ease-in-out" href="tel:+447818574311">07818 574 311</a>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="inline-block w-4 h-4 mr-3 pt-2">
                       <img src="{{ $page->baseUrl }}/assets/img/layout/email-icon.svg" alt="Email icon" />
                    </div>
                    <div>
                        <a href="mailto:kgabriel@westernbusiness.media" class="text-sm sm:text-base py-2 hover:text-red-600 transition duration-300 ease-in-out">kgabriel@westernbusiness.media</a>
                    </div>
                </div>
            </div>

            <div>                       
                <div class="mb-1">
                    <span class="font-bold">Danny Kosifou</span>  <span class="invisible sm:visible">-</span> <span class="block sm:inline-block">Chief Operating Officer</span>
                </div>                                           

                <div class="flex items-start">
                    <div class="inline-block w-4 h-4 mr-3 pt-5">
                       <img src="{{ $page->baseUrl }}/assets/img/layout/phone-icon.svg" alt="Phone icon" />
                    </div>
                    <div>
                        <a class="inline-block py-3 hover:text-red-600 transition duration-300 ease-in-out" href="tel:+44 1342333715">01342 333 715</a>
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="inline-block w-4 h-4 mr-3 pt-2">
                       <img src="{{ $page->baseUrl }}/assets/img/layout/email-icon.svg" alt="Email icon" />
                    </div>
                    <div>
                        <a href="mailto:danny@westernbusiness.media" class="text-sm sm:text-base hover:text-red-600 transition duration-300 ease-in-out">danny@westernbusiness.media</a>
                    </div>
                </div>
            </div>                   
        </div>    

        <!-- Small Print -->
        <div class="w-full mt-4 mb-3 px-6 text-white text-left uppercase footer">              
            <div class="lg:flex lg:justify-between pt-4 border-t border-gray-700 text-xs md:text-sm">
                <div class="pb-2">
                    Western Business Media Limited <span class="block sm:inline-block">2020 All Rights Reserved</span>
                </div>                    
                <div class="lg:text-right">
                    <a href="{{ $page->baseUrl }}/terms" class="hover:text-red-600 transition duration-300 ease-in-out">Terms &amp; Conditions</a>  <span class="inline-block mx-2">|</span>  <a href="{{ $page->baseUrl }}/privacy" class="hover:text-red-600 transition duration-300 ease-in-out">Privacy &amp; Cookie Policy</a>
                </div>                        
            </div>
        </div>                              
    </div>                    
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ $page->baseUrl }}{{ mix('js/main.js') }}"></script>
