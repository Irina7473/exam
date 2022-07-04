<?php

namespace App\Http\Controllers;

use App\Models\Sound;
use App\Models\Topic;
use Illuminate\Http\Request;

class SoundController extends Controller
{
    public function index()
    {

        return view('admin.sounds.index', [
            'sounds' => Sound::all(),
        ]);
    }

    public function sounds()
    {
        return view('admin.sounds.index', [
            'sounds' => Sound::all(),
        ]);
    }

    public function create()
    {
        return view('admin.sounds.create-sound', [
            'sounds' => Sound::all(),
            'topics' => Topic::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'topic' => ['required'],
            'title' => ['required', 'max:100'],
        ]);

        $sound = Sound::create([
            'topic_id' => $request->topic,
            'title' => $request->title,
            'content' => $request->input('content'),
        ]);

        $sound->uploadFile ($request->file('file_path'));

        return redirect()->route('sounds.index');
    }

    public function show($topic_id)
    {
        $topic = Topic::find($topic_id);
        return view('layouts.show-sound', [
            'topics' => Topic::all(),
            'sounds' => $topic->sounds,
        ]);
    }

    public function edit($id)
    {
        return view('admin.sounds.edit-sound', [
            'sounds' => Sound::find($id),
            'topics' => Topic::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'topic' => ['required'],
            'title' => ['required', 'max:100'],
        ]);
        $sound = Sound::find($id);
        $sound->update($request->all());
        $sound->uploadFile ($request->file('file_path'));
        return redirect()->route('sounds.index');
    }

    public function destroy($id)
    {
        $sound = Sound::find($id);
        $sound->delete();
        return back();
    }
}
