<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OneToOne extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('one_to_one.index', compact('users'));
    }

    public function create()
    {
        return view('one_to_one.create');
    }

    public function store(Request $request, User $user)
    {
        $user = User::create($request->all());
        $user->phone()->create([
            'phone' => $request->phone
        ]);
        return redirect(url('/ont-to-one'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('one_to_one.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        $user->phone()->update([
            'phone' => $request->phone
        ]);
        return redirect(url('/ont-to-one'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->phone()->delete();
        $user->delete($user);
        return redirect(url('/ont-to-one'));
    }


}
