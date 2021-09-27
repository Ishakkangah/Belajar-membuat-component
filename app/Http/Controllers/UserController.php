<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(6);
        return view('user.index', compact('users'));
    }

    public function show(User $User)
    {
        return view('user.show', compact('User'));
    }

    public function edit(User $User)
    {
        return view('user.edit', compact('User'));

    }

    public function update(Request $Request, User $User)
    {   
        request()->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'thumbnail' => 'nullable|mimes:jpg,png,jpeg|max:2048'
        ]);

        $name = request('name');
        $thumbnail = request()->file('thumbnail');

        if(request()->file('thumbnail')) 
        {
            \Storage::delete($User->thumbnail);
            $thumbnail = request()->file('thumbnail')->storeAs("images/post", "{$name}.{$thumbnail->extension()}");
        } else {
            $thumbnail = $User->thumbnail;
        }
        
        $attr = $Request->all();
        $attr['thumbnail'] = $thumbnail;
        $attr['name'] = $name;
        $attr['email'] = Request('email');

        $User->update($attr);
        return redirect('user')->with('status', 'berhasil diupdate');
    }
}