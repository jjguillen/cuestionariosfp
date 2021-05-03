<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function interesadosPorCiclo(Request $request)
    {
        /*
        SELECT cuestionariosfp.users.email, cuestionariosfp.respuestas.respuesta 
FROM cuestionariosfp.respuestas INNER JOIN cuestionariosfp.users 
ON cuestionariosfp.respuestas.user_id = cuestionariosfp.users.id
INNER JOIN cuestionariosfp.preguntas
ON cuestionariosfp.respuestas.pregunta_id = cuestionariosfp.preguntas.id
WHERE cuestionariosfp.preguntas.ciclo = 'Laboratorio' 
AND cuestionariosfp.respuestas.year = 2021
ORDER BY cuestionariosfp.users.id;
        */

        //Sacar año y ciclo del request
        $year = $request->year;
        $ciclo = $request->ciclo;

        $interesados = array();

        $respuestas = DB::table('respuestas')
            ->join('users', 'users.id', '=', 'respuestas.user_id')
            ->join('preguntas', 'preguntas.id', '=', 'respuestas.pregunta_id')
            ->select('users.*', 'respuestas.respuesta')
            ->where('preguntas.ciclo', $ciclo)
            ->where('respuestas.year', $year)
            ->orderBy('users.id')
            ->get();

        //Ahora tenemos que ir sumando las respuestas por usuario
        $usuario = "";
        $total = 0;
        foreach($respuestas as $interesado) {
            if ($usuario == $interesado->email) {
                switch ($interesado->respuesta) {
                    case 'A':
                        $valor=2;
                        break;
                    case 'B':
                        $valor=1;
                        break;
                    case 'C':
                        $valor=-1;
                        break;
                    case 'D':
                        $valor=0;
                        break;
                                                            
                    default:
                        # code...
                        break;
                }

                $total += $valor;

            } else { //Si el usuario no coincide cambiamos y empezamos a calcular
                //Vemos el total del usuario anterior, si es mayor que 10 está interesado
                if ($total > 10) {
                    array_push($interesados, $interesado->name." ".$interesado->surname.", ".
                                             $usuario.", ".$interesado->curso);    
                }
                //echo "FINAL- ".$usuario." - ".$total."<br>";

                //Cambiamos de usuario
                $total = 0;
                $usuario = $interesado->email;
            }

            //echo $interesado->email." - ".$interesado->respuesta." total: ".$total."<br>";
        }

        //Vemos el total del usuario anterior, si es mayor que 10 está interesado
        if ($total > 10) {
            array_push($interesados, $interesado->name.", ".$usuario.", ".$interesado->curso);    
        }
        //echo "FINAL- ".$usuario." - ".$total."<br>";

        //Pintamos la vista preguntas con las preguntas del grado medio
        return view('interesados', [ 'interesados' => $interesados, 
                                     'ciclo' => $ciclo,
                                     'year' => $year
                                      ]);
    }
}
