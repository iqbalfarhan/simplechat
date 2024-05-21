<?php

namespace App\Livewire\Forms;

use App\Models\Chat;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ChatForm extends Form
{
    public $from_id;
    public $to_id;
    public ?Chat $chat;

    public function setChat(Chat $chat)
    {
        $this->chat = $chat;
        $this->from_id = $chat->from_id;
        $this->to_id = $chat->to_id;
    }

    public function store()
    {
        $valid = $this->validate([
            'from_id' => 'required',
            'to_id' => 'required',
        ]);

        Chat::create($valid);
        $this->reset();
    }

    public function update()
    {
        $valid = $this->validate([
            'from_id' => 'required',
            'to_id' => 'required',
        ]);

        $this->chat->update($valid);
        $this->reset();
    }
}
