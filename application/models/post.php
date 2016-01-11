<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Model {

  public function create($new_post) {
    $add_query = "INSERT INTO posts(description, created_at, updated_at) VALUES(?, NOW(), NOW())";
    $values = array($new_post['description']);
    return $this->db->query($add_query, $values);
  }

  public function get_all() {
    $query = "SELECT * FROM posts";
    return $this->db->query($query)->result_array();
  }

}
