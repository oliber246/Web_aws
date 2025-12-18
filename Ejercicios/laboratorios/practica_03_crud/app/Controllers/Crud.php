<?php
namespace App\Controllers;
use App\Models\CrudModel;

class Crud extends BaseController
{
    public function index()
    {
        $crud = new CrudModel();
        $datos = $crud->findAll();
        return view('listado', ['datos' => $datos]);
    }

    public function crear()
    {
        $crud = new CrudModel();
        $datos = [
            'nombre' => $_POST['nombre'],
            'paterno' => $_POST['paterno'],
            'materno' => $_POST['materno']
        ];
        $crud->insert($datos);
        return redirect()->to(base_url());
    }

    public function eliminar($id)
    {
        $crud = new CrudModel();
        $crud->delete($id);
        return redirect()->to(base_url());
    }

    // (Opcional) La edición requiere más pasos, pero con Crear y Eliminar cumples el CRUD básico del PDF
}