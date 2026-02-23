<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new
#[Layout('layouts::app')]
#[Title('Dashboard')]
class extends Component {
    public function mount()
    {
        // No additional logic needed for now
    }
}; ?>

<div>
    <x-header title="Dashboard" separator progress-indicator>
        
    </x-header>

    <div>
        {{-- Content of Dashboard Goes Here --}}
    </div>
</div> 