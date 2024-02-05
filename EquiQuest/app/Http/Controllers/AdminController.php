<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Horse;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showUsers()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:Admin,Stable Manager,Customer',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        $user->save();

        return redirect()->route('admin.users')->with('success', 'User created successfully!');
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|string|in:Admin,Stable Manager',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;

        $user->save();

        return redirect()->route('admin.users')->with('success', 'User updated successfully!');
    }

    public function deleteUser($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully!');
    }

    // Horses CRUD functions
    public function listHorses()
    {
        $horses = Horse::all();
        return view('admin.horses.index', compact('horses'));
    }

    public function showHorse($id)
    {
        $horse = Horse::findOrFail($id);
        return view('admin.horses.show', compact('horse'));
    }

    public function createHorse()
    {
        return view('admin.horses.create');
    }

    public function storeHorse(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'breed' => 'required',
            'training_status' => 'required',
        ]);

        Horse::create($request->all());

        return redirect()->route('admin.horses.index')
            ->with('success', 'Horse created successfully');
    }

    public function editHorse($id)
    {
        $horse = Horse::findOrFail($id);
        return view('admin.horses.edit', compact('horse'));
    }

    public function updateHorse(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'breed' => 'required',
            'training_status' => 'required',
        ]);

        $horse = Horse::findOrFail($id);
        $horse->update($request->all());

        return redirect()->route('admin.horses.index')
            ->with('success', 'Horse updated successfully');
    }

    public function deleteHorse($id)
    {
        $horse = Horse::findOrFail($id);
        $horse->delete();

        return redirect()->route('admin.horses.index')
            ->with('success', 'Horse deleted successfully');
    }
}
