<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;

use function PHPUnit\Framework\isEmpty;

class PreguntaController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showMedio()
    {
        //Sacamos todas las preguntas del grado medio
        $preguntas = Pregunta::where('ciclo', 'Laboratorio')
                            ->orWhere('ciclo', 'Telecomunicaciones')
                            ->orWhere('ciclo',  'Soldadura')
                            ->orWhere('ciclo', 'GAdministrativa')
                            ->get(); 
        
        $preguntas_desordenadas = $preguntas->shuffle(); //Desordenamos

        //Pintamos la vista preguntas con las preguntas del grado medio
        return view('cuest-gmedio', [ 'preguntas' => $preguntas_desordenadas->all() ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSuperior()
    {
        //Sacamos todas las preguntas del grado medio
        $preguntas = Pregunta::where('ciclo', 'DAW')
                            ->orWhere('ciclo', 'Turismo')
                            ->orWhere('ciclo', 'ConstruccionesMetalicas')
                            ->get(); 
        
        $preguntas_desordenadas = $preguntas->shuffle(); //Desordenamos

        //Pintamos la vista preguntas con las preguntas del grado medio
        return view('cuest-gsuperior', [ 'preguntas' => $preguntas_desordenadas->all() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createRespuestas(Request $request)
    {
        //$errores = "";

        //Validación de los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email',
        ]);

        try {

            //Comprobar que el usuario existe y ya ha rellenado encuenta
            $usuario = User::where('email', $request->email)->first();

            if (!is_null($usuario)) {
                //Comprobar que hay respuestas de ese usuario para este año
                $respuesta = Respuesta::where('year', date("Y"))
                                        ->where('user_id',$usuario->id)->first();

                if (!is_null($respuesta)) {
                    return redirect()->back()->withErrors(['Usuario ya ha realizado encuesta']);
                } 
                
            } else {                
                $usuario = new User;
                $usuario->name = $request->nombre;
                $usuario->surname = $request->apellidos;
                $usuario->curso = $request->curso;
                $usuario->email = $request->email;
                $usuario->password = '12345678';
                $usuario->save();
            }
           
            //INSERTAR TODAS LAS RESPUESTAS
            //Sacamos todas las keys de las respuestas contestadas
            $keys = array_keys($request->all());
            foreach($keys as $key) {
                //Comprobamos que la key tenga la palabra 'pregunta'
                if (str_contains($key, "pregunta")) {
                    //Sacamos el id de la pregunta
                    $id_pregunta = substr($key,8);
                    
                    //Sacamos el valor de la respuesta
                    $value_respuesta = $request->input($key);

                    //Insertamos la respuesta
                    $respuesta = new Respuesta;
                    $respuesta->user_id = $usuario->id;
                    $respuesta->pregunta_id = $id_pregunta;
                    $respuesta->respuesta = $value_respuesta;
                    $respuesta->year = date("Y");
                    $respuesta->save();
                }
            }

        } catch (Exception $e) {
            Log::error("Error en BD insertando encuesta ".$e->getMessage());
            return "ERROR INSERTANDO ENCUESTA ".$e->getMessage()." ".$errores;
        }

        //echo $errores;
        return redirect('/realizada');
    }



}
