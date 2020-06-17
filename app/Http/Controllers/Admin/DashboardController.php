<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Valuestore\Valuestore;
use App\Contact;


class DashboardController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function view_about_me()
    {
        return view('admin.about_me');
    }

    public function save_about_me(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $valuestore = Valuestore::make(storage_path('settings.json'));
        $valuestore->put('title', $request->title);
        $valuestore->put('description', $request->description);

        //save image
        $image = $request->file('image');
        $filename = 'about-img.' . $image->getClientOriginalExtension();
        $image->move('img/', $filename);
        $valuestore->put('image', $filename);

        flash(' information saved ')->success();
        return redirect(route('viewAboutMe'));
    }

    // contact messages
    public function view_messages()
    {
        $messages = Contact::query()->orderBy('created_at', 'desc')->get();
        return view('admin.messages', ['messages' => $messages]);
    }

    public function view_single_message(Contact $message)
    {
        return view('admin.message_single', ['message' => $message]);
    }

}
