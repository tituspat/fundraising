<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Question;

class ManageQuestionController extends Controller
{

    public function index()
    {
    	$questioncount = Question::count();
    	$question = Question::get();

        return view('pages.dashboard.question', [
        'question' => $question,
        'questioncount' => $questioncount,
        ]);

    }
}
