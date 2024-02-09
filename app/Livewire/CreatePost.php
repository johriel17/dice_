<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Http\Request;

class CreatePost extends Component
{
    public $title = '';
    public $content = '';
    public $date = '';

    protected $rules = [
        'title' => 'required|string',
        'content' => 'required|string',
        'date' => 'required|date'
    ];

    public function render()
    {
        return view('livewire.create-post');
    }

    public function save(Request $request){

        $validatedData = $this->validate();

        Post::create($validatedData);

        $request->session()->flash('flash.banner', 'Post added successfully!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return $this->redirect('/posts', navigate:true);
        // dd($this->all());
    }
}