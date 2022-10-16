<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Validator;

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
        $this->validator($request->all())->validate();
        $member = new Member();
        $member->name = $request->name;
        $member->tel = $request->tel;
        $member->email = $request->email;
        $member->save();

        return redirect('/top');

    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'tel' => ['required','digits_between:10,11'],
            'email' => ['required', 'string', 'email', 'max:255']
        ]);
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