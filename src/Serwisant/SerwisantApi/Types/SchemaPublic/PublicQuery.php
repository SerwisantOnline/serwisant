<?php

namespace Serwisant\SerwisantApi\Types\SchemaPublic;

use Serwisant\SerwisantApi;
use Serwisant\SerwisantApi\Types;

class PublicQuery extends Types\RootType
{
  /**
   * @return CustomerPanelConfig
   */
  public function configuration($vars = array())
  {
     return $this->inputArgs('configuration', array_merge($vars, []));
  }

  /**
   * @param CustomerAgreementsFilter $filter
   * @return CustomerAgreement[]
   */
  public function customerAgreements(CustomerAgreementsFilter $filter = null, $vars = array())
  {
     return $this->inputArgs('customerAgreements', array_merge($vars, ['filter' => $filter]));
  }

  /**
   * If token belongs to online payment, use this query to get details
   * @param string $token
   * @return OnlinePayment
   */
  public function paymentByToken(string $token, $vars = array())
  {
     return $this->inputArgs('paymentByToken', array_merge($vars, ['token' => $token]));
  }

  /**
   * Return available payment methods for service related to access token. List can be empty, what mean service
doesn't support online payments

   * @return OnlinePaymentMethod[]
   */
  public function paymentMethods($vars = array())
  {
     return $this->inputArgs('paymentMethods', array_merge($vars, []));
  }

  /**
   * @param string $ID
   * @return OnlineTransaction
   */
  public function paymentTransaction(string $ID, $vars = array())
  {
     return $this->inputArgs('paymentTransaction', array_merge($vars, ['ID' => $ID]));
  }

  /**
   * Return detailed information about particular repair
   * @param string $token
   * @return Repair
   */
  public function repairByToken(string $token, $vars = array())
  {
     return $this->inputArgs('repairByToken', array_merge($vars, ['token' => $token]));
  }

  /**
   * Using this query you can lookup a token, to determine where it belongs, eg. order, or payment
   * @param string $token
   * @return SecretToken
   */
  public function secretToken(string $token, $vars = array())
  {
     return $this->inputArgs('secretToken', array_merge($vars, ['token' => $token]));
  }

  /**
   * @return Viewer
   */
  public function viewer($vars = array())
  {
     return $this->inputArgs('viewer', array_merge($vars, []));
  }

  protected function schemaNamespace()
  {
    return 'SchemaPublic';
  }
}