<x-layout>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12">
                <div class="col-6">
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
            </div>
        </div>
    </div>



</x-layout>
