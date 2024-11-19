<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Marca;
use Illuminate\Http\Request;
use App\Http\Requests\MarcaRequest;
use App\Repositories\MarcaRepository;



class MarcaController extends Controller
{

    public function __construct(Marca $marca) {
        $this->marca = $marca;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $marcaRepository = new MarcaRepository($this->marca);

        $marcas = array();
        
        if($request->has('atributes_modelo')){
            $atributes_modelo = 'modelos:id,'.$request->atributes_modelo;
            $marcaRepository->selectAtributesRegisterRelated($atributes_modelo);
        } else {
            $marcas = Marca::with('modelos');
            $marcaRepository->selectAtributesRegisterRelated('modelos');
        }
    
        if($request->has('filter')){
            $marcaRepository->filter($request->filter);
        }

        if($request->has('atributes')) {
            $atributes = $request->atributes;
            $marcaRepository->selectAtributes($request->get('atributes'));
        }

        return response()->json($marcaRepository->getResult(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcaRequest $request)
    {   

        $imagem = $request->file('imagem');
        $imagem_urn  = $imagem->store('imagens', 'public');
        
        try {
            Marca::create([
                'nome' => $request->nome,
                'imagem' => $imagem_urn
            ]);
            return response()->json(['msg' => 'marca adicionada com sucesso !'], 201);
        } catch (\Exception $e) {
            return response()->json(['msg' =>  $e->getMessage()], 422);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer  $marca
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca = Marca::with('modelos')->find($id);
        if($marca === null) {
            return response()->json(['erro' => 'recurso pesquisado não existe'], 404);
        }
        return response()->json($marca, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function update(MarcaRequest $request, $id)
    {

        $marca = Marca::find($id);
        // dd($request->file('imagem'));
        if($marca === null) {
            return response()->json(['erro' => 'impossivel realizar a atualização. O recurso solicitado não existe'], 404);
        }

            // remove o arquivo antigo caso o novo arquivo tenha sido enviado no request
            if($request->file('imagem')) {
                Storage::disk('public')->delete($marca->imagem);
            }

            $imagem = $request->file('imagem');
            $imagem_urn  = $imagem->store('imagens', 'public');
            
            try {
                Marca::where('id', $id)
                    ->update([
                        'nome' => $request->nome,
                        'imagem' => $imagem_urn
                    ]);
                return response()->json(['msg' => 'Marca atualizada com sucesso'], 200);
            } catch (\Exception $e) {
                return response()->json(['msg' => $e->getMessage()]);
            }

            return response()->json($marca, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $marca = Marca::find($id);
        
        if($marca === null) {
            return response()->json(['erro' => 'impossivel realizar a exclusão. O recurso solicitado não existe'], 404);
        }

        // remove o arquivo antigo caso o novo arquivo tenha sido enviado no request
        if($request->file('imagem')) {
            Storage::disk('public')->delete($marca->imagem);
        }

        $marca->delete();
        return response()->json(['msg' =>'A marca foi removida com sucesso'], 200);
    }
}
