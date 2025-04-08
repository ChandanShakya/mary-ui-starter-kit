<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('auth.register');

    $component->assertSee('');
});
