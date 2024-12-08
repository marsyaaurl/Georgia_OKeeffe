<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership;
use App\Models\User;
use Carbon\Carbon;

class MembershipController extends Controller
{
    public function joinMembership(Request $request)
    {
        $user = auth()->user();

        if (!$user->is_member) {
            Membership::create([
                'user_id' => $user->id,
                'starts_at' => now(),
                'expires_at' => now()->addYear(),
            ]);

            return redirect(route('account'))->with('success', 'Congratulations, you have registered as a member!');
        }

        return redirect()->route('account')->with('info', 'You are already a member.');
    }
}
