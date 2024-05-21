<?php

namespace App\Livewire\Partial;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Sidebar extends Component
{
    protected $listeners = ['reload' => '$refresh'];

    public function deleteChat(Chat $chat)
    {
        $chat->delete();
        $this->dispatch('reload');
    }

    #[On('logout')]
    public function logout()
    {
        Auth::logout();
        $this->redirect(route('login'), true);
    }

    public function render()
    {
        $userid = auth()->id();
        return view('livewire.partial.sidebar', [
            'chats' => Chat::where('from_id', $userid)->orWhere('to_id', $userid)->with('pesans')->get(),
            'user' => auth()->user(),
        ]);
    }
}
