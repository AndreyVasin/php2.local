<?php

namespace App\Models;

use App\Model;

/**
 * Class User
 * @package App\Models
 *
 * @property int $age
 */
class User extends Model implements HasEmail
{
  const TABLE = 'users';

  public $email;
  public $name;

  /**
   * Метод, возвращающий e-mail
   * @return string Адрес элетронной почты
   */
  public function getEmail()
  {
    return $this->email;
  }
}