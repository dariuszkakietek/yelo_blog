<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class LikeButton extends Component
{
    #[Reactive]
    public Post $post;

    // public function mount(Post $post){
    //     $this->post = $post;
    // }

    public function toggleLike(){
        if(auth()->guest()){
            return $this->redirect(route('login'), true);
        }

        $user = auth()->user();

        if($user->hasLiked($this->post)) {
            $user->likes()->detach($this->post);
            return;
        }else{
            $user->likes()->attach($this->post);
            return;
        }
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
