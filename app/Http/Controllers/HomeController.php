<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\JoiningInstruction;
use App\Models\ExamResult;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews = News::where('is_published', true)->latest()->take(3)->get();
        return view('welcome', compact('latestNews'));
    }

    public function about()
    {
        return view('about');
    }

    public function news()
    {
        $newsList = News::where('is_published', true)->latest()->get();
        return view('news.index', compact('newsList'));
    }

    public function joining()
    {
        $joiningInstructions = JoiningInstruction::where('is_active', true)->latest()->get();
        return view('joining.index', compact('joiningInstructions'));
    }

    public function results()
    {
        $examResults = ExamResult::where('is_published', true)->latest()->get();
        return view('results.index', compact('examResults'));
    }

    // Method mpya ya Contact Us Page
    public function contact()
    {
        return view('contact');
    }
}