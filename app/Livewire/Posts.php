<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class Posts extends Component
{
    use WithPagination;

    public $post;

    public $confirmingPostDeletion = false;
    
    public $confirmingPostAdd = false;


    public function render()
    {

        $posts = Post::paginate(10);

        return view('livewire.posts',[
            'posts' => $posts
        ]);
    }

    public function confirmPostDeletion(Post $post, Request $request){

        $post->delete();

        // $this->confirmingPostDeletion = true;

        $request->session()->flash('flash.banner', 'Post deleted successfully!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return $this->redirect('/posts', navigate:true);

    }

    // public function delete(Post $post){

    //     dd('heyyyy');

    //     // $post->delete();
        
    //     // $this->confirmingPostDeletion = false;
        
    // }

    // public function confirmPostAdd()
    // {
    //     $this->reset(['post']);
    //     // $this->post = new \stdClass(); 
    //     // $this->post->title = '';
    //     // $this->post->content = ''; 
        
    //     $this->confirmingPostAdd = true;
    // }

    // public function savePost(){

    //     $validatedData = $this->validate([
    //         'post.title' => 'required|string',
    //         'post.content' => 'required|string',
    //     ]);


    //     $post = new Post();

    //     $post->title = $validatedData['post']['title'];
    //     $post->content = $validatedData['post']['content'];
    
    //     $post->save();

    //     $this->confirmingPostAdd = false;
    // }
}