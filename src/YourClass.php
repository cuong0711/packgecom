<?php
 namespace Asikite\Time3333;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author yourname
*/
class YourClass{

   /**  @var string $m_SampleProperty define here what this variable is for, do this for every instance variable */
   private $m_SampleProperty = '';
 
  /**
  * Sample method 
  *
  * Always create a corresponding docblock for each method, describing what it is for,
  * this helps the phpdocumentator to properly generator the documentation
  *
  * @param string $param1 A string containing the parameter, do this for each parameter to the function, make sure to make it descriptive
  *
  * @return string
  */
    // csrf();
   public function Sum($a,$b){
			return $a+$b;
   }
	 public function  YearNow(){
    $year =  getdate();
    $yearnow  = $year['year'];
    echo $yearnow;
   }
   public  function  Age($year){
    $year =  getdate();
    $yearnow  = $year['year'];
    $age = $yearnow- $year ;
    return $age ;
   }
	  public  function Now(){
     $year =  getdate();
      $hanoi  = $year['hours']  +6;
    $yearnow  = $year['year'] ." / " .$year['mon']." /".$year['mday']." ".$hanoi.":".$year['minutes'];
    return $yearnow;
   }
   public function NowDay(){
      $year =  getdate();
      $yearnow  = $year['year'] ." / " .$year['mon']." /".$year['mday'];
    return $yearnow;
   }
   public function CreateDay($year, $mon , $day){
    return $year." / " .$mon." /".$day;
   }
   public function CreateDaytime($year, $mon , $day,$hours ,  $minutes ){
    return $year." / " .$mon." /".$day ." ".$hours .":".$minutes;
   }
   public function CreateTime($hours ,  $minutes ){
    return $hours .":".$minutes;
   }
   public function yesterday(){
    $now = getdate();
    $terday = $now['mday']-1;
     $ternow  = $now['year'] ." / " .$now['mon']." /".$terday ;
     return $ternow;
   }
	   public function  tomorrow(){
     $now = getdate();
    $tomoday  = $now['mday']+1;
     $tonow  = $now['year'] ." / " .$now['mon']." /".$tomoday ;
     return $tonow ;
   }
   public function addYears($year){
    return  $year;
   }
   public function addMonth($mon){
    return $mon;
   }
   public function  addDay($day){
    return $day;
   }
	
   public function  NowTime(){
    $time  = getdate();
      $hanoi  = $time['hours']  +6;
    $timenow  =   $hanoi .":".$time['minutes'];
    return  $timenow;
   }
   public  function addHours($hours){
    return $hours;
   }
   public function addMinuter($minuter){
    return  $minuter;
   }
	 public  function weekyear(){
     $date = date('Y-m-d');
  while (date('w', strtotime($date)) != 1) {
    $tmp = strtotime('-1 day', strtotime($date));
    $date = date('Y-m-d', $tmp);
  }

  $week = date('W', strtotime($date));
  return $week;
   }
   public function weekester(){
       $date = date('Y-m-d');
      while (date('w', strtotime($date)) != 1) {
      $tmp = strtotime('-1 day', strtotime($date));
      $date = date('Y-m-d', $tmp);
    }

  $week = date('W', strtotime($date));
  $weekter =  $week-1;
  return $weekter;
   }
	  public function weekestomo(){
       $date = date('Y-m-d');
       while (date('w', strtotime($date)) != 1) {
        $tmp = strtotime('-1 day', strtotime($date));
       $date = date('Y-m-d', $tmp);
       }

       $week = date('W', strtotime($date));
       $weekto =  $week+1;
        return $weekto;
   }
	  public function weekdaytomo(){
    $date = date('Y-m-d');
       while (date('w', strtotime($date)) != 1) {
         $tmp = strtotime('-1 day', strtotime($date));
        $date = date('Y-m-d', $tmp);
     }

  $week = date('W', strtotime($date));
  $weekto = $week +1;
     $year =  getdate();
     $weekday =  $year['mday'] +7;
      $yearnow  = "week ".$weekto.":".$year['year'] ." / " .$year['mon']." /".$week ;
      return $yearnow;
   }

}
