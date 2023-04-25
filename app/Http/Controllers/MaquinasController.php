<?php

namespace App\Http\Controllers;

use App\Models\Maquinas;
use Illuminate\Http\Request;



class MaquinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['maquinas']=Maquinas::paginate(5);
        return view('maquinas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('maquinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          
      $campos= [
'Proveedor'=>'required|string|max:100',
'Concepto'=>'required|string|max:100',
'Importe'=>'required|string|max:100',
'Moneda'=>'required|string|max:100',
'CentrodeCosto'=>'required|string|max:100',
'MaquinaUnidad'=>'required|string|max:100',
'Factura'=>'required|string|max:100',
'OrdendeCompra'=>'required|string|max:100',
'OrdendeTrabajo'=>'required|string|max:100',
'StatusPago'=>'required|string|max:100',
'FolioPago'=>'required|string|max:100',
      ];

      $mensaje=[

        'required'=>'El  :attribute es requerido'
      ];


$this->validate($request,$campos,$mensaje);



        $datosMaquina=request()->except('_token');
        Maquinas::insert ($datosMaquina);
      //  return response()->json($datosMaquina);
      return redirect('maquinas')->with('mensaje','Maquina agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maquinas  $maquinas
     * @return \Illuminate\Http\Response
     */
    public function show(Maquinas $maquinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maquinas  $maquinas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $maquinas=Maquinas::findOrFail($id);
        return view('maquinas.edit', compact('maquinas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maquinas  $maquinas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $campos= [
            'Proveedor'=>'required|string|max:100',
            'Concepto'=>'required|string|max:100',
            'Importe'=>'required|string|max:100',
            'Moneda'=>'required|string|max:100',
            'CentrodeCosto'=>'required|string|max:100',
            'MaquinaUnidad'=>'required|string|max:100',
            'Factura'=>'required|string|max:100',
            'OrdendeCompra'=>'required|string|max:100',
            'OrdendeTrabajo'=>'required|string|max:100',
            'StatusPago'=>'required|string|max:100',
            'FolioPago'=>'required|string|max:100',
                  ];
            
                  $mensaje=[
            
                    'required'=>'El  :attribute es requerido'
                  ];
            
            
            $this->validate($request,$campos,$mensaje);
            




        $datosMaquina=request()->except(['_token','_method']);
        Maquinas::where('id','=',$id)->update($datosMaquina);

        $maquinas=Maquinas::findOrFail($id);
        return view('maquinas.edit', compact('maquinas'));
      // return redirect('maquinas')->with('mensaje','maquina modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maquinas  $maquinas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Maquinas::destroy($id);
        return redirect('maquinas')->with('mensaje','maquina eliminada con exito');

    }
}
