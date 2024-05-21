<?php

namespace App\Livewire;

use App\Models\Chat;
use App\Models\Pesan;
use Livewire\Attributes\On;
use Livewire\Component;

class Home extends Component
{
    public $sidebaruserinfo = false;
    public ?Chat $chat;

    #[On("sendMessage")]
    public function sendMessage($message)
    {
        $this->validate([
            'chat' => 'required'
        ]);

        Pesan::create([
            'chat_id' => $this->chat?->id,
            'user_id' => auth()->id(),
            'pesan' => $message
        ]);
    }

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
        return view('livewire.home', [
            'datas' => isset($this->chat) ? Pesan::where('chat_id', $this->chat->id)->get() : []
        ]);
    }
}
