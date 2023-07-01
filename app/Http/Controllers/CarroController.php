<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;
use App\Http\Requests\CarroRequest;
use App\Http\Requests\UpdateCarroRequest;
use App\Repositories\CarroRepository;

class CarroController extends Controller
{

    public function __construct(Carro $carro) {
        $this->carro = $carro;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $carroRepository = new CarroRepository($this->carro);

        if($request->has('atributes_modelo')) {
            $atributes_modelo = 'modelo:id'.$request->atributes_modelo;
            $carroRepository->selectAtributesRegisterRelated($atributes_modelo);
        } else {
            $carroRepository->selectAtributesRegisterRelated('modelo');
        }

        if($request->has('filter')) {
            $carroRepository->filter($request->filter);
        }

        if($request->has('atributes')) {
            $carroRepository->selectAtributes($request->atributes);
        }

    return response()->json($carroRepository->getResult(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarroRequest $request)
    {
        try {
            Carro::create([
                'modelo_id' => $request->modelo_id,
                'placa' => $request->placa,
                'disponivel' => $request->disponivel,
                'km' => $request->km 
            ]);
            return response()->json(['msg' => 'carro adicionado com sucesso !'], 201);
        } catch(\Exception $e) {
            return response()->json(['msg' => $e->getMessage()], 422);
        }

        return response()->json($marca, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer  $carro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carro = Carro::with('modelo')->find($id);
        if($carro === null) {
            return response()->json(['erro' => 'carro nao cadastrado no sistema.'], 404);
        }
        return response()->json($carro, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function edit(Carro $carro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarroRequest  $request
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarroRequest $request, $id)
    {
        $carro = Carro::find($id);

        if($carro === null) {
            return response()->json(['msg' => 'houve um problema ao atualizar os dados'], 404);
        }

        try  {
            Carro::where('id', $id)
                ->update([
                    'placa' => $request->placa,
                    'disponivel' => $request->disponivel,
                    'km' => $request->km
                ]);
            return response()->json(['msg' => 'dados do automóvel atualizado.'], 200);
        } catch(\Exception $e) {
            return response()->json(['msg' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carro  $carro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carro = Carro::find($id);

        if($carro === null) {
            return response()->json(['msg' =>  'nao foi possivel realizar a exlcusão' ]);
        }

        $carro->delete();
        return response()->json(['msg' => 'carro removido com sucesso']);
    }
}
