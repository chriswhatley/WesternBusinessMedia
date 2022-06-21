{{-- <div class="journal-card"> --}}
    <div class="{{ $journal->class_name }} journal-card flex flex-wrap bg-gray-800 overflow-hidden sm:rounded-lg text-white cursor-grab">
        
        <div class="w-full h-56 md:h-auto lg:w-1/2 header bg-cover bg-center flex justify-center items-center">        
           {{--  <picture>
                <source srcset="{{ $page->baseUrl }}/assets/img/journals/{{ $journal->class_name }}-logo-compressed.webp" type="image/webp">
                <source srcset="{{ $page->baseUrl }}/assets/img/journals/{{ $journal->class_name }}-logo-compressed.png" type="image/png"> 
                <img src="{{ $page->baseUrl }}/assets/img/journals/{{ $journal->class_name }}-logo-compressed.png" alt="Western Business Media Limited" class="my-12">
            </picture>      --}}       
            <img src="{{ $page->baseUrl }}/assets/img/journals/{{ $journal->class_name }}-logo-compressed.svg" alt="{{ $journal->title }} Logo" class="my-12">
        </div>

        <div class="w-full lg:w-1/2 py-6 px-12 md:px-16 lg:px-12 flex flex-wrap">
            <h2 class="text-white mt-3 text-2xl font-bold leading-tight subpixel-antialiased tracking-normal uppercase tracking-tight heading">
                {{ $journal->title }}
            </h2>
            <div class="w-full">
                {!! $journal->getContent() !!}
            </div>    
        
            <div class="w-full flex justify-end mt-6 mb-4">
                <a href="{{ $journal->url }}" class="inline-flex justify-center items-center px-6 py-3 text-white font-semibold rounded-md uppercase" rel="noopener" target="_blank">
                    Find out more
                    <img class="ml-2" src="{{ $page->baseUrl }}/assets/img/layout/pointer-icon.svg" alt="Pointer icon" />
                </a> 
            </div>
               
        </div>

    </div>
{{-- </div> --}}