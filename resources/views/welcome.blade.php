<x-layout>
    @if (session('status'))
        <div class="alert alert-success mt-5">
            {{ session('message') }}
        </div>
    @endif
    <hr>

    <div class="container col-12 mt-5 middle">
        <div class="row">
            <div class="col-4">
                <p><i class="fas fa-mobile-alt me-1 icon"></i> Chiamaci</p>
                <p>+39101010101</p>
            </div>

            <div class="col-4">
                <p><i class="far fa-envelope me-1 icon"></i> Inviaci un messaggio</p>
                <p>info@studiocolapietro.it</p>
            </div>

            <div class="col-4">

                <p><i class="fas fa-map-marker-alt me-1 icon"></i> Visita lo studio</p>
                <p>Viale Dei Pini , 53</p>
            </div>
        </div>

        <hr>

        <div class="container col-12 mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="card1" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Il nostro staff</h4>
                            <p class="card-text">Lo studio dentistico Colapietro gode di uno staff altamente qualificato
                                e
                                sempre disponibile per tutte le esigenze dei suoi pazienti. Cliccando sul bottone potrai
                                consultare le referenze di tutti i nostri componenti</p>
                            <a href="/staff" class="he-li mx-3">Scopri di più</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card2" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title mb-3">I nostri servizi</h4>
                            <p class="card-text">Lo studio Dentistico Colapietro offre numerosi servizi per la cura e la
                                salute dei tuoi denti,dalle protesi dentali e chirurgia orale all'impiantologia dentale.
                                Clicca sul bottone in basso per visualizzarli tutti</p>
                            <a href="/servizi" class="he-li mx-3">Scopri di più</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card3" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Orari di apertura</h4>
                            <ul class="card-text">
                                <li>
                                    <pre>Martedì          15.30-19.30</pre>
                                </li>
                                <hr>
                                <li>
                                    <pre>Mercoledì        9.00-13.00</pre>
                                </li>
                                <hr>
                                <li>
                                    <pre>Venerdì          15.30-19.30</pre>
                                </li>
                                <hr>
                            </ul>
                            <a href="/" class="he-li mx-3">Scopri di più</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex mt-5">
        <div class="col-12">
            <div class="row">
                <div class="review">
                    <h1 class="col-1 mt-5 mx-5 text-light"> Cosa dicono i nostri clienti </h1>
                    {{-- card-carousel --}}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        
        <div class="col-12">
            <div class="row">
                <div class="col-5 mt-5 me-5 mb-5">
                    <h1>Contattaci</h1>
                <form method="POST" action="/contatti/submit">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome Utente</label>
                        <input name="user" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Numero di cellulare</label>
                        <input name="phone" type="phone" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
    
         
    <div class="col-5">
        <p class="text-info mt-5 ms-3">FAQ</p>
        <h5 class="ms-3">Hai delle domande?</h5>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Posso pagare a rate il mio impanto?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                        body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Gli interventi sono garantiti?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                        body. Let's imagine this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Posso pianificare i miei appuntamenti?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                        body. Nothing more exciting happening here in terms of content, but just filling up the
                        space to make it look, at least at first glance, a bit more representative of how this
                        would look in a real-world application.</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</x-layout>
