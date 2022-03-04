<?php

namespace App\Http\Traits;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

Trait UsuarioTrait
{

    public function todos(Request $request){
        $buscar = strtoupper($request->buscar);
        return UserResource::collection(
                User::with(['persona' => function($q){
                        $q->select('id','nombres','apellidos','numero_documento');
                    },'roles'] )
                    ->where(function($query) use($buscar){
                        $query->where(DB::Raw("upper(users.name)"),'like','%'.$buscar.'%')
                        ->orWhere(DB::Raw("upper(users.email)"),'like','%'.$buscar.'%')
                        ->orwhereHas('persona',function($query) use($buscar){
                            $query->where(DB::Raw("concat(upper(nombres),' ',upper(apellidos))"),'like','%'.$buscar.'%');
                        });
                    })
                    ->paginate($request->pagina)
        );

    }

    public function habilitados(Request $request)
    {
        $buscar = strtoupper($request->buscar);
        return UserResource::collection(
                User::with(['persona' => function($q){
                        $q->select('id','nombres','apellido_paterno','apellido_materno','numero_documento');
                    },'role'] )
                    ->where(function($query) use($buscar){
                        $query->where(DB::Raw("upper(users.name)"),'like','%'.$buscar.'%')
                        ->orWhere(DB::Raw("upper(users.email)"),'like','%'.$buscar.'%')
                        ->orwhereHas('persona',function($query) use($buscar){
                            $query->where(
                            DB::Raw("concat(upper(apellido_paterno),' ',upper(apellido_materno),' ',upper(nombres))"),'like','%'.$buscar.'%');
                        })
                        ->orwhereHas('role',function($query) use($buscar){
                            $query->where(DB::Raw("upper(nombre)"),'like','%'.$buscar.'%')
                                ->orWhere(DB::Raw("upper(directriz)"),'like','%'.$buscar.'%')
                            ;
                        });
                    })
                    ->paginate($request->pagina)
                );
    }
}
