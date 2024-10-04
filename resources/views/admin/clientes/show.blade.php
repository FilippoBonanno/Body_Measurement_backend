@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dettagli Cliente</h1>

        <div class="card">
            <div class="card-body">
                <img src="{{ asset('storage/' . $cliente->img) }}" alt="">
                <h3 class="card-title">{{ $cliente->nome }} {{ $cliente->cognome }}</h3>
                <p class="card-text"><strong>Cellulare:</strong> {{ $cliente->cellulare }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $cliente->email }}</p>
                <p class="card-text"><strong>Età:</strong> {{ $cliente->eta }}</p>
                <p class="card-text"><strong>Peso:</strong> {{ $cliente->peso }} kg</p>
                <p class="card-text"><strong>Altezza:</strong> {{ $cliente->altezza }} cm</p>
                <p class="card-text"><strong>Massa magra:</strong> {{ $cliente->massa_magra }} kg</p>
                <p class="card-text"><strong>Massa grassa:</strong> {{ $cliente->massa_grassa }} kg</p>
                <p class="card-text"><strong>Massa ossea:</strong> {{ $cliente->massa_ossea }} kg</p>
                <p class="card-text"><strong>Misure:</strong></p>
                <ul>
                    <li><strong>Testa:</strong> {{ $cliente->testa }} cm</li>
                    <li><strong>Collo:</strong> {{ $cliente->collo }} cm</li>
                    <li><strong>Spalle:</strong> {{ $cliente->spalle }} cm</li>
                    <li><strong>Petto:</strong> {{ $cliente->petto }} cm</li>
                    <li><strong>Bicipite destro:</strong> {{ $cliente->bicipite_dx }} cm</li>
                    <li><strong>Bicipite sinistro:</strong> {{ $cliente->bicipite_sx }} cm</li>
                    <li><strong>Avambraccio destro:</strong> {{ $cliente->avambraccio_dx }} cm</li>
                    <li><strong>Avambraccio sinistro:</strong> {{ $cliente->avambraccio_sx }} cm</li>
                    <li><strong>Polso destro:</strong> {{ $cliente->polso_dx }} cm</li>
                    <li><strong>Polso sinistro:</strong> {{ $cliente->polso_sx }} cm</li>
                    <li><strong>Vita:</strong> {{ $cliente->vita }} cm</li>
                    <li><strong>Fianchi:</strong> {{ $cliente->fianchi }} cm</li>
                    <li><strong>Coscia destra:</strong> {{ $cliente->coscia_dx }} cm</li>
                    <li><strong>Coscia sinistra:</strong> {{ $cliente->coscia_sx }} cm</li>
                    <li><strong>Polpaccio destro:</strong> {{ $cliente->polpaccio_dx }} cm</li>
                    <li><strong>Polpaccio sinistro:</strong> {{ $cliente->polpaccio_sx }} cm</li>
                </ul>

                <a href="{{ route('admin.clientes.index') }}" class="btn btn-primary">Torna alla lista</a>
                <a href="{{ route('admin.clientes.edit', $cliente->id) }}" class="btn btn-warning">Modifica</a>
                <form action="{{ route('admin.clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Sei sicuro di voler eliminare questo cliente?')">Elimina</button>
                </form>
            </div>
        </div>
    </div>
@endsection
