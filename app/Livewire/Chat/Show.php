<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use App\Models\Pesan;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{
    public $sidebaruserinfo = false;
    public $pesan;

    public ?Chat $chat;

    #[On("sendMessage")]
    public function sendMessage($message)
    {
        $this->pesan = $message;
        $this->validate([
            'chat' => 'required',
            'pesan' => 'max:255'
        ]);

        Pesan::create([
            'chat_id' => $this->chat?->id,
            'user_id' => auth()->id(),
            'pesan' => $this->pesan
        ]);
    }

    public function delete()
    {
        $this->chat?->delete();
        $this->redirect(route('home'), true);
    }

    public function mount(Chat $chat)
    {
        $this->chat = $chat;
    }

    public function render()
    {
        return view('livewire.chat.show', [
            "datas" => Pesan::where('chat_id', $this->chat->id)->get(),
            "tujuan" => $this->chat->tujuan
        ]);
    }
}
