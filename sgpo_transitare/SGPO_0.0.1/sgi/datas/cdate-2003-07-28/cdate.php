<?php
/*-------------------------------------------*
|  script: cdate.php                         |
| code of class CDate for                    |
| date manipulation                          |
| entry data: year, month and day            |
|  (in absence: current date is default)     |
| exit through method ReadDate() who         |
| returns date in format date("Y-m-d")       |
|                                            |
| Author: Emilio Antonio Rodríguez Padrón    |
| e-mail: emilioarp@ifrance.com              |
|                                            |
| date: July 22, 2003                        |
*--------------------------------------------*/ 

class CDate
{
  var $mDate;   // in actual OOP it should be private

  function CDate($y=0,$m=0,$d=0)
  {
    If ($y==0) // these three "if" are necessary because default parameters must be constants.
	{ $y=Date("Y"); }
	If ($m==0)
	{ $m=Date("m"); }
	if ($d==0)
	{ $d=Date("d"); }
    $this -> mDate = Date("Y-m-d",mktime(0,0,0,$m,$d,$y));
  }  // end of constructor
  
  function AddTime($y=0,$m=0,$d=0) // this method adds y years, m months and d days to date
  {
    $array_date = explode("-",$this->mDate);
$this->mDate=Date("Y-m-d",mktime(0,0,0,$array_date[1]+$m,$array_date[2]+$d,$array_date[0]+$y));
  }  // end of AddTime
  
  // If you are a rigorous man, the following method should be your way to access date
  function ReadDate()
  {
    return $this->mDate;  // you get the date in same format as Date("Y-m-d")
  }  // ends of ReadDate

}  // end of declaration class CDate
?>