<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Post;
class ViewPost extends Component
{

    public $post = [];

    public function mount(Request $request)
    {
        $postId = $request->route('post');
        $this->post = Post::find($postId);
    }

    public function render()
    {
        return view('livewire.view-post', ['post' => $this->post]);
    }
}