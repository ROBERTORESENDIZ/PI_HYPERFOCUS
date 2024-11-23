<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorIS;
use App\Http\Requests\validadorR;
use Illuminate\Support\Facades\DB;  //Query Builder
use Illuminate\Support\Facades\Hash;  // Para encriptar la contraseña
use Illuminate\Support\Facades\Auth;  // Para manejar la autenticación

class inicioSController extends Controller
{
    public function iniciarsesion(validadorIS $request)
    {
        // Comprobamos si el correo electrónico existe
        $usuario = DB::table('usuarios')->where('correo_electronico', $request->email)->first();

        // Si no existe, mostramos un error
        if (!$usuario) {
            return back()->withErrors([
                'email' => 'Este correo electrónico no está registrado.'
            ]);
        }

        // Comprobamos si la contraseña ingresada es correcta
        if (!Hash::check($request->password, $usuario->contraseña)) {
            return back()->withErrors([
                'password' => 'La contraseña es incorrecta.'
            ]);
        }

        return redirect()->route('rutahome');
    }

    public function registrarse(validadorR $request)
    {
        // Comprobamos si el correo ya está registrado
        $usuarioExistente = DB::table('usuarios')
            ->where('correo_electronico', $request->email)
            ->first();

        if ($usuarioExistente) {
            // Si ya existe, redirigimos con un error
            return back()->withErrors([
                'email' => 'Este correo electrónico ya está registrado.'
            ]);
        }

        // Si no existe, creamos el nuevo usuario
        DB::table('usuarios')->insert([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo_electronico' => $request->email,
            'contraseña' => Hash::make($request->password),  // Encriptamos la contraseña
            'foto_perfil' => '',  
            'edad' => 18,  //valor predeterminado 
            'rol_id' => 2,  //rol por defecto
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Redirigimos al home después de un registro exitoso
        return redirect()->route('rutahome');
    }
}

