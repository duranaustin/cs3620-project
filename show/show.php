<?php
require_once('./show/showDAO.php');

class Show implements \JsonSerializable {
  // Properties
  private $show_id;
  private $show_name;
  private $show_description;
  private $show_rating;

  // Methods
  function __construct() {
  }

  function getShowId(){
    return $this->show_id;
  }
  function setShowId($show_id){
    $this->show_id = $show_id;
  }
  function getShowName() {
    return $this->show_name;
  }
  function setShowName($show_name){
    $this->show_name = $show_name;
  }
  function getShowDescription() {
    return $this->show_description;
  }
  function setShowDescription($show_description){
    $this->show_description = $show_description;
  }

  function getShowRating() {
    return $this->show_rating;
  }
  function setShowRating($show_rating){
    $this->show_rating = $show_rating;
  }

  function getMyShows($uid){
    $showDAO = new showDAO();
    return $showDAO->getShowsByUserId($uid);
  }

  function deleteShow($uid, $sid){
    $showDAO = new showDAO();
    $showDAO->deleteShow($uid, $sid);
  }
  function createShow($uid){
    $showDAO = new showDAO();
    $showDAO->createShow($this, $uid);
  }

  public function jsonSerialize(){
      $vars = get_object_vars($this);
      return $vars;
  }
}
?>