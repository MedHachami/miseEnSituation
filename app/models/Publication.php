<?php
  class Publication {
    private $db;

    public function __construct()
    {
      $this->db = new Database;
    }

    public function allPublications()
    {
        $this->db->query("SELECT * FROM publication ");
        return $this->db->resultset();
    }

  }