<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{
  /**
   * A basic test for api helper.
   *
   * @return void
   */
  public function test_institution_api_helper()
  {
    $this->assertTrue(
      filter_var(getInstitutionToken(), FILTER_VALIDATE_URL) !== false 
    );
  }

  /**
   * A basic test for api helper.
   *
   * @return void
   */
  public function test_institution_api_ticket_helper()
  {
    $this->assertTrue( 
      filter_var(getInstitutionTicketAPI(), FILTER_VALIDATE_URL) !== false 
    );
  }

  /**
   * A basic test for api helper.
   *
   * @return void
   */
  public function test_institution_api_token_helper()
  {
    $this->assertTrue( 
      is_string( getInstitutionTicketAPI() )
    );
  }
}
