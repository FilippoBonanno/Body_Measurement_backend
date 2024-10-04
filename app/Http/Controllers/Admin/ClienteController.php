<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use GuzzleHttp\Client;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recupera i clienti solo per l'utente loggato
        $clientes = Cliente::where('user_id', auth()->id())->get();

        // Controlla se ci sono clienti e passa un messaggio se non ci sono
        if ($clientes->isEmpty()) {
            // Passa il messaggio alla vista e passa i clienti
            return view('admin.clientes.index')->with('message', 'Non hai clienti associati.');
        }

        // Passa i clienti alla vista
        return view('admin.clientes.index', compact('clientes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Controlla se il cliente con quel nome e cognome esiste


        // Validazione dei dati
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'cellulare' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'eta' => 'required|integer',
            'peso' => 'required|numeric',
            'altezza' => 'required|numeric',
            'massa_magra' => 'required|numeric',
            'massa_grassa' => 'required|numeric',
            'massa_ossea' => 'required|numeric',
            'testa' => 'required|numeric',
            'collo' => 'required|numeric',
            'spalle' => 'required|numeric',
            'petto' => 'required|numeric',
            'bicipite_dx' => 'required|numeric',
            'bicipite_sx' => 'required|numeric',
            'avambraccio_dx' => 'required|numeric',
            'avambraccio_sx' => 'required|numeric',
            'polso_dx' => 'required|numeric',
            'polso_sx' => 'required|numeric',
            'vita' => 'required|numeric',
            'fianchi' => 'required|numeric',
            'coscia_dx' => 'required|numeric',
            'coscia_sx' => 'required|numeric',
            'polpaccio_dx' => 'required|numeric',
            'polpaccio_sx' => 'required|numeric',
        ]);


        // Aggiunge i campi creati e aggiornati dall'utente corrente
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $data['created_at'] = now();
        $data['updated_at'] = now();

        // Crea un nuovo cliente con i dati validati
        $cliente = new Cliente($data);
        $cliente->user_id = auth()->user()->id;
        $cliente->save();

        // Crea un nuovo cliente con i dati validati
        $path = $request->file('img')->store('images', 'public');
        $cliente->img = $path;
        $cliente->save();

        return redirect()->route('admin.clientes.index')->with('success', 'Cliente creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        // passa il cliente alla vista
        return view('admin.clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('admin.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        // Rendi opzionale l'immagine durante l'update
        $validated = $request->validate([
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nome' => 'required|string|max:255',
            'cognome' => 'required|string|max:255',
            'cellulare' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'eta' => 'required|integer',
            'peso' => 'required|numeric',
            'altezza' => 'required|numeric',
            'massa_magra' => 'required|numeric',
            'massa_grassa' => 'required|numeric',
            'massa_ossea' => 'required|numeric',
            'testa' => 'required|numeric',
            'collo' => 'required|numeric',
            'spalle' => 'required|numeric',
            'petto' => 'required|numeric',
            'bicipite_dx' => 'required|numeric',
            'bicipite_sx' => 'required|numeric',
            'avambraccio_dx' => 'required|numeric',
            'avambraccio_sx' => 'required|numeric',
            'polso_dx' => 'required|numeric',
            'polso_sx' => 'required|numeric',
            'vita' => 'required|numeric',
            'fianchi' => 'required|numeric',
            'coscia_dx' => 'required|numeric',
            'coscia_sx' => 'required|numeric',
            'polpaccio_dx' => 'required|numeric',
            'polpaccio_sx' => 'required|numeric',
        ]);

        // Se c'è un file img caricato, aggiorna l'immagine
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('images', 'public');
            $cliente->img = $path;
        }

        // Aggiorna gli altri campi
        $cliente->update($validated);

        return redirect()->route('admin.clientes.index')->with('success', 'Cliente aggiornato con successo.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('admin.clientes.index')->with('success', 'Cliente eliminato con successo!');
    }
}
