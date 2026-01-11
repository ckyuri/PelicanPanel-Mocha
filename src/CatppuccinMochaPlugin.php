<?php

namespace Catppuccin\Mocha;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Colors\Color;

class CatppuccinMochaPlugin implements Plugin
{
    public function getId(): string
    {
        return 'catppuccin-mocha-theme';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->colors([
                'danger' => Color::hex('#f38ba8'),     // red
                'gray' => [
                    50 => '#cdd6f4',   // text
                    100 => '#bac2de',  // subtext1
                    200 => '#a6adc8',  // subtext0
                    300 => '#9399b2',  // overlay2
                    400 => '#7f849c',  // overlay1
                    500 => '#6c7086',  // overlay0
                    600 => '#585b70',  // surface2
                    700 => '#45475a',  // surface1
                    800 => '#313244',  // surface0
                    900 => '#1e1e2e',  // base
                    950 => '#181825',  // mantle
                ],
                'info' => Color::hex('#89dceb'),       // sky
                'primary' => Color::hex('#89b4fa'),    // blue
                'success' => Color::hex('#a6e3a1'),    // green
                'warning' => Color::hex('#f9e2af'),    // yellow
            ]);
    }

    public function boot(Panel $panel): void {}
}