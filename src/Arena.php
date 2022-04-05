<?php

namespace App;

class Arena
{
    private array $monsters = [];
    private ?Hero $hero = null;
    private int $size = 10;

    public function __construct(Hero $hero, array $monsters)
    {
        $this->monsters = $monsters;
        $this->hero = $hero;
    }

    /**
     * Get the value of monsters
     */ 
    public function getMonsters(): array
    {
        return $this->monsters;
    }

    /**
     * Set the value of monsters
     *
     */ 
    public function setMonsters(array $monsters): self
    {
        $this->monsters = $monsters;

        return $this;
    }

    /**
     * Get the value of hero
     */ 
    public function getHero(): Hero
    {
        return $this->hero;
    }

    /**
     * Set the value of hero
     *
     */ 
    public function setHero(Hero $hero): self
    {
        $this->hero = $hero;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }
}