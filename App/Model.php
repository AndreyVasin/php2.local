<?php

namespace App;

abstract class Model
{
  const TABLE = '';
  public $id;

  public static function findAll()
  {
    $db = Db::instance();
    return $db->query(
      'SELECT * FROM ' . static::TABLE,
      static::class);
  }

  public static function findById(int $id)
  {
    $db = Db::instance();
    return $db->query(
      'SELECT * FROM ' . static::TABLE . ' WHERE id = :id',
      static::class, [':id' => $id])[0];
  }

  public function isNew()
  {
    return empty($this->id);
  }

  public function insert()
  {
    if (!$this->isNew()) {
      return;
    }
    $columns = [];
    $values = [];
    foreach ($this as $k => $v) {
      if ('id' == $k) {
        continue;
      }
      $columns[] = $k;
      $values[':' . $k] = $v;
    }

    $sql = 'INSERT INTO ' . static::TABLE . ' 
            (' . implode(',', $columns) . ')
            VALUES
            (' . implode(',', array_keys($values)) . ')
            ';
    $db = Db::instance();
    $db->execute($sql, $values);
  }

  public function delete()
  {
    if (!$this->isNew()) {
      return;
    }
    $currId = 0;
    foreach ($this as $k => $v) {
      if ('id' == $k) {
        $currId = (int)$v;
      }
    }
    $sql = 'DELETE FROM ' . static::TABLE .
      ' WHERE id = ' . $currId;
    $db = Db::instance();
    $db->execute($sql);
  }

  public function update()
  {
    if (!$this->isNew()) {
      return;
    }
    $currId = 0;
    $values = [];
    foreach ($this as $k => $v) {
      if ('id' == $k) {
        $currId = (int)$v;
        continue;
      }
      $values[$k . ' := ' . $k] = $v;
    }
    $sql = 'UPDATE ' . static::TABLE .
      ' SET ' .
      implode(',', array_keys($values)) .
      ' WHERE id = ' . $currId;
    $db = Db::instance();
    $db->execute($sql, $values);
  }
}

