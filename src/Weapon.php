<?php

namespace App;

class Weapon
{
    protected int $damage = 10;

    protected string $image = 'sword.svg';

    protected float $range = 0;
    public function __construct($damage, $range, $image)
    {
        $this->damage = $damage;
        $this->range = $range;
        $this->image = $image;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return float|int
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * @param float|int $range
     */
    public function setRange($range): void
    {
        $this->range = $range;
    }

}