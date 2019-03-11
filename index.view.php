<?php

getAge($age){
  $this->age = $age;
}

getVariety($variety){
  $this->variety = $variety;
}

/**
 * summary
 */
class Chicken extends Bird
{
  use PoultryTrait; // this has sex, age, and other traits common to all poultry

    protected $varieties = ['red', 'black', 'blue'];
    protected $breed =
    /**
     * summary
     */
    public function __construct()
    {
        $this->variety = $variety;
    }
}
$chicken->score; $chicken->health; $chicken->sire(); $chicken->generation();
//$chicken->id, $sire_id, $generation = 1;
// check if chicken has sire_id
// if (! sire_id), then exit;
// return;
// ELSE
// incremement #generation
// $generation++;
// return $sire_id;
//
$user->chickens(); $user->ducks(); $user->flock();
  $chicken->breed; $chicken->name; $chicken->legband; $chicken->lay();
  $chicken->getBrothers(); $chicken->getMother();$chicken->getMates();
// id, name, gallery_id, legband, wingband, mating_id, age, sex,

// I want to display a form that allows chickens to be created
// when a chicken is created, I want the user to be able to sex the chicken
// I want to know the chickens age
// I want to know the chickens weight
// I want to give it a legband number
// If it's a male I don't want it to lay eggs
// If it's a female it can lay eggs but not if it's too young


$breeds = ['Anacona', 'Dorking', 'Sebright'];
$varieties = ['Black', 'Blue', 'Brown', 'White' ];
$poultry = ['duck', 'chicken', 'turkey'];


$bird->species = 'chicken';
$bird->variety = 'black';
$bird->breed = 'java';
$bird->class = 'large american';
