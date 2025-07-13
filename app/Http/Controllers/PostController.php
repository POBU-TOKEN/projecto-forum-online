<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class PostController extends Controller
{
    public function create(){
        return view('post.create');
    }

    public function store(Request $request): RedirectedResponse {
        $request->validate([
            'content' => 'required:text',
            'author' => 'required:integer',
            'topic_id' => 'required:integer',
        ]);

        User::create([
            'content' => $request->content,
            'author' => $request->author,
            'topic_id' => $request->topic_id
        ])->save();
    }
}
