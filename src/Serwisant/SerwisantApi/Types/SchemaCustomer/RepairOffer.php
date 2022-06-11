<?php

namespace Serwisant\SerwisantApi\Types\SchemaCustomer;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class RepairOffer extends Types\Type
{
  /**
   * @var string
  */
  public $ID;

  /**
   * @var bool
   * This field can be null - that means no desision was made - true or false means yes or no
  */
  public $accepted;

  /**
   * @var string
  */
  public $description;

  /**
   * @var RepairOfferItem[]
  */
  public $items;

  /**
   * @var string
  */
  public $number;

  /**
   * @var Decimal
  */
  public $priceGross;

  /**
   * @var Decimal
   * Summary net price for this offer. If offered repair was diagnosed, diagnosis price is included here.
  */
  public $priceNet;

  /**
   * @var string
  */
  public $title;

  protected function schemaNamespace()
  {
    return 'SchemaCustomer';
  }
}