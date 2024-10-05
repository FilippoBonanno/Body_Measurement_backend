@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Lista Clienti</h1>
        <button type="button" class="btn btn-primary"><a href="{{ route('admin.clientes.create') }}"
                class="btn btn-primary">Aggiungi Nuovo Cliente</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Cellulare</th>
                    <th>Email</th>
                    <th>Età</th>
                    <th>Peso</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @if (Auth::user()->clientes->isNotEmpty())
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->cognome }}</td>
                            <td>{{ $cliente->cellulare }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->eta }}</td>
                            <td>{{ $cliente->peso }}</td>
                            <td>
                                <a href="{{ route('admin.clientes.show', $cliente->id) }}" class="btn btn-info">Visualizza</a>
                                <a href="{{ route('admin.clientes.edit', $cliente->id) }}"
                                    class="btn btn-warning">Modifica</a>
                                <form action="{{ route('admin.clientes.destroy', $cliente->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Sei sicuro di voler eliminare questo cliente?')">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

            </tbody>
        </table>
    @else
        <div>Non ci sono clienti</div>
        @endif
    </div>
@endsection
