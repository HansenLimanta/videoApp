<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function uploadVideo(Request $request){
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);
        $video = new Video();
        $video->title = $request->title;
        if ($request->hasFile('video'))
        {
            $path = $request->file('video')->store('videos', ['disk' => 'my_files']);
            $video->video = $path;
        }
        $video->save();

        return redirect('/');
    }

    public function index(){
        return view('listvideo', [
            'videos' => Video::all()
        ]);
    }
}
