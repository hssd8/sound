<?php
/**
 * PHP Define file
 * 
 * This file is important to all pages changes can be made to constants if  the 
 * need arises
 * @author Ibrahim & Atiku 
 * @version 1.0
 * @link http://www.github.com/hssd8/sound
 */

$system = new config();

/*-------------------------------------------------------------------------*/
/*                               General Define                            */
/*-------------------------------------------------------------------------*/

/* Deafault page url */
define('SN_DEFURL', $system->get_base_url());

/* File Directory */
define('SN_DEFDIR', $system->pagDir());