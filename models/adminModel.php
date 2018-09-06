<?php
class AdminModel extends Model{
  function __construct()
  {
    parent::__construct();
  }

  public function  deleteartMod($id){
    $stmt = $this->db->prepare("DELETE FROM `articles` WHERE id = :id");
    if($stmt->execute(['id' => $id])){
      return true;
    }
  }
  public function updateCurMod($data){
    $stmt = $this->db->prepare("UPDATE articles SET name = :name, content = :text, updated_at = :updated_at WHERE id = :id");
    if($stmt->execute([
      'id' => $data['id'],
      'name' => $data['name'],
      'text' => $data['text'],
      'updated_at' => date('Y-m-d G:i:s'),
    ])){
      return true;
    }
    return false;
  }

  public function getArtById($id = false){
    if($id == false) {
      return false;
    }else{
      $stmt = $this->db->prepare("SELECT * FROM `articles` WHERE id = :id");
      $stmt->execute(['id' => $id]);
      return $stmt->fetchAll();
    }
  }

  public function getArtsByPage($limit, $offset){
    $name = $_GET['name'];
    if(isset($name)){
      $where = "WHERE name LIKE '%$name%' ";
    }else{
      $where = '';
    }

    $stmt = $this->db->prepare("SELECT * FROM `articles` " . $where . "LIMIT $offset, $limit");
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function getCountMod(){
    return $this->db->query("SELECT COUNT(id) FROM `articles`")->fetchColumn();
  }

  public function createArtModel($data){
    $stmt = $this->db->prepare("INSERT INTO articles(id, name, content, created_at, updated_at) VALUES(:id, :name, :content, :created_at, :updated_at)");

    if($stmt->execute(array(
      'id' => NULL,
      'name' => $data['name'],
      'content' => $data['text'],
      'created_at' => date('Y-m-d G:i:s'),
      'updated_at' => date('Y-m-d G:i:s'),
    ))){
      return true;
    }else{
      return false;
    }
  }

  public function searchArt($name){
    return $this->db->query("SELECT * FROM `articles` WHERE `name` = '$name'")->fetchAll();
  }
}