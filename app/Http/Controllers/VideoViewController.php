<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoM;
use App\Models\VideoCommentM;

class VideoViewController extends Controller
{

    public function show(string $id)
    {
        $video_one = VideoM::find($id);
        return view('/videoOne.show')->with('video_one', $video_one);    
    }

    public function store(Request $request){
        $this->validate($request, [
            'commenter' => 'required',
            'video_id' => 'required',
            'comment' => 'required',
            'is_private' => 'required',
        ]);

        $video_comment = new VideoCommentM;
        $video_comment->commenter = $request->commenter;
        $video_comment->video_id = $request->video_id;
        $video_comment->comment = $request->comment;
        $video_comment->is_private = $request->is_private;

        


        return redirect()->back();
    }

}
