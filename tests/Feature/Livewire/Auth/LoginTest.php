<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('auth.login');

    $component->assertSee('');
});
