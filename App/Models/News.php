<?php

namespace App\Models;

use App\Model;

/**
 * Class News
 * @package App\Models
 *
 * @property \App\Models\Author $author
 */
class News extends Model
{
  const TABLE = 'news';
  public $title;
  public $lead;
  public $author_id;

  /**
   * LASY LOAD
   * 
   * @param $k
   * @return null
   */
  public function __get($k)
  {
    switch ($k){
      case 'author':
        return Author::findById($this->author_id);
        break;
      default:
        return null;
    }
  }
}
