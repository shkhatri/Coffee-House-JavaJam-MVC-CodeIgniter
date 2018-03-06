<?php

 class musician extends CI_Model{

 	function __construct(){
 		parent::__construct();
 	}

 	function getArtist4Jan() {

        $SQL =  "select name, genre, monthname(`month-year`) from musician inner join performance on musician.musianid=performance.musicianid and monthname(`month-year`) = 'January'";
 		$query = $this->db->query($SQL);
 		if ($query ->num_rows() >0) {
 			return $query->result();

 		}
 		else {
 			return NULL;
 		}

 	}

 	function getArtist4Feb() {

        $SQL =  "select name, genre, monthname(`month-year`) from musician inner join performance on musician.musianid=performance.musicianid and monthname(`month-year`) = 'February'";
 		$query = $this->db->query($SQL);
 		if ($query ->num_rows() >0) {
 			return $query->result();

 		}
 		else {
 			return NULL;
 		}

 	}
 }



?>
