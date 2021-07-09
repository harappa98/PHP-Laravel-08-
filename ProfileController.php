<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

//【応用】 Admin/ProfileControllerに、 add, create, edit, update それぞれのActionを追加
    
public function add()
{
    return view('admin.profile.create');
}

public function create()
{
    return redirect('admin/profile/create');
}

public function edit()
{
    return view('admin.profile.edit');
}

public function update()
{
    return redirect('admin/profile/edit');
}




    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
