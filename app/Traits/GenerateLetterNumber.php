<?php

namespace App\Traits;

use App\Models\Letter;

trait GenerateLetterNumber
{
    public function generateNumber(): string
    {
        $lastLetter = Letter::query()->orderByDesc('no')->first();
        if ($lastLetter === null) {
            return '01';
        }
        $lastIncrement = substr($lastLetter->no, 0, 2);
        return str_pad((int)++$lastIncrement, 2, 0, STR_PAD_LEFT);
    }
}