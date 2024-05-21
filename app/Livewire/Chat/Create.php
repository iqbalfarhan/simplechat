<?php

namespace App\Livewire\Chat;

use App\Livewire\Forms\ChatForm;
use App\Models\Chat;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{
    public $show = false;
    public $search;
    public ChatForm $form;

    #[On('createChat')]
    public function createChat()
    {
        $this->show = true;
    }

    public function simpan()
    {
        $this->form->from_id = auth()->id();
        $chat = Chat::create($this->form->all());

        $this->redirect(route('chat.show', $chat), true);
    }

    public function setTujuan(User $user){
        $this->form->to_id = $user->id;
        $this->search = $user->email;
    }

    public function closeModal()
    {
        $this->form->reset();
        $this->show = false;
        $this->search = null;
        $this->dispatch('reload');
    }

    public function render()
    {
        return view('livewire.chat.create', [
            'users' => $this->search ? User::when($this->search, function($user){
                $user->where('email', 'like', "%".$this->search."%");
            })->pluck('email', 'id')->take(5) : []
        ]);
    }
}
