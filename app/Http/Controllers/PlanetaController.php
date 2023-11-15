<?php

namespace App\Http\Controllers;

use App\Models\equipo;
use App\Models\mision;
use App\Models\mision_superheroe;
use App\Models\planeta;
use App\Models\poderes_superheroe;
use App\Models\superheroe;
use App\Models\superpoder;
use App\Models\tmision;
use Illuminate\Http\Request;

class PlanetaController extends Controller
{
    public function getplanetas(){
        $planetas = planeta::all();
        return $planetas;
    }

    public function putplaneta(Request $request,$id){
        $planeta = planeta::find($id);
        $planeta->planeta = $request->planeta;
        $planeta->save();
        return $planeta;
    }

    public function postplaneta(Request $request){
        $planeta = new planeta();
        $planeta->planeta = $request->planeta;
        $planeta->save();
        return $planeta;
    }

    public function deleteplaneta($id){
        $planeta = planeta::find($id);
        $planeta->delete();
    }


    public function getequipo(){
        $equipos = equipo::all();
        return $equipos;
    }
    public function putequipo(Request $request,$id){
        $equipo = equipo::find($id);
        $equipo->equipo = $request->equipo;
        $equipo->save();
        return $equipo;
    }
    public function postequipo(Request $request){
        $equipo = new equipo();
        $equipo->equipo = $request->equipo;
        $equipo->save();
        return $equipo;
    }
    public function deleteequipo($id){
        $equipo = equipo::find($id);
        $equipo->delete();
    }


    public function gettmisiones(){
        $tmisiones = tmision::all();
        return $tmisiones;
    }

    public function puttmision(Request $request,$id){
        $tmision = tmision::find($id);
        $tmision->tipo_mision = $request->tipo_mision;
        $tmision->save();
        return $tmision;
    }

    public function posttmision(Request $request){
        $tmision = new tmision();
        $tmision->tipo_mision = $request->tipo_mision;
        $tmision->save();
        return $tmision;
    }

    public function deletetmision($id){
        $tmision = tmision::find($id);
        $tmision->delete();
        
    }


    public function getsuperpoderes(){
        $superpoderes = superpoder::all();
        return $superpoderes;
    }

    public function putsuperpoder(Request $request,$id){
        $superpoder = superpoder::find($id);
        $superpoder->super_poder = $request->super_poder;
        $superpoder->save();
        return $superpoder;
    }
    
    public function postsuperpoder(Request $request){
        $superpoder = new superpoder();
        $superpoder->super_poder = $request->super_poder;
        $superpoder->save();
        return $superpoder;
    }

    public function deletesuperpoder($id){
        $superpoder = superpoder::find($id);
        $superpoder->delete();
    }


    public function getmisiones(){
        $misiones = mision::all();
        return $misiones;
    }

    public function putmision(Request $request,$id){
        $mision = mision::find($id);
        $mision->mision = $request->mision;
        $mision->tmision_id = $request->tmision_id;
        return $mision;
    }

    public function postmision(Request $request){
        $mision = new mision();
        $mision->mision = $request->mision;
        $mision->tmision_id = $request->tmision_id;
        return $mision;
    }

    public function deletemision($id){
        $mision = mision::find($id);
        $mision->delete();
    }


    public function getsuperheroes(){
        $superheroes = superheroe::all();
        return $superheroes;
    }

    public function putsuperheroe(Request $request,$id){
        $superheroe = superheroe::find($id);
        $superheroe->nombre = $request->nombre;
        $superheroe->año = $request->año;
        $superheroe->planeta_id = $request->planeta_id;
        $superheroe->quipo_id = $request->equipo_id;
        $superheroe->save();
        return $superheroe;
    }
    
    public function postsuperheroe(Request $request){
        $superheroe = new superheroe();
        $superheroe->nombre = $request->nombre;
        $superheroe->año = $request->año;
        $superheroe->planeta_id = $request->planeta_id;
        $superheroe->quipo_id = $request->equipo_id;
        $superheroe->save();
        return $superheroe;
    }

    public function deletesuperheroe($id){
        $superheroe = superheroe::find($id);
        $superheroe->delete();
    }


    public function getmisionsuperheroes(){
        $mision_superheroes = mision_superheroe::all();
        return $mision_superheroes;
    }

    public function putmisionsuperheroe(Request $request,$id){
        $mision_superheroe = mision_superheroe::find($id);
        $mision_superheroe->superheroe_id = $request->superheroe_id;
        $mision_superheroe->mision_id = $request->mision_id;
        $mision_superheroe->save();
        return $mision_superheroe;
    }
    
    public function postmisionsuperheroes(Request $request){
        $mision_superheroe = new mision_superheroe();
        $mision_superheroe->superheroe_id = $request->superheroe_id;
        $mision_superheroe->mision_id = $request->mision_id;
        $mision_superheroe->save();
        return $mision_superheroe;
    }

    public function deletemision_superheroe($id){
        $mision_superheroe = mision_superheroe::find($id);
        $mision_superheroe->delete();
    }


    public function getpoderesheroes(){
        $poder_superheroes = poderes_superheroe::all();
        return $poder_superheroes;
    }

    public function putpoderheore(Request $request,$id){
        $poder_superheroe = poderes_superheroe::find($id);
        $poder_superheroe->superheroe_id = $request->superheroe_id;
        $poder_superheroe->superpoder_id = $request->superpoder_id;
        $poder_superheroe->save();
        return $poder_superheroe;
    }
    
    public function pospoderheroe(Request $request){
        $poder_superheroe = new poderes_superheroe();
        $poder_superheroe->superheroe_id = $request->superheroe_id;
        $poder_superheroe->superpoder_id = $request->superpoder_id;
        $poder_superheroe->save();
        return $poder_superheroe;
    }

    public function deletepoderheroe($id){
        $poder_superheroe = poderes_superheroe::find($id);
        $poder_superheroe->delete();
    }
}
