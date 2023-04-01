<?php

declare(strict_types=1);

namespace PreemStudio\BladeIcons\IcoMoonEssential;

use Illuminate\Support\Facades\File;
use PreemStudio\BladeIcons\IconFamily;
use PreemStudio\BladeIcons\Facades\IconFamilyRegistry;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        $directory = resource_path('blade-icons/icomoon-essential');

        if (File::exists($directory)) {
            IconFamilyRegistry::push(IconFamily::fromDirectory('icomoon-essential', $directory));
        }
    }
}
