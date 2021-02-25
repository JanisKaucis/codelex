<?php

class AsciiFigure
{
    const FigureStepValue = 4;
    const FigureSize = 2;
    const FigureSizeValue = self::FigureStepValue * self::FigureSize;

    public function drawForm(): void
    {
        for ($i = self::FigureSizeValue; $i > 0; $i -= self::FigureStepValue) {
            echo str_repeat('/', $i);
            echo str_repeat('*', self::FigureSizeValue * 2 - 2 * $i);
            echo str_repeat('\\', $i);
            echo PHP_EOL;
        }
    }
}

$figure = new AsciiFigure();
$figure->drawForm();