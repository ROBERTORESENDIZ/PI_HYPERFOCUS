<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorIS;
use App\Http\Requests\validadorR;
use Illuminate\Support\Facades\DB;  //Query Builder
use Illuminate\Support\Facades\Hash;  // Para encriptar la contraseña
use Illuminate\Support\Facades\Auth;  // Para manejar la autenticación
use Illuminate\Http\Request;


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

        // Retornamos a home sin redirigir a admiUsuarios
        return redirect()->route('rutahome');
    }

    public function listarUsuarios()
    {   
        // Obtenemos todos los usuarios junto con su rol
        $usuarios = DB::table('usuarios')
            ->join('roles', 'usuarios.rol_id', '=', 'roles.id')
            ->select('usuarios.*', 'roles.nombre as tipo_perfil') // Seleccionamos el nombre del rol como tipo_perfil
            ->get();

        // Retornamos los datos a la vista
        return view('admiUsuarios', ['usuarios' => $usuarios]);
    }

    public function editarUsuario($id)
    {
        // Obtener el usuario por su ID
        $usuario = DB::table('usuarios')
            ->join('roles', 'usuarios.rol_id', '=', 'roles.id')
            ->select('usuarios.*', 'roles.nombre as tipo_perfil')
            ->where('usuarios.id', $id)
            ->first();

        // Obtener todos los roles disponibles para el selector
        $roles = DB::table('roles')->pluck('nombre', 'id');

        return view('editarUsuario', compact('usuario', 'roles'));
    }

    public function actualizarUsuario(Request $request, $id)
    {
        // Validar los datos
        $request->validate([
            'estatus' => 'required|boolean',
            'rol_id' => 'required|exists:roles,id',
        ]);

        // Actualizar los datos en la tabla
        DB::table('usuarios')
            ->where('id', $id)
            ->update([
                'estatus' => $request->estatus,
                'rol_id' => $request->rol_id,
                'updated_at' => now(),
            ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('admiUsuarios')->with('success', 'Usuario actualizado correctamente.');
    }

    public function eliminarUsuario($id)
    {
        // Buscar el usuario y eliminarlo
        $usuario = DB::table('usuarios')->where('id', $id)->first();

        if (!$usuario) {
            return redirect()->route('admiUsuarios')->withErrors(['error' => 'Usuario no encontrado.']);
        }

        DB::table('usuarios')->where('id', $id)->delete();

        // Redirigir con un mensaje de éxito
        return redirect()->route('admiUsuarios')->with('deleted', 'Usuario eliminado correctamente.');
    }

}

