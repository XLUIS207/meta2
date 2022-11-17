<?php

namespace App\Http\Controllers;

use App\Models\{Mensajes, Provincia, Distrito, Departamento};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeContacto;
use App\Mail\MensajeHome;
use App\Mail\MensajeReclamo;
use Illuminate\Support\Facades\Crypt;
use PDF;
class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::pluck('descripcion', 'id');
        $provincias = Provincia::pluck('descripcion', 'id');
        $distritos = Distrito::pluck('descripcion', 'id');

        return view('contacto.reclamos', compact('departamentos','provincias', 'distritos'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mail = request()->validate([
             'name' => 'required',
             'phone' => 'required|integer',
             'email' => 'required|email',
             'subject' => 'required',
             'message' => 'required'
        ]);
        Mail::to('info@blueadministradora.com')->send(new MensajeContacto($mail));

        return 'mensaje enviado';
    }

    public function msg(Request $request)
    {
        $correo = request()->validate([
             'name' => 'required',
             'phone' => 'required|integer',
             'email' => 'required|email',
        ]);
        Mail::to('info@blueadministradora.com')->send(new MensajeHome($correo));

        return 'mensaje enviado';
    }

    public function reclamo(Request $request)
    {
        $mensaje = Mensajes::create($request->all());
        $mensaje_id = Crypt::encrypt ($mensaje->id);
        // $url = "https://blueadministradora.com/Consultas".$mensaje_id;
        $url = "http://web-blue.test/Consultas".$mensaje_id;
        $request->request->set('url_pdf', $url);
        $reclamo = $request;
        Mail::to('luis9552@outlook.com')->send(new MensajeReclamo($reclamo));
        Mail::to('luis9552.lb@gmail.com')->send(new MensajeReclamo($reclamo));
        return 'mensaje enviado';
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function show(Mensajes $mensajes)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensajes $mensajes)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensajes $mensajes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mensajes  $mensajes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensajes $mensajes)
    {
        //
    }


    public function provincias(Request $request, $id)
    {
        $provincia = Provincia::getProvincias($id);
        return response()->json($provincia);
    }

    public function distritos(Request $request, $id)
    {
        $distrito = Distrito::getDistritos($id);
        return response()->json($distrito);
    }

    public function generatePDF($id)
    {
        $temporal = Crypt::decrypt($id);
        $mensaje = Mensajes::find($temporal);
        // $mensaje = Mensajes::where('id',$temporal)->get();
        $PDF = PDF::loadView('pdf.show', compact('mensaje'));
        return $PDF->stream('libro.pdf');
        // return view('pdf.show', compact('mensaje'));
    }

}
