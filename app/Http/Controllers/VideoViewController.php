<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoM;

class VideoViewController extends Controller
{

    public function show(string $id)
    {
        $video = VideoM::find($id);
        return view('/videoOne.show')->with('video', $video);    
    }

    public function update(Request $request, string $id)
    {

    }

}
