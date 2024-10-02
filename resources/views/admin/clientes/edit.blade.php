@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica Cliente</h1>

        <form action="{{ route('admin.clientes.update', $cliente->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Anteprima dell'immagine attuale -->
            <div class="form-group">
                <label for="img">Immagine del Cliente Attuale</label><br>
                <img src="{{ asset('storage/' . $cliente->img) }}" alt="Immagine del Cliente" width="150"
                    class="img-thumbnail mb-3">
            </div>

            <!-- Campo per caricare una nuova immagine -->
            <div class="form-group">
                <label for="img">Carica Nuova Immagine</label>
                <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" id="img">
                @error('img')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nome -->
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" id="nome"
                    value="{{ old('nome', $cliente->nome) }}" required>
                @error('nome')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Cognome -->
            <div class="form-group">
                <label for="cognome">Cognome</label>
                <input type="text" name="cognome" class="form-control @error('cognome') is-invalid @enderror"
                    id="cognome" value="{{ old('cognome', $cliente->cognome) }}" required>
                @error('cognome')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Cellulare -->
            <div class="form-group">
                <label for="cellulare">Cellulare</label>
                <input type="text" name="cellulare" class="form-control @error('cellulare') is-invalid @enderror"
                    id="cellulare" value="{{ old('cellulare', $cliente->cellulare) }}" required>
                @error('cellulare')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="email" value="{{ old('email', $cliente->email) }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Età -->
            <div class="form-group">
                <label for="eta">Età</label>
                <input type="number" name="eta" class="form-control @error('eta') is-invalid @enderror" id="eta"
                    value="{{ old('eta', $cliente->eta) }}" required>
                @error('eta')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Peso -->
            <div class="form-group">
                <label for="peso">Peso (kg)</label>
                <input type="number" step="0.1" name="peso" class="form-control @error('peso') is-invalid @enderror"
                    id="peso" value="{{ old('peso', $cliente->peso) }}" required>
                @error('peso')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Altezza -->
            <div class="form-group">
                <label for="altezza">Altezza (cm)</label>
                <input type="number" step="0.1" name="altezza"
                    class="form-control @error('altezza') is-invalid @enderror" id="altezza"
                    value="{{ old('altezza', $cliente->altezza) }}" required>
                @error('altezza')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Massa magra -->
            <div class="form-group">
                <label for="massa_magra">Massa Magra (kg)</label>
                <input type="number" step="0.1" name="massa_magra"
                    class="form-control @error('massa_magra') is-invalid @enderror" id="massa_magra"
                    value="{{ old('massa_magra', $cliente->massa_magra) }}" required>
                @error('massa_magra')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Massa grassa -->
            <div class="form-group">
                <label for="massa_grassa">Massa Grassa (kg)</label>
                <input type="number" step="0.1" name="massa_grassa"
                    class="form-control @error('massa_grassa') is-invalid @enderror" id="massa_grassa"
                    value="{{ old('massa_grassa', $cliente->massa_grassa) }}" required>
                @error('massa_grassa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Massa ossea -->
            <div class="form-group">
                <label for="massa_ossea">Massa Ossea (kg)</label>
                <input type="number" step="0.1" name="massa_ossea"
                    class="form-control @error('massa_ossea') is-invalid @enderror" id="massa_ossea"
                    value="{{ old('massa_ossea', $cliente->massa_ossea) }}" required>
                @error('massa_ossea')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Altri campi (testa, collo, spalle, ecc.) -->
            <!-- Ripetere la struttura per tutti i campi come massa magra, massa grassa, ecc., seguendo la logica di old('campo', $cliente->campo) -->

            <!-- Pulsanti di invio -->
            <button type="submit" class="btn btn-primary">Aggiorna Cliente</button>
        </form>
    </div>
@endsection
