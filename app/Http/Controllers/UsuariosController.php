<?php namespace App\Http\Controllers;

use App\Models\Usuarios as Usuarios;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
class UsuariosController extends Controller {

    public function index()
      {
        $data['usuarioss'] = Usuarios::all();
        return view('usuarios/index',$data);
      }
    public function add()
      {
        return view('usuarios/add');
      }
    public function addPost()
      {
        $usuarios_data = array(
             'user' => Input::get('user'),
             'senha' => Hash::make(Input::get('senha')),
            );
        $usuarios_id = Usuarios::insert($usuarios_data);
        return redirect('usuarios')->with('message', 'Usuarios successfully added');
    }
    public function delete($id)
    {
        $usuarios=Usuarios::find($id);
        $usuarios->delete();
        return redirect('usuarios')->with('message', 'Usuarios deleted successfully.');
    }
    public function edit($id)
    {
        $data['usuarios']=Usuarios::find($id);
        return view('usuarios/edit',$data);
    }
    public function editPost()
    {
        $id =Input::get('usuarios_id');
        $usuarios=Usuarios::find($id);

        $usuarios_data = array(
          'user' => Input::get('user'),
        );
        $usuarios_id = Usuarios::where('id', '=', $id)->update($usuarios_data);
        return redirect('usuarios')->with('message', 'Usuarios Updated successfully');
    }


    public function changeStatus($id)
    {
        $usuarios=Usuarios::find($id);
        $usuarios->status=!$usuarios->status;
        $usuarios->save();
        return redirect('usuarios')->with('message', 'Change usuarios status successfully');
    }
     public function view($id)
    {
        $data['usuarios']=Usuarios::find($id);
        return view('usuarios/view',$data);

    }
}
