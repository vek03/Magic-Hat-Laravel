<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;
use Auth;

class CarrinhoController extends Controller
{
    private $carrinho;

    function __construct() {
        $this->carrinho = new carrinho();
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Display the specified resource.
     */
    public function show(Carrinho $carrinho)
    {
        //
    }


    /**
     * Display all resources.
     */
    public function list()
    {
        Auth::user()->id;
        $cart = $this->carrinho->where('id_client', Auth::user()->id)->get();

        return view('client.carrinho', [
            'cart' => $cart,
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrinho $carrinho)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrinho $carrinho)
    {
        //
    }


    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrinho $carrinho)
    {
        //
    }
}
