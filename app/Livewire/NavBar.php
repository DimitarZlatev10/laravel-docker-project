<?php

namespace App\Livewire;

use App\Livewire\Actions\Logout;
use Livewire\Component;

class NavBar extends Component
{

    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
    public function render()
    {
        return view('livewire.nav-bar');
    }
}
