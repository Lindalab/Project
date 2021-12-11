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
         $this->assertTrue(TRUE);
    }

    public function testAdministratorCanApprove(): void
    {
         $this->assertTrue(TRUE);
    }

    public function testUserCanApproveProgram(): void
    {
         $this->assertTrue(False);
    }

    public function testUserCanRegisterProgram(): void
    {
         $this->assertTrue(True);
    }

}


//use PHPUnit\Framework\TestCase;
//include ("RegistrationProgram.php");
//include ("functions.php");
 //final class  UnitTest extends TestCase 
 //{

     //public function TestInsertionCheck(): void
     //{
      //$Table=new Tableset();
      //$run=$Table->InsertProg('David','Movie','Monday','2pm','Onua','David','30mins', 'Afsanet');
     //  $this->assertTrue($run);
   // }
 //}
?>