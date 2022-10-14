<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Auth\Events\Validated;

class MemberController extends Controller
{
    public function top() {

        $member = Member::all();

        return view('top')->with([
            'member' => $member,
        ]);
    }

    public function register() {
        
        return view('register');
    }

    public function memberRegister(Request $request) {
        
        $member = new Member();
        $member->name = $request->name;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->save();

        return redirect('/top');

    }


    public function edit(Request $request) {

        $member = Member::where('id', '=', $request->id)->first();
        
        return view('edit')->with([
            'member' => $member,
        ]);
    }

    public function memberEdit(Request $request) {

        $member = Member::where('id', '=', $request->id)->first();
        $member->name = $request->name;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->save();

        return redirect('/top');
    }


    public function memberDelete(Request $request) {

        $member = Member::where('id', '=', $request->id)->first();
        $member->delete();

        return redirect('/top');

    }

}