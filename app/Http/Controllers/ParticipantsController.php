<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participants;
use App\Models\User;

class ParticipantsController extends Controller
{
    public function index()
    {
        $participants = User::all();
        
        return view('participants', ['participants' => $participants]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('participants')->with('success', 'Participant supprimé avec succès.');
    }

    public function promote(User $user)
    {
        $user->is_admin = 1;
        $user->save();

        return redirect()->route('participants')->with('success', 'Participant promu en administrateur avec succès.');
    }

    public function demote(User $user)
    {
        $user->is_admin = 0;
        $user->save();

        return redirect()->route('participants')->with('success', 'Participant rétrogradé avec succès.');
    }
}
