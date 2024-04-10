<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{



    public function show(User $user)
    {
        $users = User::all();
        $nfts = $user->nfts; // Уберите скобки ()
        return view('max.colect.home', compact('user', 'users', 'nfts'));
    }


    public function edit(User $user)
    {
        if (auth()->id() !== $user->id) {
            abort(404);
        }
        $editing = true;
        $ideas = $user->ideas()->paginate(5);
        return view('users.show', compact('user', 'ideas', 'editing'));
    }
    public function update(User $user)
    {



        // if (request()->has('image')) {
        //     $imagePath = request()->file('image')->store('profile', 'public');
        //     $request['image'] = $imagePath;

        //     Storage::disk('public')->delete($user->image ?? '');
        // }

        // $user->update($request);
        return redirect()->route('profile')->with('message', 'Profile Successfully updated');
    }
    public function profile(User $user)
    {
        return $this->show(auth()->user());
    }
}
