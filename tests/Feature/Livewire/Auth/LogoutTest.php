<?php

use Livewire\Volt\Volt;

it('can render', function () {
    $component = Volt::test('auth.logout');

    $component->assertSee('');
});
