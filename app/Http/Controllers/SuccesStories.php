<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\SuccesStories as ModelsSuccesStories;
use Illuminate\Http\Request;

class SuccesStories extends Controller
{
    public function view(){
        $stories = ModelsSuccesStories::with('member')->get();
        return view('components.stories',compact('stories'));
    }

    public function viewAddStory(){
        $members = Members::all();
        return view('components.addstory',compact('members'));
    }


    public function addStory(Request $request){

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'story' => 'required|string|max:255',
            'member_id' => 'required|integer|exists:members,id',
        ]);


        $story = ModelsSuccesStories::create($validated);

        return redirect()->route('stories.view')->with('success', 'Poveste adăugată cu succes!');

    }
}
