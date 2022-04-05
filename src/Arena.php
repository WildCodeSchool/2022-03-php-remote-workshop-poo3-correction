<?php

namespace App;

class Arena
{
    private array $monsters = [];
    private Hero $hero;

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
}