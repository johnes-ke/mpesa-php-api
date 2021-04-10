<?php

namespace JohnesKe\MpesaPhpApi;

use JohnesKe\MpesaPhpApi\Services\B2b;
use JohnesKe\MpesaPhpApi\Services\B2C;
use JohnesKe\MpesaPhpApi\Services\Balance;
use JohnesKe\MpesaPhpApi\Services\C2b;
use JohnesKe\MpesaPhpApi\Services\Reversal;
use JohnesKe\MpesaPhpApi\Services\Stk;
use JohnesKe\MpesaPhpApi\Services\Transaction;
use JohnesKe\MpesaPhpApi\Services\Token;

class MpesaPhpApi
{

  // Get Token
  public function token()
  {
    $token = new Token($this->tokenClient, $this->tokenUrl);
    return $token->getToken();
  }

  /**
   * Initiate a business to business transaction.
   *
   * @return B2B
   */
  public function b2b()
  {
    return new B2b();
  }

  /**
   * Initiate a business to customer transaction.
   *
   * @return B2C
   */
  public function b2c()
  {
    return new B2C();
  }

  /**
   * Initiate a balance enquiry.
   *
   * @return Balance
   */
  public function balance()
  {
    return new Balance();
  }

  /**
   * Initialize a customer to business transaction.
   *
   * @return C2b
   */
  public function c2b()
  {
    return new C2b();
  }

  /**
   * Initiate a transaction reversal.
   *
   * @return Reversal
   */
  public function reversal()
  {
    return new Reversal();
  }

  /**
   * Initiate a transaction status check.
   *
   * @return Transaction
   */
  public function transaction()
  {
    return new Transaction();
  }

  /**
   * Initiate a LIPA NA MPESA ONLINE transaction using STK push.
   *
   * @return Stk
   */
  public function Stk_push()
  {
    return new Stk();
  }

}