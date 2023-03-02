<?php

namespace Ccsliinc\LivewireToast;

use Livewire\Component;
use Livewire\ComponentConcerns\ReceivesEvents;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LivewireToastServiceProvider extends PackageServiceProvider
{
    use ReceivesEvents;

    public function bootingPackage()
    {
        Component::macro('notify', function (string $message, string $title = '', string $secondary = '', $type = 'success') {
            $this->dispatchBrowserEvent('notify', compact('message', 'title', 'secondary', 'type'));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('livewire-toast')
            ->hasConfigFile()
            ->hasViews();
    }
}
