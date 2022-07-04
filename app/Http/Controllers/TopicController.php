<?php

namespace App\Http\Controllers;

use App\Models\Sound;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function siteindex()
    {
        return view('layouts.index', [
            'topics' => Topic::all(),
        ]);
    }

    public function index()
    {
        $topics= Topic::all();
        return view('admin.topics.index', [
            'topics' => $topics,
        ]);
    }

    public function create()
    {
        return view('admin.topics.create-topic');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:2', 'max:50'],
        ]);

        Topic::create($request->all());

        return redirect('/');
    }

    public function show($id)
    {
       //
    }

    public function edit($id)
    {
        $topic = Topic::find($id);

        return view('admin.topics.edit-topic', [
            'topic' => $topic
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
        ]);

        $topic = Topic::find($id);
        $topic->update($request->all());

        return back();
    }

    public function destroy($id)
    {
        $topic = Topic::find($id);
        $topic->delete();

        return back();
    }
}
