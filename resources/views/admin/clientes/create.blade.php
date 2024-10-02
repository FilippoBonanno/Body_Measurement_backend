@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Aggiungi Nuovo Cliente</h1>

        <form action="{{ route('admin.clientes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Campo per l'immagine -->
            <div class="form-group">
                <label for="img">Immagine del Cliente</label>
                <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" id="img"
                    required>
                @error('img')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nome -->
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" id="nome"
                    value="{{ old('nome') }}" required>
                @error('nome')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Cognome -->
            <div class="form-group">
                <label for="cognome">Cognome</label>
                <input type="text" name="cognome" class="form-control @error('cognome') is-invalid @enderror"
                    id="cognome" value="{{ old('cognome') }}" required>
                @error('cognome')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Cellulare -->
            <div class="form-group">
                <label for="cellulare">Cellulare</label>
                <input type="text" name="cellulare" class="form-control @error('cellulare') is-invalid @enderror"
                    id="cellulare" value="{{ old('cellulare') }}" required>
                @error('cellulare')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Età -->
            <div class="form-group">
                <label for="eta">Età</label>
                <input type="number" name="eta" class="form-control @error('eta') is-invalid @enderror" id="eta"
                    value="{{ old('eta') }}" required>
                @error('eta')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Peso -->
            <div class="form-group">
                <label for="peso">Peso (kg)</label>
                <input type="number" step="0.1" name="peso" class="form-control @error('peso') is-invalid @enderror"
                    id="peso" value="{{ old('peso') }}" required>
                @error('peso')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Altezza -->
            <div class="form-group">
                <label for="altezza">Altezza (cm)</label>
                <input type="number" step="0.1" name="altezza"
                    class="form-control @error('altezza') is-invalid @enderror" id="altezza" value="{{ old('altezza') }}"
                    required>
                @error('altezza')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Massa magra -->
            <div class="form-group">
                <label for="massa_magra">Massa Magra (kg)</label>
                <input type="number" step="0.1" name="massa_magra"
                    class="form-control @error('massa_magra') is-invalid @enderror" id="massa_magra"
                    value="{{ old('massa_magra') }}" required>
                @error('massa_magra')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Massa grassa -->
            <div class="form-group">
                <label for="massa_grassa">Massa Grassa (kg)</label>
                <input type="number" step="0.1" name="massa_grassa"
                    class="form-control @error('massa_grassa') is-invalid @enderror" id="massa_grassa"
                    value="{{ old('massa_grassa') }}" required>
                @error('massa_grassa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Massa ossea -->
            <div class="form-group">
                <label for="massa_ossea">Massa Ossea (kg)</label>
                <input type="number" step="0.1" name="massa_ossea"
                    class="form-control @error('massa_ossea') is-invalid @enderror" id="massa_ossea"
                    value="{{ old('massa_ossea') }}" required>
                @error('massa_ossea')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Testa -->
            <div class="form-group">
                <label for="testa">Testa (cm)</label>
                <input type="number" step="0.1" name="testa"
                    class="form-control @error('testa') is-invalid @enderror" id="testa"
                    value="{{ old('testa') }}" required>
                @error('testa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Collo -->
            <div class="form-group">
                <label for="collo">Collo (cm)</label>
                <input type="number" step="0.1" name="collo"
                    class="form-control @error('collo') is-invalid @enderror" id="collo"
                    value="{{ old('collo') }}" required>
                @error('collo')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Spalle -->
            <div class="form-group">
                <label for="spalle">Spalle (cm)</label>
                <input type="number" step="0.1" name="spalle"
                    class="form-control @error('spalle') is-invalid @enderror" id="spalle"
                    value="{{ old('spalle') }}" required>
                @error('spalle')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Petto -->
            <div class="form-group">
                <label for="petto">Petto (cm)</label>
                <input type="number" step="0.1" name="petto"
                    class="form-control @error('petto') is-invalid @enderror" id="petto"
                    value="{{ old('petto') }}" required>
                @error('petto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Bicipite destro -->
            <div class="form-group">
                <label for="bicipite_dx">Bicipite Destro (cm)</label>
                <input type="number" step="0.1" name="bicipite_dx"
                    class="form-control @error('bicipite_dx') is-invalid @enderror" id="bicipite_dx"
                    value="{{ old('bicipite_dx') }}" required>
                @error('bicipite_dx')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Bicipite sinistro -->
            <div class="form-group">
                <label for="bicipite_sx">Bicipite Sinistro (cm)</label>
                <input type="number" step="0.1" name="bicipite_sx"
                    class="form-control @error('bicipite_sx') is-invalid @enderror" id="bicipite_sx"
                    value="{{ old('bicipite_sx') }}" required>
                @error('bicipite_sx')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Avambraccio destro -->
            <div class="form-group">
                <label for="avambraccio_dx">Avambraccio Destro (cm)</label>
                <input type="number" step="0.1" name="avambraccio_dx"
                    class="form-control @error('avambraccio_dx') is-invalid @enderror" id="avambraccio_dx"
                    value="{{ old('avambraccio_dx') }}" required>
                @error('avambraccio_dx')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Avambraccio sinistro -->
            <div class="form-group">
                <label for="avambraccio_sx">Avambraccio Sinistro (cm)</label>
                <input type="number" step="0.1" name="avambraccio_sx"
                    class="form-control @error('avambraccio_sx') is-invalid @enderror" id="avambraccio_sx"
                    value="{{ old('avambraccio_sx') }}" required>
                @error('avambraccio_sx')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Polso destro -->
            <div class="form-group">
                <label for="polso_dx">Polso Destro (cm)</label>
                <input type="number" step="0.1" name="polso_dx"
                    class="form-control @error('polso_dx') is-invalid @enderror" id="polso_dx"
                    value="{{ old('polso_dx') }}" required>
                @error('polso_dx')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Polso sinistro -->
            <div class="form-group">
                <label for="polso_sx">Polso Sinistro (cm)</label>
                <input type="number" step="0.1" name="polso_sx"
                    class="form-control @error('polso_sx') is-invalid @enderror" id="polso_sx"
                    value="{{ old('polso_sx') }}" required>
                @error('polso_sx')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Vita -->
            <div class="form-group">
                <label for="vita">Vita (cm)</label>
                <input type="number" step="0.1" name="vita"
                    class="form-control @error('vita') is-invalid @enderror" id="vita" value="{{ old('vita') }}"
                    required>
                @error('vita')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Fianchi -->
            <div class="form-group">
                <label for="fianchi">Fianchi (cm)</label>
                <input type="number" step="0.1" name="fianchi"
                    class="form-control @error('fianchi') is-invalid @enderror" id="fianchi"
                    value="{{ old('fianchi') }}" required>
                @error('fianchi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Coscia destra -->
            <div class="form-group">
                <label for="coscia_dx">Coscia Destra (cm)</label>
                <input type="number" step="0.1" name="coscia_dx"
                    class="form-control @error('coscia_dx') is-invalid @enderror" id="coscia_dx"
                    value="{{ old('coscia_dx') }}" required>
                @error('coscia_dx')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Coscia sinistra -->
            <div class="form-group">
                <label for="coscia_sx">Coscia Sinistra (cm)</label>
                <input type="number" step="0.1" name="coscia_sx"
                    class="form-control @error('coscia_sx') is-invalid @enderror" id="coscia_sx"
                    value="{{ old('coscia_sx') }}" required>
                @error('coscia_sx')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Polpaccio destro -->
            <div class="form-group">
                <label for="polpaccio_dx">Polpaccio Destro (cm)</label>
                <input type="number" step="0.1" name="polpaccio_dx"
                    class="form-control @error('polpaccio_dx') is-invalid @enderror" id="polpaccio_dx"
                    value="{{ old('polpaccio_dx') }}" required>
                @error('polpaccio_dx')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Polpaccio sinistro -->
            <div class="form-group">
                <label for="polpaccio_sx">Polpaccio Sinistro (cm)</label>
                <input type="number" step="0.1" name="polpaccio_sx"
                    class="form-control @error('polpaccio_sx') is-invalid @enderror" id="polpaccio_sx"
                    value="{{ old('polpaccio_sx') }}" required>
                @error('polpaccio_sx')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Pulsanti di invio -->
            <button type="submit" class="btn btn-primary">Aggiungi Cliente</button>
        </form>
    </div>
@endsection
