<a class="event {{ $event->class_name }}" href="{{ $event->url }}" rel="noopener" target="_blank">           
    <div class="event-logo">                
        <img src="/assets/img/events/{{ $event->class_name }}-compressed.svg" alt="{{ $event->title }}" class="w-full">
    </div>

    <div class="event-description fade">
        <div class="flex flex-col place-content-between"> 
            <div>
                <h2 class="w-full heading">{{ $event->title }}</h2>
                <p class="w-full">{!! $event->getContent() !!}</p>    
            </div>
            
            <div class="w-full flex justify-end">
                <div class="cta-button">
                    Visit site
                    <img class="ml-2" src="/assets/img/layout/pointer-icon.svg" alt="Pointer icon" />
                </div>                
            </div> 
        </div>        
    </div>
</a>