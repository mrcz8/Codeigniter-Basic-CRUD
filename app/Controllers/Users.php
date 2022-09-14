<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\Request;

class Users extends BaseController
{

    protected $helpers = ['url', 'form', 'text', 'html'];
    
    public function index()
    {
        $users = new User();
        $data['user'] = $users->findAll();
        return view('index', $data);
    }

    public function store(){
        $users = new User();
        $usersInsert = array(
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        );

        $users->insert($usersInsert);
        return redirect()->back();
    }


    public function edit($id = null){
        $users = new User();
        $data['user'] = $users->find($id);

        return view('edit', $data);
    }

    public function update($id = null){
        $users = new User();
        $usersInsert = array(
            'name' => $this->request->getPost('name'),
        );

        $users->update($id, $usersInsert);
        return redirect()->to('/users');

    }

    public function destroy($id = null){
        $users = new User();
        $users->where('id', $id)->first();
        $users->delete($id);
        return redirect()->back();
    }
}
