<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/

class Expo
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Expo State Machines
  private static $StatusQR = 1;
  private static $StatusStandliste = 2;
  private static $StatusStand = 3;
  private static $StatusLogginn = 4;
  private static $StatusRegistrering = 5;
  private static $StatusRating = 6;
  private static $StatusJury = 7;
  private static $StatusJuryfunksjoner = 8;
  private static $StatusEndreStand = 9;
  private static $StatusLeggtilStand = 10;
  private static $StatusPoengtavle = 11;
  private $status;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {
    $this->setStatus(self::$StatusQR);
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function getStatusFullName()
  {
    $answer = $this->getStatus();
    return $answer;
  }

  public function getStatus()
  {
    if ($this->status == self::$StatusQR) { return "StatusQR"; }
    elseif ($this->status == self::$StatusStandliste) { return "StatusStandliste"; }
    elseif ($this->status == self::$StatusStand) { return "StatusStand"; }
    elseif ($this->status == self::$StatusLogginn) { return "StatusLogginn"; }
    elseif ($this->status == self::$StatusRegistrering) { return "StatusRegistrering"; }
    elseif ($this->status == self::$StatusRating) { return "StatusRating"; }
    elseif ($this->status == self::$StatusJury) { return "StatusJury"; }
    elseif ($this->status == self::$StatusJuryfunksjoner) { return "StatusJuryfunksjoner"; }
    elseif ($this->status == self::$StatusEndreStand) { return "StatusEndreStand"; }
    elseif ($this->status == self::$StatusLeggtilStand) { return "StatusLeggtilStand"; }
    elseif ($this->status == self::$StatusPoengtavle) { return "StatusPoengtavle"; }
    return null;
  }

  public function Scan()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusQR)
    {
      $this->setStatus(self::$StatusStand);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function KlikkerPaaStand()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusStandliste)
    {
      $this->setStatus(self::$StatusStand);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function ErLoggetInn()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusStand)
    {
      $this->setStatus(self::$StatusRating);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function ikkeLoggetInn()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusStand)
    {
      $this->setStatus(self::$StatusLogginn);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function erLoggetInnSomJury()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusStand)
    {
      $this->setStatus(self::$StatusJury);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function viseAlleStands()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusStand)
    {
      $this->setStatus(self::$StatusStandliste);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function Korrektinfo()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusLogginn)
    {
      $this->setStatus(self::$StatusStand);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function feilInfo()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusLogginn)
    {
      $this->setStatus(self::$StatusLogginn);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function harIkkebruker()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusLogginn)
    {
      $this->setStatus(self::$StatusRegistrering);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function registrererbruker()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusRegistrering)
    {
      $this->setStatus(self::$StatusStand);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function ugyldiginfo()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusRegistrering)
    {
      $this->setStatus(self::$StatusRegistrering);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function feilverdi()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusRating)
    {
      $this->setStatus(self::$StatusRating);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function erLoggetInnOgVerdiGyldig()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusRating)
    {
      $this->setStatus(self::$StatusStand);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function ikkeLoggetInnSomJury()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusJury)
    {
      $this->setStatus(self::$StatusStandliste);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function godkjentKonto()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusJury)
    {
      $this->setStatus(self::$StatusJuryfunksjoner);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function Endre()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusJuryfunksjoner)
    {
      $this->setStatus(self::$StatusEndreStand);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function Leggtil()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusJuryfunksjoner)
    {
      $this->setStatus(self::$StatusLeggtilStand);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function SeScore()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusJuryfunksjoner)
    {
      $this->setStatus(self::$StatusPoengtavle);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function UgyldigInfo()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusEndreStand)
    {
      $this->setStatus(self::$StatusEndreStand);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function godkjentEndring()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusEndreStand)
    {
      $this->setStatus(self::$StatusJuryfunksjoner);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function UgyldigInput()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusLeggtilStand)
    {
      $this->setStatus(self::$StatusLeggtilStand);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function godkjentStand()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusLeggtilStand)
    {
      $this->setStatus(self::$StatusJuryfunksjoner);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function TrykkePaaStand()
  {
    $wasEventProcessed = false;
    
    $aStatus = $this->status;
    if ($aStatus == self::$StatusPoengtavle)
    {
      $this->setStatus(self::$StatusStand);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  private function setStatus($aStatus)
  {
    $this->status = $aStatus;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}
?>