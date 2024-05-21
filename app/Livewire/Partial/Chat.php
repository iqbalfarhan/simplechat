<?php

namespace App\Livewire\Partial;

use Livewire\Component;

class Chat extends Component
{
    public $message;
    public function send()
    {
        $this->validate([
            'message' => 'required'
        ]);

        $this->dispatch('reload');
        $this->dispatch('sendMessage', $this->message);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.partial.chat');
    }
}
