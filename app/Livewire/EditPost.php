<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Post;
class EditPost extends Component
{

    public $post;
    public $title;
    public $content;
    public $date;

    protected $rules = [
        'title' => 'required|string',
        'content' => 'required|string',
        'date' => 'required|date'
    ];

    public function mount(Request $request)
    {

        $postId = $request->route('post');
        $post = Post::find($postId);

        $this->post = $post;

        $this->title = $post->title;
        $this->content = $post->content;
        $this->date = $post->date;

    }

    public function render()
    {
        return view('livewire.edit-post');
    }

    public function update(Request $request){

        $validatedData = $this->validate();

        // dd($this->post);

        $this->post->update($validatedData);
        
        // session()->flash('success', 'Post updated successfully');
        $request->session()->flash('flash.banner', 'Post updated successfully!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return $this->redirect('/posts', navigate:true);

    }
}