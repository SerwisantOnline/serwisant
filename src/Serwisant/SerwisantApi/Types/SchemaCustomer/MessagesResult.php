<?php

namespace Serwisant\SerwisantApi\Types\SchemaCustomer;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class MessagesResult extends Types\Type
{
  /**
   * @var MessageThread[]
  */
  public $items;

  /**
   * @var int
  */
  public $pages;

  protected function schemaNamespace()
  {
    return 'SchemaCustomer';
  }
}