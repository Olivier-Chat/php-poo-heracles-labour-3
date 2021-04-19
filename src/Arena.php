<?php


namespace App;


class Arena
{
    private array $monsters;
    private Hero $hero;
    private int $size = 10;

    public function __construct(Hero $hero, array $monsters)
    {
        $this->monsters = $monsters;
        $this->hero = $hero;
    }


    /**
     * @return array
     */
    public function getMonsters(): array
    {
        return $this->monsters;
    }

    /**
     * @param array $monsters
     */
    public function setMonsters(array $monsters): void
    {
        $this->monsters = $monsters;
    }

    /**
     * @return Hero
     */
    public function getHero(): Hero
    {
        return $this->hero;
    }

    /**
     * @param Hero $hero
     */
    public function setHero(Hero $hero): void
    {
        $this->hero = $hero;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

    public function getDistance(Fighter $fighterA, Fighter $fighterB) :float
    {
        $xa = $fighterA->getX();
        $ya = $fighterA->getY();
        $xb = $fighterB->getX();
        $yb = $fighterB->getY();

        return sqrt(($xb-$xa)**2 + ($yb-$ya)**2) ;

    }
    public function touchable(Fighter $striker ,Fighter $defender) :bool
    {
        return (($this->getDistance($striker,$defender)) <= $striker->getRange() );
    }

}