<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
      event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
     public function index()
        {
            $users = User::all();
            return view('admin.listeUtilisateur')->with('users', $users);
        
          }
    public function destroy($id)
        {
          $user = User::findOrFail($id);
           $user->delete();

             return redirect()->back()->with('success', 'L\'enregistrement a été supprimé avec succès.');
        }

        public function edit($id)
{
    $user = User::findOrFail($id);

    return view('admin.attribuerRoleAgent')->with('user', $user);
}
public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|string',
        'role' => 'string',
        // Ajoutez ici les autres champs que vous souhaitez mettre à jour
    ]);

    $user->update($data);

    return redirect()->back()->with('success', 'L\'enregistrement a été mis à jour avec succès.');
}
    
}
