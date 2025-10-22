<?php

namespace App\Enum;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum StatusEnum: string implements HasLabel, HasColor
{
    case IN_STOCK = 'In Stock';
    case OUT_OF_STOCK = 'Out of Stock';
    case DISCONTINUED = 'Discontinued';

    public function getLabel(): string
    {
        return $this->value;
    }

    public function getColor(): string
    {
        return match($this) {
            self::IN_STOCK => 'success',
            self::OUT_OF_STOCK => 'danger',
            self::DISCONTINUED => 'gray',
        };
    }

    public function getIcon(): string
    {
        return match($this) {
            self::IN_STOCK => 'heroicon-o-check-circle',
            self::OUT_OF_STOCK => 'heroicon-o-x-circle',
            self::DISCONTINUED => 'heroicon-o-minus-circle',
        };
    }

    public static function getOptions(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn($case) => [
                $case->value => $case->getLabel()
            ])
            ->toArray();
    }
}
