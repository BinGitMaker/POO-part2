<?php

// Car.php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    /* ---------- PROPRIETES ------------ */
    /* ---------- CONSTANTE ------------ */
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy;
    private int $energyLevel;
    private int $inFilling;
    


    /* ---------- METHODE MAGIQUE ------------ */
    public function __construct(
        string $color,
        int $nbSeats,
        string $energy,
        
        )
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        
        
       
    }
    
    // Do not modify the rest of the file



    /* ---------- METHODES ------------ */
    
    public function fill(): string
    {
        $this->inFilling = 10;
        return "START TO CHARGE!";
    }
    
    
    public function isFull(): string 
    {
        $sentence = "";
        while ($this->inFilling > 0){
            $this->inFilling--;
            $sentence .= "Charge!!";
        }
        $sentence .= "STOP it is full!!";
        return $sentence;
    }
                            
        

    /* ---------- GETTER SETTER ------------ */
   
/* 
            >>>>>>>>>>>GET-SET INFILLING<<<<<<<<<<
            */
    public function getInFilling(): int 
    {
        return $this->inFilling;
    }
                            
    public function setInFilling(int $inFilling): void  
    {
        if($inFilling >= 0){
        $this->inFilling = $inFilling;
        }
    }
            /* 
            >>>>>>>>>>>GET-SET Energy<<<<<<<<<<
            */
    public function getEnergy(): string
    {
       return $this->energy;
    }
    
    public function setEnergy(string $energy): Car   
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    /* 
            >>>>>>>>>>>GET-SET Energy<<<<<<<<<<
            */
    public function getEnergyLevel(): int 
    {
        return $this->energyLevel;
    }
            
    public function setEnergyLevel(int $energyLevel): self   
    {
        if($energyLevel <= 100) {
         $this->energyLevel = $energyLevel;  
        }
        return $this->energyLevel;
    }  
    
}