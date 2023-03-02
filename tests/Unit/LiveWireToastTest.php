<?php

use Livewire\Component;

it('has the correct macro', function () {
    expect(Component::hasMacro('notify'))->toBeTrue();
});

it('renders properly', function () {
    $this->view('livewire-toast::notification')->assertSee('div');
});
