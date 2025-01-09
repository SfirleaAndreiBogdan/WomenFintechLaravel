<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:members,email',
            'profession' =>'required|string|max:255',
            'company' =>'required|string|max:255',
            'linkedin_url' =>'required|string|max:255',
        ]);

        $member = Members::create($validated);

        return redirect()->route('members.viewmembers')->with('success', 'Membru adăugat cu succes!');
    }

    public function view(){
        return view('components.add-members-form');
    }

    public function viewMembers(){

        $members = Members::simplePaginate(2);
        return view('components.members',compact('members'));
    }

    public function edit($id){
        $member = Members::findorFail($id);

        return view('components.edit-members-form',compact('member'));
    }

    public function update(Request $request, $id){

        $validated = $request->validate([
            'name' => 'string|max:255',
            'profession' =>'string|max:255',
            'company' =>'string|max:255',
            'linkedin_url' =>'string|max:255',
        ]);


        $member = Members::findorFail($id);

        if ($member) {
            $member->update($validated);
            return redirect()->route('members.viewmembers')->with('success', 'Member updated successfully!');
        } else {
            return redirect()->route('members.viewmembers')->with('error', 'Member not found');
        }
    }

    public function delete($id){
        $member = Members::findorFail($id);
        $member->delete();
        return redirect()->route('members.viewmembers')->with('success', 'Member deleted successfully!');
    }

    public function findbyEmailOrName(Request $request){

        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'linkedin_url' => [
                                'nullable',
                                'regex:/^(https?:\/\/)?(www\.)?(linkedin\.com\/(in|pub)\/[a-zA-Z0-9_-]+\/?)$/'
    ],
        ]);

        $email = $request->input('email');
        $name = $request->input('name');
        $profession = $request->input('profession');
        $company = $request->input('company');
        $status = $request->input('status');
        $linkedin_url = $request->input('linkedin_url');

        $query = Members::query();

        if ($email) {
            $query->where('email', 'like', '%' . $email . '%');
        }

        if ($name) {
            $query->where('name', 'like', '%' . $name . '%');
        }

        if ($profession) {
            $query->where('profession', 'like', '%' . $profession . '%');
        }

        if ($company) {
            $query->where('company', 'like', '%' . $company . '%');
        }

        if ($status) {
            $query->where('status', 'like', '%' . $status . '%');
        }

        if ($linkedin_url) {
            $query->where('linkedin_url', 'like', '%' . $linkedin_url . '%');
        }


        $members = $query->get();

        return view('components.filter-page',compact('members'));

    }
}
