<?php

namespace App\Livewire\Partial;

use App\Models\Chat;
use Livewire\Component;

class Sidebar extends Component
{
    protected $listeners = ['reload' => '$refresh'];

    public function deleteChat(Chat $chat)
    {
        $chat->delete();
        $this->dispatch('reload');
    }

    public function render()
    {
        $userid = auth()->id();
        return view('livewire.partial.sidebar', [
            'chats' => Chat::where('from_id', $userid)->orWhere('to_id', $userid)->with('pesans')->get()
        ]);
    }
}
