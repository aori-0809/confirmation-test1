<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;



class ContactController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::all();
    //     return view('index');
    // }

    public function showForm()
    {
        $categories=Category::all();
        return view('index',compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {

        $contact=$request->only(['first_name','last_name','gender','email','tel','address','building','category_id', 'detail']);

        $contact['gender_display'] = match ($contact['gender']) {
            'men' => '男',
            'women' => '女',
            'others' => 'その他',
            default => '不明',
        };
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact=$request->only(['first_name','last_name','gender','email','tel','address','building','category_id', 'detail']);

        $contact['gender'] = match ($contact['gender']) {
            'men' => 1,
            'women' => 2,
            'others' => 3,
            default => null,
            };
        Contact::create($contact);
        return view('thanks');
    }
}
