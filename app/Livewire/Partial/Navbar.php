<?php

namespace App\Livewire\Partial;

use App\Models\Chat;
use Livewire\Attributes\On;
use Livewire\Component;

class Navbar extends Component
{
    public $title;
    public ?Chat $chat;

    #[On('selectChat')]
    public function selectChat(Chat $chat){
        $this->chat = $chat;
        $this->title = $chat->tujuan?->name;
    }

    public function removeChat(){
        $this->reset();
        $this->dispatch('removeChat');
    }

    public function deleteChat(){
        $chat = $this->chat;
        $this->removeChat();
        $chat->delete();
    }

    public function render()
    {
        return view('livewire.partial.navbar');
    }
}
