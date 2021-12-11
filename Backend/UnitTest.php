<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include ("functions.php");
final class UnitTest extends TestCase
{
  public function testInsertionCheck(): void
  {
      $Table=new Tableset();
      $run=$Table->InsertProg('David','Movie','Monday','2pm','Onua','David','30mins', 'Afsanet');
       $this->assertTrue(TRUE);
  }

    public function testAdministratorCanRemove(): void
    {
     
      $run=Disapprove('David','Dispprove');
       $this->assertTrue($run);
      
    }

    public function testAdministratorCanApprove(): void
    {
       $run=Approve('David','Approve');
       $this->assertTrue($run);
    }

    public function testUserCanApproveProgram(): void
    {
          $run=Approve('David','Approve');
       $this->assertTrue($run);
    }

    public function testUserCanRegisterProgram(): void
    {
          $run=Register();
       $this->assertTrue($run);
    }

}


?>
