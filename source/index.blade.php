@extends('_layouts.home')

@section('content')

<main class="main">

	<!-- About WBM -->
	<section class="about-wbm relative bg-gray-800 bg-no-repeat bg-center lg:bg-left bg-contain">      
		<div class="container mx-auto">
			<div class="px-6 py-12 w-full lg:w-1/2 lg:pr-12 leading-relaxed text-white sm:text-lg md:text-xl lg:text-lg">                                                                                          
				<h2 class="pb-4 text-white text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">Who We Are</h2>                        
				<p class="mb-6">We are Western Business Media Limited (WBM Ltd), formerly known as Western Business Exhibitions Ltd. We publish leading business-to-business titles across a wide variety of UK sectors as well as being the organisers of the prestigious Safety &amp; Health Excellent Awards (SHE Awards).</p>
				<p>Our respected brands provide an independent voice for the diverse markets we serve. Delivering business insight, comment and the latest news on product innovation, services and legislation through print, digital and event platforms.</p>
			</div>
		</div>

		<div class="journals hidden lg:block absolute top-0 right-0 z-50 h-full w-1/2">                                    
		</div>                                                                 
	</section>



	<!-- Journals Carousel -->
	<section class="bg-gray-200">
		<div class="container mx-auto flex flex-wrap pt-6 pb-12">                
			<div class="px-6 text-gray-800 leading-relaxed sm:text-lg md:text-xl lg:text-lg">                    
				<h2 class="pb-4 text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">What We Do</h1>
					<p>Western Business Media Limited publish leading business-to-business titles across a wide variety of UK business sectors. Find out more about our journals below...</p>
				</div>

				<div class="flex flex-wrap mt-4 px-6 journal-carousel owl-carousel owl-theme">

					<div class="flex flex-col bg-gray-800 text-white sm:text-lg md:text-xl lg:text-base ipe">
						<div class="flex header h-64 lg:h-48 bg-cover bg-center">
							<div class="self-center mx-auto w-3/4">
								<img src="assets/img/journals/ipe-logo-compressed.png" data-src="assets/img/journals/ipe-logo-compressed.png" alt="Industrial, Plant & Equipment" class="lazyload">                                                                                                                   
							</div>
						</div>
						<div class="w-full mt-8 mb-6 font-bold text-xl text-white px-8 uppercase tracking-tight leading-tight heading">Industrial, Plant &amp; Equipment</div>
						<p class="px-8 mb-5">
							Industrial Plant & Equipment is now in its 26th year and continues to bring its readers a comprehensive, forward-looking view of the industrial sector. 
						</p>
						<p class="px-8 mb-5">
							Every issue features a plethora of in-depth articles covering everything from the latest technological developments, to best practice advice and information on changes to legislation. You will also find previews of a wide range of exhibitions relevant to IP&E’s readership.
						</p>                                                    

						<div class="flex justify-end pt-4 pb-8 pr-8">
							<a href="https://www.ipesearch.co.uk" target="_blank" rel="noopener" class="font-bold py-3 px-4 uppercase">
								Find out more                                
								<img class="ml-2 lazyload" src="assets/img/layout/pointer-icon.svg" data-src="assets/img/layout/pointer-icon.svg" alt="Pointer icon" />
							</a>
						</div>                                                                          
					</div>

					<div class="flex flex-col bg-gray-800 text-white sm:text-lg md:text-xl lg:text-base hsm">
						<div class="flex header h-64 lg:h-48 bg-cover bg-center">
							<div class="self-center mx-auto w-3/4">
								<img src="assets/img/journals/hsm-logo-compressed.png" data-src="assets/img/journals/hsm-logo-compressed.png" alt="Health & Safety Matters" class="lazyload">                                                                                                                   
							</div>
						</div>
						<div class="w-full mt-8 mb-6 font-bold text-xl text-white px-8 uppercase tracking-tight leading-tight heading">Health &amp; Safety Matters</div>
						<p class="px-8 mb-5">
							Health & Safety Matters is published 8 times a year. It provides comprehensive coverage of the latest innovations in the health and safety market as well as delivering independent news, views and comment from the safety industry.
						</p>
						<p class="px-8 mb-5">
							HSM works closely with key sector stakeholders including the BSIF, HSE, British Safety Council, BOHS, RoSPA and IIRSM to ensure HSM readers have all the information they need on current issues in health and safety, as well as guidance on how to comply with changes in legislation.
						</p>                            

						<div class="flex justify-end pt-4 pb-8 pr-8">
							<a href="https://www.hsmsearch.com" target="_blank" rel="noopener" class="text-white font-bold py-3 px-4 uppercase">
								Find out more                                
								<img class="ml-2 text-xl lazyload" src="assets/img/layout/pointer-icon.svg" data-src="assets/img/layout/pointer-icon.svg" alt="Pointer icon" />
							</a>
						</div>                                                                                                  
					</div>

					<div class="flex flex-col bg-gray-800 text-white sm:text-lg md:text-xl lg:text-base hss">
						<div class="flex header h-64 lg:h-48 bg-cover bg-center">
							<div class="self-center mx-auto w-3/4">
								<img src="assets/img/journals/hss-logo-compressed.png" data-src="assets/img/journals/hss-logo-compressed.png" alt="Handling & Storage Solutions" class="lazyload">                                                                                                                   
							</div>
						</div>
						<div class="w-full mt-8 mb-6 font-bold text-xl text-white px-8 uppercase tracking-tight leading-tight heading">Handling &amp; Storage Solutions</div>
						<p class="px-8 mb-5">
							Handling & Storage solutions, published ten times a year, is a must read for professionals in warehousing and logistics.
						</p>
						<p class="px-8 mb-5">
							Every issue includes eight product sections covering the latest market developments in the fields of Lift trucks & ancillaries, Warehouse storage, Distribution, Facilities management, Lifting & Moving, conveying, Warehouse IT and Health & Safety. Tightly sub-edited, these enable specifiers to quickly find out what they need to know without wasting time.
						</p>                                                    

						<div class="flex justify-end pt-4 pb-6 pr-6">
							<a href="https://www.hsssearch.co.uk" target="_blank" rel="noopener" class="font-bold py-3 px-4 uppercase">
								Find out more                                
								<img class="ml-2 lazyload" src="assets/img/layout/pointer-icon.svg" data-src="assets/img/layout/pointer-icon.svg" alt="Pointer icon" />
							</a>
						</div>                                                                          
					</div>

					<div class="flex flex-col bg-gray-800 text-white sm:text-lg md:text-xl lg:text-base cm">
						<div class="flex header h-64 lg:h-48 bg-cover bg-center">
							<div class="self-center mx-auto w-3/4">
								<img src="assets/img/journals/cm-logo-compressed.png" data-src="assets/img/journals/cm-logo-compressed.png" alt="Cleaning Matters" class="lazyload">                                                                                                                   
							</div>
						</div>
						<div class="w-full mt-8 mb-6 font-bold text-xl text-white px-8 uppercase tracking-tight leading-tight heading">Cleaning Matters</div>
						<p class="px-8 mb-5">
							Cleaning matters is published bi-monthly and is targeted at individuals from across the cleaning industry including cleaning operatives and contractors, end users in manufacturing, the commercial arena and the public sector.
						</p>
						<p class="px-8 mb-5">
							Cleaning matters presents the latest innovations and insight that can aid the task of cleaning, maintenance and hygiene, as well as delivering independent news, views and developments from within the market.
						</p>                                                    

						<div class="flex justify-end pt-4 pb-6 pr-6">
							<a href="https://www.cleaning-matters.co.uk" target="_blank" rel="noopener" class="font-bold py-3 px-4 uppercase">
								Find out more                                
								<img class="ml-2 lazyload" src="assets/img/layout/pointer-icon.svg" data-src="assets/img/layout/pointer-icon.svg" alt="Pointer icon" />
							</a>
						</div>                                                                          
					</div>

					<div class="flex flex-col bg-gray-800 text-white sm:text-lg md:text-xl lg:text-base cda">
						<div class="flex header h-64 lg:h-48 bg-cover bg-center">
							<div class="self-center mx-auto w-3/4">
								<img src="assets/img/journals/cda-logo-compressed.png" data-src="assets/img/journals/cda-logo-compressed.png" alt="Controls, Drives & Automation" class="lazyload">                                                                                                                   
							</div>
						</div>
						<div class="w-full mt-8 mb-6 font-bold text-xl text-white px-8 uppercase tracking-tight leading-tight heading">Controls, Drives &amp; Automation</div>
						<p class="px-8 mb-5">
							Published 6 times a year, each issue of controls, Drives &amp; Automation covers the core products, services and applications in five easy-to-reference sections including: Internet of things, Power Transmission, Drives &amp; Motors, Controls and Automation.
						</p>
						<p class="px-8 mb-5">
							These sections will inform readers how the intelligent selection and application of industrial technology will give them a leading edge in manufacturing. 
						</p>                    


						<div class="flex justify-end pt-4 pb-8 pr-8">
							<a href="https://www.controlsdrivesautomation.com" target="_blank" rel="noopener" class="font-bold py-3 px-4 uppercase">
								Find out more                                
								<img class="ml-2 lazyload" src="assets/img/layout/pointer-icon.svg" data-src="assets/img/layout/pointer-icon.svg" alt="Pointer icon" />
							</a>
						</div>                                                                          
					</div>

					<div class="flex flex-col bg-gray-800 text-white sm:text-lg md:text-xl lg:text-base fsm">
						<div class="flex header h-64 lg:h-48 bg-cover bg-center">
							<div class="self-center mx-auto w-3/4">
								<img src="assets/img/journals/fsm-logo-compressed.png" data-src="assets/img/journals/fsm-logo-compressed.png" alt="Fire Safety Matters" class="lazyload">                                                                                                                   
							</div>
						</div>
						<div class="w-full mt-8 mb-6 font-bold text-xl text-white px-8 uppercase tracking-tight leading-tight heading">Fire Safety Matters</div>
						<p class="px-8 mb-5">
							Fire Safety Matters is an independent publication aimed at the largest collection of fire, security, facilities and risk management professionals in the UK.
						</p>
						<p class="px-8 mb-5">
							Fire &amp; Security Matters aims to educate fire, security and risk management professionals on legislation, best practice and recent developments across their sector. Each issue contains News, Prosecutions, products and services, legal advice and hard-hitting opinions, technical articles and case studies.
						</p>                                                    

						<div class="flex justify-end pt-4 pb-8 pr-8">
							<a href="https://www.fsmatters.com" target="_blank" rel="noopener" class="text-white font-bold py-3 px-4 uppercase">
								Find out more                                
								<img class="ml-2 text-xl lazyload" src="assets/img/layout/pointer-icon.svg" data-src="assets/img/layout/pointer-icon.svg" alt="Pointer icon" />
							</a>
						</div>                                                                          
					</div>

					<div class="flex flex-col bg-gray-800 text-white sm:text-lg md:text-xl lg:text-base sm">
						<div class="flex header h-64 lg:h-48 bg-cover bg-center">
							<div class="self-center mx-auto w-3/4">
								<img src="assets/img/journals/sm-logo-compressed.png" data-src="assets/img/journals/sm-logo-compressed.png" alt="Security Matters" class="lazyload">                                                                                                                   
							</div>
						</div>
						<div class="w-full mt-8 mb-6 font-bold text-xl text-white px-8 uppercase tracking-tight leading-tight heading">Security Matters</div>
						<p class="px-8 mb-5">
							Launched in 2019, Security Matters is the sister title to FSM and is an independent publication aimed at the largest collection of security and risk management professionals in the UK.
						</p>
						<p class="px-8 mb-5">
							Sent out with FSM to more than 40,000 named individuals through print, online and email platforms as well as being the official publication for The Security Event, International Security Expo and also distributed at Intersec Dubai, Security Matters offers unparalleled access to the security sector.
						</p>                                                    

						<div class="flex justify-end pt-4 pb-8 pr-8">
							<a href="https://www.fsmatters.com/security-matters" target="_blank" rel="noopener" class="font-bold py-3 px-4 uppercase">
								Find out more                                
								<img class="ml-2 lazyload" src="assets/img/layout/pointer-icon.svg" data-src="assets/img/layout/pointer-icon.svg" alt="Pointer icon" />
							</a>
						</div>                                                                          
					</div>

					<div class="flex flex-col bg-gray-800 text-white sm:text-lg md:text-xl lg:text-base fm">
						<div class="flex header h-64 lg:h-48 bg-cover bg-center">
							<div class="self-center mx-auto w-3/4">
								<img src="assets/img/journals/fm-logo-compressed.png" data-src="assets/img/journals/fm-logo-compressed.png" alt="Facilities Matters" class="lazyload">                                                                                                                   
							</div>
						</div>
						<div class="w-full mt-8 mb-6 font-bold text-xl text-white px-8 uppercase tracking-tight leading-tight heading">Facilities Matters</div>
						<p class="px-8 mb-5">
							Launched in 2019, Facilities Matters provides the latest information and insight for facilities management professionals and is the official journal for The Facilities Event, which takes place every April at the NEC.
						</p>
						<p class="px-8 mb-5">
							Facilities Matters provides extensive coverage of issues within the core 'pillars' of FM: Cleaning, Security, Catering, Property Services and IT &amp; Support Services and boasts contributions from key industry stakeholders such as: The Worldwide Cleaning Industry Association, the British Institute of Cleaning Science and a host of respected cleaning &amp; facilities experts.
						</p>                            

						<div class="flex justify-end pt-4 pb-8 pr-8">
							<a href="https://www.cleaning-matters.co.uk/facilities-matters" rel="noopener" target="_blank" class="py-3 px-4 font-bold uppercase">
								Find out more                                
								<img class="ml-2 lazyload" src="assets/img/layout/pointer-icon.svg" data-src="assets/img/layout/pointer-icon.svg" alt="Pointer icon" />
							</a>
						</div>                                                                          
					</div>

					<div class="flex flex-col bg-gray-800 text-white sm:text-lg md:text-xl lg:text-base mmi">
						<div class="flex header h-64 lg:h-48 bg-cover bg-center">
							<div class="self-center mx-auto w-3/4">
								<img src="assets/img/journals/mmi-logo-compressed.png" data-src="assets/img/journals/mmi-logo-compressed.png" alt="Manufacturing Matters Ireland" class="lazyload">                                                                                                                   
							</div>
						</div>
						<div class="w-full mt-8 mb-6 font-bold text-xl text-white px-8 uppercase tracking-tight leading-tight heading">Manufacturing Matters Ireland</div>
						<p class="px-8 mb-5">
							Manufacturing Matters Ireland, formerly Industrial Plant & Equipment (IP&E) Ireland, is a quarterly magazine dedicated to helping readers achieve excellence in industrial efficiency.
						</p>                                                                 
						<p class="px-8 mb-5">   
							Within each issue of MMI, eight easy-to-reference sections will detail the latest products and services, while a wide range of feature-length articles will focus on today’s hot topics – all esigned to help companies improve productivity, reduce downtime and achieve excellence in industrial efficiency.
						</p>

						<div class="flex justify-end pt-4 pb-8 pr-8">
							<a href="https://www.ipesearch.co.uk/mmi" target="_blank" rel="noopener" class="py-3 px-4 font-bold uppercase">
								Find out more                                
								<img class="ml-2 lazyload" src="assets/img/layout/pointer-icon.svg" data-src="assets/img/layout/pointer-icon.svg" alt="Pointer icon" />
							</a>
						</div>                                                                          
					</div>                                      

				</div>
			</div>
		</section>

		<!-- SHE Awards -->
		<section class="she-awards bg-gray-800">           
			<div class="flex flex-wrap">

				<div class="flex justify-center items-center w-full lg:w-1/2 bg-no-repeat bg-top">                
					<img class="p-12" src="assets/img/journals/she-logo-compressed.png" alt="The Safety & Health Excellence Awards">                                                                                                    
				</div>

				<div class="w-full lg:w-1/2">

					<div class="container mx-auto">
						<div class="px-6 py-12 lg:pl-12 xl:max-w-2xl text-white leading-relaxed sm:text-lg md:text-xl lg:text-lg">
							<h2 class="pb-4 text-white text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">Safety &amp; Health Excellence Awards</h2>
							<p>The Safety & Health Excellence (SHE) Awards attracts more than 550 guests from the safety, health, fire and security sectors and includes a sumptuous three course meal, table wine, drinks reception, live music, celebrity host and live entertainment.</p>
							<div class="flex-none mt-auto overflow-hidden pt-8">
								<div class="flex justify-end">								
									<a href="https://www.she-awards.com" target="_blank" rel="noopener" class="font-bold py-3 px-4 uppercase text-black tracking-tight">
										Find out more                                
										<svg class="fill-current text-black inline-block h-8 w-8 pt-1 pl-2" xmlns="http://www.w3.org/2000/svg">                                    
					                         <path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
					                    </svg>
									</a>
								</div>
							</div>                                    
						</div>
					</div>

				</div>            
			</div>                       
		</section>


		<!-- Consultancy Services -->     
		<section class="bg-gray-300 pt-12 pb-12 text-grey-800 leading-relaxed sm:text-lg md:text-xl lg:text-lg">
			<div class="container mx-auto flex flex-wrap">                
				<div class="px-6">                    
					<h1 class="pb-4 text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">PR, Design &amp; Contract Publishing Services</h1>
					<p>WBM has considerable knowledge and experience within a variety of key industry sectors. In addition to producing our own leading media brands, we offer clients the opportunity to tap into our expertise by offering the following consultancy services:</p>
				</div>        

				<div class="pt-6 px-5 w-full sm:flex">

					<div class="sm:w-1/2">                        
						<ul>
							<li>
								<div class="flex items-start">
									<div class="inline-block w-4 h-4 mr-3 pt-1">
										<svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
											<path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
										</svg>
									</div>
									<div class="inline-block mb-1">
										PR &amp; Marketing
									</div>                        
								</div>
							</li>

							<li>
								<div class="flex items-start">
									<div class="inline-block w-4 h-4 mr-3 pt-1">
										<svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
											<path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
										</svg>
									</div>
									<div class="inline-block mb-1">
										Content Creation (Print &amp; Digital)
									</div>                        
								</div>
							</li>

							<li>
								<div class="flex items-start">
									<div class="inline-block w-4 h-4 mr-3 pt-1">
										<svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
											<path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
										</svg>
									</div>
									<div class="inline-block mb-1">
										Media &amp; Print Buying
									</div>                        
								</div>
							</li>

							<li>
								<div class="flex items-start">
									<div class="inline-block w-4 h-4 mr-3 pt-1">
										<svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
											<path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
										</svg>
									</div>
									<div class="inline-block mb-1">
										Design/Production Bureau
									</div>                        
								</div>
							</li>
						</ul>
					</div>

					<div class="sm:w-1/2 sm:pl-4">
						<ul>
							<li>
								<div class="flex items-start">
									<div class="inline-block w-4 h-4 mr-3 pt-1">
										<svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
											<path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
										</svg>
									</div>
									<div class="inline-block mb-1">
										Event Logistics
									</div>                        
								</div>
							</li>

							<li>
								<div class="flex items-start">
									<div class="inline-block w-4 h-4 mr-3 pt-1">
										<svg class="fill-current text-red-600 inline-block h-8 w-8" xmlns="http://www.w3.org/2000/svg">                                    
											<path d="m6.14054,16.661362c-0.641151,0 -1.154072,-0.256458 -1.602878,-0.641151c-0.897611,-0.89761 -0.897611,-2.308143 0,-3.205755l3.654562,-3.718676c0.064116,-0.064115 0.064116,-0.12823 0,-0.192346l-3.654562,-3.718676c-0.897611,-0.897612 -0.897611,-2.308144 0,-3.205756c0.448806,-0.448806 1.025842,-0.641151 1.602878,-0.641151c0,0 0,0 0,0c0.641151,0 1.154072,0.25646 1.602878,0.641151l5.962704,6.02682c0.577037,0.577036 0.577037,1.474648 0,1.98757l-5.962704,6.026818c-0.38469,0.384693 -0.961726,0.641151 -1.602878,0.641151c0,0 0,0 0,0z"/>
										</svg>
									</div>
									<div class="inline-block mb-1">
										Media Sales
									</div>                        
								</div>
							</li>

							<li>
								<div class="flex items-start">
									<div class="inline-block w-4 h-4 mr-3 pt-1">
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
					</div>                             
				</div>
			</div>

			<!-- Clients -->        
			<div class="container mx-auto mt-12 flex flex-wrap"> 
				<div class="px-6">                    
					<h1 class="text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">Our PR &amp; Contract Publishing Clients include</h1>                    
				</div> 

				<div class="flex flex-wrap justify-center w-full mb-4">
					<div class="w-1/2 md:w-1/3 lg:w-1/5">
						<img src="assets/img/clients/client-bsif-compressed.png" data-src="assets/img/clients/client-bsif-compressed.png" class="lazyload" alt="BSIF">
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/5">
						<img src="assets/img/clients/client-iirsm-compressed.png" data-src="assets/img/clients/client-iirsm-compressed.png" class="lazyload" alt="IIRSM">
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/5">
						<img src="assets/img/clients/client-nineteen-compressed.png" data-src="assets/img/clients/client-nineteen-compressed.png" class="lazyload" alt="Nineteen">
					</div>
					<div class="w-1/2 md:hidden lg:block lg:w-1/5">
						<img src="assets/img/clients/client-ssaib-compressed.png" data-src="assets/img/clients/client-ssaib-compressed.png" class="lazyload" alt="SSAIB">
					</div>                                    
				</div>

				<div class="flex flex-wrap w-full mb-4">
					<div class="hidden md:block md:w-1/3 lg:hidden">
						<img src="assets/img/clients/client-ssaib-compressed.png" data-src="assets/img/clients/client-ssaib-compressed.png" class="lazyload" alt="SSAIB">
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/5">
						<img src="assets/img/clients/client-facilities-event-compressed.png" data-src="assets/img/clients/client-facilities-event-compressed.png" class="lazyload" alt="The Faciliites Event">
					</div>   
					<div class="w-1/2 md:w-1/3 lg:w-1/5">
						<img src="assets/img/clients/client-fire-safety-event-compressed.png" data-src="assets/img/clients/client-fire-safety-event-compressed.png" class="lazyload" alt="The Fire Safety Event">
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/5">
						<img src="assets/img/clients/client-health-safety-event-compressed.png" data-src="assets/img/clients/client-health-safety-event-compressed.png" class="lazyload" alt="The Health & Safety Event">
					</div>
					<div class="w-1/2 md:w-1/3 lg:w-1/5">
						<img src="assets/img/clients/client-security-event-compressed.png" data-src="assets/img/clients/client-security-event-compressed.png" class="lazyload" alt="The Security Event">
					</div>                    
					<div class="w-1/2 md:w-1/3 lg:w-1/5">
						<img src="assets/img/clients/client-international-security-expo-compressed.png" data-src="assets/img/clients/client-international-security-expo-compressed.png" class="lazyload" alt="International Security Expo">
					</div>                    
				</div>

				<div class="px-6 mt-4 w-full text-center">                                        
					<p class="text-grey-800 leading-relaxed sm:text-lg md:text-xl lg:text-lg">Please contact us for further information.</p>
				</div> 

			</div>            
		</section>

	</main>

@endsection
