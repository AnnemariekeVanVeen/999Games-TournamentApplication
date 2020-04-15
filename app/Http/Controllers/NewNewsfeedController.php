<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsfeedsRequest;
use App\Newsfeed;
use Illuminate\Http\Request;

class NewNewsfeedController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('level:3');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $newsfeeds = Newsfeed::all();
        return view('dashboard.newsfeed', compact('newsfeeds'));
    }

    public function store (NewsfeedsRequest $request)
    {

        $data = $request;
        $bli = new Newsfeed();
        $bli->title = $request->title;
        $bli->article = $request->article;
        $bli->image = $request->image;

        $bli->save();

        return redirect()->back();
    }

    public function update(NewsfeedsRequest $request, Newsfeed $news)
    {
        $news = new Newsfeed();
        $news->first_name = $request->first_name;
        $news->title = $request->title;
        $news->acticle = $request->acrticle;
        $news->image = $request->image;


        if ($news->save()):
            session()->flash('msg', 'succesvol gewijzigd');
        else:
            session()->flash('alert', 'Fout tijdens het wijzigen');
        endif;

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        Newsfeed::find($id)->delete();
        return redirect()->back();
    }
}

