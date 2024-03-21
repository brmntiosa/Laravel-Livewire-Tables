<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Userlist extends Component
{

    public $per_page = 10;
    public $search = "";

    public function render()
    {
        return view('livewire.userlist', [
            'users' => User::search($this->search) -> paginate($this->per_page)
        ]);
    }
}
