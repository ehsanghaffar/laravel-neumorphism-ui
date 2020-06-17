<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use App\Contact;

class SiteController extends Controller
{
    public function home()
    {
        $portfolios = Portfolio::query()->orderBy('created_at', 'desc')->get();
        
        return view('site.home', ['portfolios' => $portfolios]);
    }
    public function portfolio_detail(Portfolio $portfolio)
    {
        return view('site.portfolio', ['portfolio' => $portfolio]);
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function submit_contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->except('_token'));

        flash('Your Message Send')->success();
        return redirect()->route('viewContactPage');
    }

}   
