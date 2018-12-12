<?php
/**
 *------
 * BGA framework => © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * GuerreMagiciens implementation  => © <Your name here> <Your email address here>
 * 
 * This code has been produced on the BGA studio platform for use on http =>//boardgamearena.com.
 * See http =>//en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * GuerreMagiciens game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *   
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */


$this -> fanatics = array_merge(
    array_fill( 0, 5, [ 'side' => 'y', 'strength' => 3 ] ),
    array_fill( 4, 5, [ 'side' => 'y', 'strength' => 2 ] ),
    array_fill( 9, 4, [ 'side' => 'y', 'strength' => 1 ] ),
    array_fill( 13, 3, [ 'side' => 'x', 'strength' => 3 ] ),
    array_fill( 16, 2, [ 'side' => 'x', 'strength' => 2 ] ),
    array_fill( 18, 4, [ 'side' => 'x', 'strength' => 1 ] )
);

$this -> nb_fanatics = [ 1 => 6, 2 => 6, 3 => 5, 4 => 5, 5 => 4, 6 => 4 ];

$this -> nb_turns_by_players = [ 1 => 4, 2 => 8, 3 => 9, 4 => 8, 5 => 10, 6 => 12 ];

$this -> global_expense_input_tokens = [ 
    [ 'amount' => 50, 'id' => 10 ], [ 'amount' => 20, 'id' => 20 ], [ 'amount' => 20, 'id' => 30 ], 
    [ 'amount' => 10, 'id' => 40 ], [ 'amount' => 5, 'id' => 50 ], [ 'amount' => 2, 'id' => 60 ], 
    [ 'amount' => 2, 'id' => 70 ], [ 'amount' => 1, 'id' => 90 ]
];

/*

Example =>

$this->card_types = array(
    1 => array( "card_name" => ...,
                ...
              )
);

*/



