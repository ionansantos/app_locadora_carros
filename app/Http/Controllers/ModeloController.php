<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Modelo;
use Illuminate\Http\Request;
use App\Http\Requests\ModeloRequest;
use App\Repositories\ModeloRepository;
class ModeloController extends Controller
{

    public function __construct(Modelo $modelo) {
        $this->modelo = $modelo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $modeloRepository = new ModeloRepository($this->modelo);
        $modelos = array();

        if($request->has('atributes_marca')){
            $atributes_marca = 'marca:id,'.$request->atributes_marca;
            $modeloRepository->selectAtributesRegisterRelated($atributes_marca);
        } else {
            $modeloRepository->selectAtributesRegisterRelated('marca');
        }

        if($request->has('filter')) {
            $modeloRepository->filter($request->filter);
        }

        if($request->has('atributes')) {
            $modeloRepository->selectAtributes($request->get('atributes'));
        }
        return  response()->json($modeloRepository->getResult(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModeloRequest $request)
    {
        
        $imagem = $request->file('imagem');
        $imagem_urn  = $imagem->store('imagens/modelos', 'public');

        try {
            Modelo::create([
                'marca_id' => $request->marca_id,
                'nome' => $request->nome,
                'imagem' => $imagem_urn,
                'numero_portas' => $request->numero_portas,
                'lugares' => $request->lugares,
                'air_bag' => $request->air_bag,
                'abs' => $request->abs
            ]); // gravação do registro
            return response()->json(['msg' => 'modelo  adicionado com sucesso !'], 201);

        } catch (\Exception $e) {
            return response()->json(['msg' =>  $e->getMessage()], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer  $modelo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = Modelo::with('marca')->find($id);
        if($modelo === null) {
            return response()->json(['erro' => 'recurso pesquisado não existe'], 404);
        }
        return response()->json($modelo, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(ModeloRequest $request, $id)
    {
        $modelo = Modelo::find($id);
        if($modelo === null) {
            return response()->json(['erro' => 'impossivel realizar a atualização. O recurso solicitado não existe'], 404);
        };
            // remove o arquivo antigo caso o novo arquivo tenha sido enviado no request
        if($request->file('imagem')) {
            Storage::disk('public')->delete($modelo->imagem);
        }
        $imagem = $request->file('imagem');
        $imagem_urn  = $imagem->store('imagens/modelos', 'public');

        try {
            Modelo::where('id', $id)
                ->update([
                    'marca_id' => $request->marca_id,
                    'nome' => $request->nome,
                    'imagem' => $imagem_urn,
                    'numero_portas' => $request->numero_portas,
                    'lugares' => $request->lugares,
                    'air_bag' => $request->air_bag,
                    'abs' => $request->abs
                ]);
            return response()->json(['msg' => 'Modelo atualiazdo com sucesso'], 200);
        } catch (\Exception $e) {
            return response()->json(['msg' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelo $request, $id)
    {
        $modelo = Modelo::find($id);
        
        if($modelo === null) {
            return response()->json(['erro' => 'impossivel realizar a exclusão. O recurso solicitado não existe'], 404);
        }

        // remove o arquivo antigo caso o novo arquivo tenha sido enviado no request
        if($request->file('imagem')) {
            Storage::disk('public')->delete($modelo->imagem);
        }

        $modelo->delete();
        return response()->json(['msg' =>'O modelo foi removida com sucesso'], 200);
    }
}
