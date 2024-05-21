<?php

namespace App\Livewire;

use App\Models\Chat;
use App\Models\Pesan;
use Livewire\Attributes\On;
use Livewire\Component;

class Home extends Component
{
    public $sidebaruserinfo = true;
    public ?Chat $chat;

    #[On("selectChat")]
    public function selectChat(Chat $chat)
    {
        $this->chat = $chat;
    }

    #[On("removeChat")]
    public function removeChat()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
