@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Aggiungi Nuovo Cliente</h1>

        <div class="card shadow-lg p-4 rounded">
            <form action="{{ route('admin.clientes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Campo per l'immagine -->
                <div class="form-group mb-3">
                    <label for="img" class="form-label">Immagine del Cliente</label>
                    <input type="file" name="img" class="form-control @error('img') is-invalid @enderror"
                        id="img" required>
                    @error('img')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Nome e Cognome in due colonne -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror"
                            id="nome" value="{{ old('nome') }}" required>
                        @error('nome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="cognome" class="form-label">Cognome</label>
                        <input type="text" name="cognome" class="form-control @error('cognome') is-invalid @enderror"
                            id="cognome" value="{{ old('cognome') }}" required>
                        @error('cognome')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="cellulare" class="form-label">Cellulare</label>
                        <input type="text" name="cellulare" class="form-control @error('cellulare') is-invalid @enderror"
                            id="cellulare" value="{{ old('cellulare') }}" required>
                        @error('cellulare')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Cellulare e Email in due colonne -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="eta" class="form-label">Età</label>
                        <input type="number" name="eta" class="form-control @error('eta') is-invalid @enderror"
                            id="eta" value="{{ old('eta') }}" required>
                        @error('eta')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="peso" class="form-label">Peso (kg)</label>
                        <input type="number" step="0.1" name="peso"
                            class="form-control @error('peso') is-invalid @enderror" id="peso"
                            value="{{ old('peso') }}" required>
                        @error('peso')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="altezza" class="form-label">Altezza (cm)</label>
                        <input type="number" step="0.1" name="altezza"
                            class="form-control @error('altezza') is-invalid @enderror" id="altezza"
                            value="{{ old('altezza') }}" required>
                        @error('altezza')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="massa_magra" class="form-label">Massa Magra (kg)</label>
                        <input type="number" step="0.1" name="massa_magra"
                            class="form-control @error('massa_magra') is-invalid @enderror" id="massa_magra"
                            value="{{ old('massa_magra') }}" required>
                        @error('massa_magra')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Età e Peso in due colonne -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="massa_grassa" class="form-label">Massa Grassa (kg)</label>
                        <input type="number" step="0.1" name="massa_grassa"
                            class="form-control @error('massa_grassa') is-invalid @enderror" id="massa_grassa"
                            value="{{ old('massa_grassa') }}" required>
                        @error('massa_grassa')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="massa_ossea" class="form-label">Massa Ossea (kg)</label>
                        <input type="number" step="0.1" name="massa_ossea"
                            class="form-control @error('massa_ossea') is-invalid @enderror" id="massa_ossea"
                            value="{{ old('massa_ossea') }}" required>
                        @error('massa_ossea')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="testa" class="form-label">Testa (cm)</label>
                        <input type="number" step="0.1" name="testa"
                            class="form-control @error('testa') is-invalid @enderror" id="testa"
                            value="{{ old('testa') }}" required>
                        @error('testa')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="collo" class="form-label">Collo (cm)</label>
                        <input type="number" step="0.1" name="collo"
                            class="form-control @error('collo') is-invalid @enderror" id="collo"
                            value="{{ old('collo') }}" required>
                        @error('collo')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                </div>

                <!-- Altezza e Massa Magra -->
                <div class="row mb-3">


                    <div class="col-md-3">
                        <label for="spalle" class="form-label">Spalle (cm)</label>
                        <input type="number" step="0.1" name="spalle"
                            class="form-control @error('spalle') is-invalid @enderror" id="spalle"
                            value="{{ old('spalle') }}" required>
                        @error('spalle')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="petto" class="form-label">Petto (cm)</label>
                        <input type="number" step="0.1" name="petto"
                            class="form-control @error('Petto') is-invalid @enderror" id="petto"
                            value="{{ old('petto') }}" required>
                        @error('petto')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="bicipite_dx" class="form-label">Bicipite Destro (cm)</label>
                        <input type="number" step="0.1" name="bicipite_dx"
                            class="form-control @error('bicipite_dx') is-invalid @enderror" id="bicipite_dx"
                            value="{{ old('bicipite_dx') }}" required>
                        @error('bicipite_dx')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="bicipite_sx" class="form-label">Bicipite Sinistro (cm)</label>
                        <input type="number" step="0.1" name="bicipite_sx"
                            class="form-control @error('bicipite_sx') is-invalid @enderror" id="bicipite_sx"
                            value="{{ old('bicipite_sx') }}" required>
                        @error('bicipite_sx')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>


                <div class="row mb-3">

                    <div class="col-md-3">
                        <label for="avambraccio_dx" class="form-label">Avambraccio Destro (cm)</label>
                        <input type="number" step="0.1" name="avambraccio_dx"
                            class="form-control @error('bicipite_sx') is-invalid @enderror" id="avambraccio_dx"
                            value="{{ old('avambraccio_dx') }}" required>
                        @error('avambraccio_dx')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="avambraccio_sx" class="form-label">Avambraccio Sinistro (cm)</label>
                        <input type="number" step="0.1" name="avambraccio_sx"
                            class="form-control @error('bicipite_sx') is-invalid @enderror" id="avambraccio_sx"
                            value="{{ old('avambraccio_sx') }}" required>
                        @error('avambraccio_sx')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="polso_dx" class="form-label">Polso Destro (cm)</label>
                        <input type="number" step="0.1" name="polso_dx"
                            class="form-control @error('bicipite_sx') is-invalid @enderror" id="polso_dx"
                            value="{{ old('polso_dx') }}" required>
                        @error('polso_dx')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="polso_sx" class="form-label">Polso Sinistro (cm)</label>
                        <input type="number" step="0.1" name="polso_sx"
                            class="form-control @error('bicipite_sx') is-invalid @enderror" id="polso_sx"
                            value="{{ old('polso_sx') }}" required>
                        @error('polso_sx')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="vita" class="form-label">Vita (cm)</label>
                        <input type="number" step="0.1" name="vita"
                            class="form-control @error('bicipite_sx') is-invalid @enderror" id="vita"
                            value="{{ old('vita') }}" required>
                        @error('vita')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="fianchi" class="form-label">Fianchi (cm)</label>
                        <input type="number" step="0.1" name="fianchi"
                            class="form-control @error('bicipite_sx') is-invalid @enderror" id="fianchi"
                            value="{{ old('fianchi') }}" required>
                        @error('fianchi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="coscia_dx" class="form-label">Coscia Destra (cm)</label>
                        <input type="number" step="0.1" name="coscia_dx"
                            class="form-control @error('bicipite_sx') is-invalid @enderror" id="coscia_dx"
                            value="{{ old('coscia_dx') }}" required>
                        @error('coscia_dx')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="coscia_sx" class="form-label">Coscia Sinistra (cm)</label>
                        <input type="number" step="0.1" name="coscia_sx"
                            class="form-control @error('bicipite_sx') is-invalid @enderror" id="coscia_sx"
                            value="{{ old('coscia_sx') }}" required>
                        @error('coscia_sx')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="polpaccio_dx" class="form-label">Polpaccio Destro (cm)</label>
                        <input type="number" step="0.1" name="polpaccio_dx"
                            class="form-control @error('bicipite_sx') is-invalid @enderror" id="polpaccio_dx"
                            value="{{ old('polpaccio_dx') }}" required>
                        @error('polpaccio_dx')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="polpaccio_sx" class="form-label">Polpaccio Sinistro (cm)</label>
                        <input type="number" step="0.1" name="polpaccio_sx"
                            class="form-control @error('bicipite_sx') is-invalid @enderror" id="polpaccio_sx"
                            value="{{ old('polpaccio_sx') }}" required>
                        @error('polpaccio_sx')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Pulsante di invio -->
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary px-5 py-2">Aggiungi Cliente</button>
                </div>
            </form>
        </div>
    </div>
@endsection
