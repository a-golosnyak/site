<?php

use PHPUnit\Framework\TestCase;

class TestsCommon extends TestCase
{
    private $loggedin;
 
    protected function setUp()
    {
      $loggedin = 1;
    }
 
    protected function tearDown()
    {
        $this->loggedin = NULL;
    }
 
//--- Simple unit test ---------------------------------
/*    public function testIsset()
    {
        $result = isset($loggedin);

        $this->assertEquals(NULL, $result);
        $this->assertEquals(0, $result);
        $this->assertEquals(1, $result);
        $this->assertEquals(10, $result);
        $this->assertEquals(TRUE, $result);
    }
*/
    //--- Data provider --------------------------------
  public function addDataProvider() 
    {
        return array(
            array(0, TRUE, 0),
            array(1, TRUE, 1),
            array(10, TRUE, 2),
            array(FALSE, TRUE, 3),
            array(TRUE, TRUE, 4),
        );
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($a, $expected)
    {
        $result = isset($a);
        $this->assertEquals($expected, $result);
    }
}
?>
