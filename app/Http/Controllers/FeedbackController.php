<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function sendFeedback(Request $request){

        Feedback::create(['feedback' => $request->feedback]);
        return back()->with('Success', 'Your feedback has been successfully sended!');
    }
}
