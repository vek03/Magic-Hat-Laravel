<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produto;

    function __construct() {
        $this->produto = new Produto();
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
    public function show(Produto $produto)
    {
        //
    }



    /**
     * Display the all resources.
     */
    public function list()
    {
        $produtos = $this->produto->all();

        return view('catalogo', [
            'produtos' => $produtos,
        ]);
    }


    /**
     * Display the all resources.
     */
    public function listAdmin()
    {
        $produtos = $this->produto->all();

        return view('admin.catalogo', [
            'produtos' => $produtos,
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('admin.editar_produto', [
            'produto' => $produto,
        ]);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
