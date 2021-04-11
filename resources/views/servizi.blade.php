<x-layout>


    <div class="container">
        <h1 class="title-serv ms-5 mt-5">Servizi</h1>
        <div class="col-12">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-3">
                        <x-card 
                            title="{{ $service['title'] }}" 
                            img="{{ $service['img'] }}"
                            description="{{ $service['description'] }}" 
                            price="{{ $service['price'] }}" 
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </div>


   <div class="container">
        <div class="col-12">
            <x-accordion-contact/>
        </div>
    </div>
    
</x-layout>
