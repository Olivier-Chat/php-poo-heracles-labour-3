<?php


namespace App;


class Hero extends Fighter
{
    private ?Weapon $weapon = null;
    private ?Shield $shield = null;


    /**
     * Get the value of weapon
     */
    public function getWeapon(): ?Weapon
    {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     *
     */
    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    /**
     * Get the value of shield
     */
    public function getShield(): ?Shield
    {
        return $this->shield;
    }

    /**
     * Set the value of shield
     *
     */
    public function setShield(?Shield $shield): void
    {
        $this->shield = $shield;
    }
    public function getDamage(): int
    {
        return $this->getStrength();
    }

    public function getDefense(): int
    {
        return $this->getDexterity();

    }
    public function getRange(): float
    {
        return $this->range + $this->weapon->getRange();
    }

}