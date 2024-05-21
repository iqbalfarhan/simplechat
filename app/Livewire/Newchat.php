<?php

namespace App\Livewire;

use App\Livewire\Forms\ChatForm;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Newchat extends Component
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
        $this->form->store();
        $this->dispatch('reload');
        $this->closeModal();
    }

    public function setTujuan($id){
        $this->form->to_id = $id;
    }

    public function closeModal()
    {
        $this->form->reset();
        $this->show = false;
        $this->dispatch('reload');
    }

    public function render()
    {
        return view('livewire.newchat', [
            'users' => User::when($this->search, function($user){
                $user->where('email', 'like', "%".$this->search."%");
            })->pluck('email', 'id')->take(5)
        ]);
    }
}
