<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy("created_at", 'desc')->limit(3)->get();

        return view('welcome', [
            "blogs" => $blogs,
        ]);
    }

    public function showContactForm()
    {
        return view("contact_form");
    }

    public function contactForm(ContactFormRequest $request)
    {
        Mail::to("maxiksokol.com@mail.ru")->send(new ContactForm($request->validated()));

        return redirect(route("contacts"));
    }
}
