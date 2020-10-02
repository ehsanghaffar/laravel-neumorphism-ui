<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use App\portfolio;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function portfolios()
    {
        $portfolios = Portfolio::query()->orderBy('created_at', 'desc')->get();
        return view('admin.portfolios.list', ['portfolios' => $portfolios]);

    }

    // add Portfolio view
    public function view_add()
    {
        return view('admin.portfolios.add');
    }

    // add Portfolio
    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'rank' => ['required' , Rule::in(['1','2','3','4','5'])],
            'client' => 'required',
            'link' => 'required',
            'completion_date' => 'required',
            'content' => 'required',
        ]);

        $portfolio = Portfolio::query()->create([
            'title' => $request->title,
            'image' => 'test',
            'description' => $request->description,
            'rank' => $request->rank,
            'client' => $request->client,
            'link' => $request->link,
            'completion_date' => Jalalian::fromFormat('Y/m/d',$request->completion_date)->toCarbon(),
            'content' => \request('content'),
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);

        $image = $request->file('image');
        $filename = $portfolio->id .'_'. time() .'.'. $image->getClientOriginalExtension();
        $image->move('portfolios', $filename);
        $portfolio->image = $filename;
        $portfolio->save();

        flash('Portfolio added successfully')->success();
        return redirect(route('viewAddPortfolio'));
    }

    // edit portfolio view
    public function view_edit(Portfolio $portfolio) {
        return view('admin.portfolios.edit', ['portfolio' => $portfolio]);
    }

    // edit portfolio
    public function edit(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'rank' => ['required', Rule::in(['1', '2', '3', '4', '5'])],
            'client' => 'required',
            'link' => 'required',
            'completion_date' => 'required',
            'content' => 'required',
        ]);

        $portfolio->update([
            'title' => $request->title,
            'description' => $request->description,
            'rank' => $request->rank,
            'client' => $request->client,
            'link' => $request->link,
            'completion_date' => Jalalian::fromFormat('Y/m/d', $request->completion_date)->toCarbon(),
            'content' => \request('content'),
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);

        if ($request->hasFile('image')){
            File::delete(public_path().'/portfolio/'.$portfolio->image);

            $image = $request->file('image');
            $filename = $portfolio->id . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('portfolios', $filename);
            $portfolio->image = $filename;
            $portfolio->save();

        }

        flash('Portfolio update')->success();
        return redirect(route('viewListPortfolios'));
    }
    public function delete(Portfolio $portfolio)
    {
        File::delete(public_path().'/portfolios/'.$portfolio->image);
        $portfolio->delete();

        flash('Portfolio deleted')->warning();
        return redirect(route('viewListPortfolios'));
    }

}
