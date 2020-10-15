<?php

declare(strict_types=1);

namespace CodelyTv\Tests;

use CodelyTv\Hairdresser;
use PHPUnit\Framework\TestCase;

final class HairdresserTest extends TestCase
{
    /** @test */
    public function itShouldSayHelloWhenGreeting(): void
    {
        $jijjijiji = new Hairdresser("Javi");

        self::assertEquals(5, $jijjijiji->evilThingIdon_knowHowTodo());
    }
    /** @test */
    public function lereleRafa(): void
    {
        $jijjijiji = new Hairdresser("Javi");
        $jijjijiji->isRafa();

        self::assertEquals(273650, $jijjijiji->evilThingIdon_knowHowTodo());
    }
}
