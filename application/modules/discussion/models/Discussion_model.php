<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion_model extends CI_Model {

  public function __construct()
  {
      parent::__construct();
  }

  /**
   * Get CATEGORY
   */

   public function getCategory()
   {
     return $this->db->query("SELECT * FROM ac_discussion_category");
   }

  /**
   * Get id forums
   */

   public function getThreadId($cat)
   {
     return $this->db->query("SELECT * FROM ac_discussion WHERE category = '$cat'");
   }


   /**
    * Get Category id
    */

    public function getIdCategory($cat)
    {
      return $this->db->query("SELECT category FROM ac_discussion_category WHERE id = '$cat'");
    }

    /**
     * Publish Discussion
     */


     /**
      * Publish comment
      */


      /**
       * Get Comments by ID
       */
}
