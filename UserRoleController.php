<?php

namespace App\Controller;

use App\Model\UserRoleModel;
use App\Rule\ControllerInterface;
use Core\View;

class UserRoleController implements ControllerInterface {
    
    public function index()
    {
        $users = UserRoleModel::all();

        View::render('roles/show.php', ['users' => $users]);
    }

    
    public function get()
    {
       
        $user = UserRoleModel::find($_GET['id'])[0];

        View::render('roles/get.php', ['user' => $user]);
    }

    public function show()
    {
       
    }

    public function edit()
    {
        
    }

    public function store()
    {
       
    }

    public function update()
    {
       
    }

    public function delete()
    {
        
    }
}