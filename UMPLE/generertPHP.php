//%% NEW FILE Stand BEGINS HERE %%


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/

class Stand
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Stand Attributes
  private $standid;
  private $tittel;
  private $beskrivelse;
  private $gruppenavn;
  private $lokasjon;
  private $bildeurl;
  private $qrUrl;
  private $kalkulertscore;

  //Stand Associations
  private $redigeres;
  private $standRatings;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aStandid, $aTittel, $aBeskrivelse, $aGruppenavn, $aLokasjon, $aBildeurl, $aQrUrl, $aKalkulertscore)
  {
    $this->standid = $aStandid;
    $this->tittel = $aTittel;
    $this->beskrivelse = $aBeskrivelse;
    $this->gruppenavn = $aGruppenavn;
    $this->lokasjon = $aLokasjon;
    $this->bildeurl = $aBildeurl;
    $this->qrUrl = $aQrUrl;
    $this->kalkulertscore = $aKalkulertscore;
    $this->redigeres = array();
    $this->standRatings = array();
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setStandid($aStandid)
  {
    $wasSet = false;
    $this->standid = $aStandid;
    $wasSet = true;
    return $wasSet;
  }

  public function setTittel($aTittel)
  {
    $wasSet = false;
    $this->tittel = $aTittel;
    $wasSet = true;
    return $wasSet;
  }

  public function setBeskrivelse($aBeskrivelse)
  {
    $wasSet = false;
    $this->beskrivelse = $aBeskrivelse;
    $wasSet = true;
    return $wasSet;
  }

  public function setGruppenavn($aGruppenavn)
  {
    $wasSet = false;
    $this->gruppenavn = $aGruppenavn;
    $wasSet = true;
    return $wasSet;
  }

  public function setLokasjon($aLokasjon)
  {
    $wasSet = false;
    $this->lokasjon = $aLokasjon;
    $wasSet = true;
    return $wasSet;
  }

  public function setBildeurl($aBildeurl)
  {
    $wasSet = false;
    $this->bildeurl = $aBildeurl;
    $wasSet = true;
    return $wasSet;
  }

  public function setQrUrl($aQrUrl)
  {
    $wasSet = false;
    $this->qrUrl = $aQrUrl;
    $wasSet = true;
    return $wasSet;
  }

  public function setKalkulertscore($aKalkulertscore)
  {
    $wasSet = false;
    $this->kalkulertscore = $aKalkulertscore;
    $wasSet = true;
    return $wasSet;
  }

  public function getStandid()
  {
    return $this->standid;
  }

  public function getTittel()
  {
    return $this->tittel;
  }

  public function getBeskrivelse()
  {
    return $this->beskrivelse;
  }

  public function getGruppenavn()
  {
    return $this->gruppenavn;
  }

  public function getLokasjon()
  {
    return $this->lokasjon;
  }

  public function getBildeurl()
  {
    return $this->bildeurl;
  }

  public function getQrUrl()
  {
    return $this->qrUrl;
  }

  public function getKalkulertscore()
  {
    return $this->kalkulertscore;
  }

  public function getRedigere_index($index)
  {
    $aRedigere = $this->redigeres[$index];
    return $aRedigere;
  }

  public function getRedigeres()
  {
    $newRedigeres = $this->redigeres;
    return $newRedigeres;
  }

  public function numberOfRedigeres()
  {
    $number = count($this->redigeres);
    return $number;
  }

  public function hasRedigeres()
  {
    $has = $this->numberOfRedigeres() > 0;
    return $has;
  }

  public function indexOfRedigere($aRedigere)
  {
    $wasFound = false;
    $index = 0;
    foreach($this->redigeres as $redigere)
    {
      if ($redigere->equals($aRedigere))
      {
        $wasFound = true;
        break;
      }
      $index += 1;
    }
    $index = $wasFound ? $index : -1;
    return $index;
  }

  public function getStandRating_index($index)
  {
    $aStandRating = $this->standRatings[$index];
    return $aStandRating;
  }

  public function getStandRatings()
  {
    $newStandRatings = $this->standRatings;
    return $newStandRatings;
  }

  public function numberOfStandRatings()
  {
    $number = count($this->standRatings);
    return $number;
  }

  public function hasStandRatings()
  {
    $has = $this->numberOfStandRatings() > 0;
    return $has;
  }

  public function indexOfStandRating($aStandRating)
  {
    $wasFound = false;
    $index = 0;
    foreach($this->standRatings as $standRating)
    {
      if ($standRating->equals($aStandRating))
      {
        $wasFound = true;
        break;
      }
      $index += 1;
    }
    $index = $wasFound ? $index : -1;
    return $index;
  }

  public static function minimumNumberOfRedigeres()
  {
    return 0;
  }

  public function addRedigereVia($aTittel, $aGruppenavn, $aLokasjon, $aBilde, $aBeskrivelse, $aStandEAO)
  {
    return new Redigere($aTittel, $aGruppenavn, $aLokasjon, $aBilde, $aBeskrivelse, $aStandEAO, $this);
  }

  public function addRedigere($aRedigere)
  {
    $wasAdded = false;
    if ($this->indexOfRedigere($aRedigere) !== -1) { return false; }
    $existingStand = $aRedigere->getStand();
    $isNewStand = $existingStand != null && $this !== $existingStand;
    if ($isNewStand)
    {
      $aRedigere->setStand($this);
    }
    else
    {
      $this->redigeres[] = $aRedigere;
    }
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeRedigere($aRedigere)
  {
    $wasRemoved = false;
    //Unable to remove aRedigere, as it must always have a stand
    if ($this !== $aRedigere->getStand())
    {
      unset($this->redigeres[$this->indexOfRedigere($aRedigere)]);
      $this->redigeres = array_values($this->redigeres);
      $wasRemoved = true;
    }
    return $wasRemoved;
  }

  public function addRedigereAt($aRedigere, $index)
  {
    $wasAdded = false;
    if($this->addRedigere($aRedigere))
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfRedigeres()) { $index = $this->numberOfRedigeres() - 1; }
      array_splice($this->redigeres, $this->indexOfRedigere($aRedigere), 1);
      array_splice($this->redigeres, $index, 0, array($aRedigere));
      $wasAdded = true;
    }
    return $wasAdded;
  }

  public function addOrMoveRedigereAt($aRedigere, $index)
  {
    $wasAdded = false;
    if($this->indexOfRedigere($aRedigere) !== -1)
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfRedigeres()) { $index = $this->numberOfRedigeres() - 1; }
      array_splice($this->redigeres, $this->indexOfRedigere($aRedigere), 1);
      array_splice($this->redigeres, $index, 0, array($aRedigere));
      $wasAdded = true;
    }
    else
    {
      $wasAdded = $this->addRedigereAt($aRedigere, $index);
    }
    return $wasAdded;
  }

  public static function minimumNumberOfStandRatings()
  {
    return 0;
  }

  public function addStandRatingVia($aTlf, $aStandId, $aRating, $aUser)
  {
    return new StandRating($aTlf, $aStandId, $aRating, $aUser, $this);
  }

  public function addStandRating($aStandRating)
  {
    $wasAdded = false;
    if ($this->indexOfStandRating($aStandRating) !== -1) { return false; }
    $existingStand = $aStandRating->getStand();
    $isNewStand = $existingStand != null && $this !== $existingStand;
    if ($isNewStand)
    {
      $aStandRating->setStand($this);
    }
    else
    {
      $this->standRatings[] = $aStandRating;
    }
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeStandRating($aStandRating)
  {
    $wasRemoved = false;
    //Unable to remove aStandRating, as it must always have a stand
    if ($this !== $aStandRating->getStand())
    {
      unset($this->standRatings[$this->indexOfStandRating($aStandRating)]);
      $this->standRatings = array_values($this->standRatings);
      $wasRemoved = true;
    }
    return $wasRemoved;
  }

  public function addStandRatingAt($aStandRating, $index)
  {
    $wasAdded = false;
    if($this->addStandRating($aStandRating))
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfStandRatings()) { $index = $this->numberOfStandRatings() - 1; }
      array_splice($this->standRatings, $this->indexOfStandRating($aStandRating), 1);
      array_splice($this->standRatings, $index, 0, array($aStandRating));
      $wasAdded = true;
    }
    return $wasAdded;
  }

  public function addOrMoveStandRatingAt($aStandRating, $index)
  {
    $wasAdded = false;
    if($this->indexOfStandRating($aStandRating) !== -1)
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfStandRatings()) { $index = $this->numberOfStandRatings() - 1; }
      array_splice($this->standRatings, $this->indexOfStandRating($aStandRating), 1);
      array_splice($this->standRatings, $index, 0, array($aStandRating));
      $wasAdded = true;
    }
    else
    {
      $wasAdded = $this->addStandRatingAt($aStandRating, $index);
    }
    return $wasAdded;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    foreach ($this->redigeres as $aRedigere)
    {
      $aRedigere->delete();
    }
    foreach ($this->standRatings as $aStandRating)
    {
      $aStandRating->delete();
    }
  }

}




//%% NEW FILE User BEGINS HERE %%


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/

class User
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //User Attributes
  private $tlfnr;
  private $passord;

  //User Associations
  private $standRatings;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aTlfnr, $aPassord)
  {
    $this->tlfnr = $aTlfnr;
    $this->passord = $aPassord;
    $this->standRatings = array();
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setTlfnr($aTlfnr)
  {
    $wasSet = false;
    $this->tlfnr = $aTlfnr;
    $wasSet = true;
    return $wasSet;
  }

  public function setPassord($aPassord)
  {
    $wasSet = false;
    $this->passord = $aPassord;
    $wasSet = true;
    return $wasSet;
  }

  public function getTlfnr()
  {
    return $this->tlfnr;
  }

  public function getPassord()
  {
    return $this->passord;
  }

  public function getStandRating_index($index)
  {
    $aStandRating = $this->standRatings[$index];
    return $aStandRating;
  }

  public function getStandRatings()
  {
    $newStandRatings = $this->standRatings;
    return $newStandRatings;
  }

  public function numberOfStandRatings()
  {
    $number = count($this->standRatings);
    return $number;
  }

  public function hasStandRatings()
  {
    $has = $this->numberOfStandRatings() > 0;
    return $has;
  }

  public function indexOfStandRating($aStandRating)
  {
    $wasFound = false;
    $index = 0;
    foreach($this->standRatings as $standRating)
    {
      if ($standRating->equals($aStandRating))
      {
        $wasFound = true;
        break;
      }
      $index += 1;
    }
    $index = $wasFound ? $index : -1;
    return $index;
  }

  public static function minimumNumberOfStandRatings()
  {
    return 0;
  }

  public function addStandRatingVia($aTlf, $aStandId, $aRating, $aStand)
  {
    return new StandRating($aTlf, $aStandId, $aRating, $this, $aStand);
  }

  public function addStandRating($aStandRating)
  {
    $wasAdded = false;
    if ($this->indexOfStandRating($aStandRating) !== -1) { return false; }
    $existingUser = $aStandRating->getUser();
    $isNewUser = $existingUser != null && $this !== $existingUser;
    if ($isNewUser)
    {
      $aStandRating->setUser($this);
    }
    else
    {
      $this->standRatings[] = $aStandRating;
    }
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeStandRating($aStandRating)
  {
    $wasRemoved = false;
    //Unable to remove aStandRating, as it must always have a user
    if ($this !== $aStandRating->getUser())
    {
      unset($this->standRatings[$this->indexOfStandRating($aStandRating)]);
      $this->standRatings = array_values($this->standRatings);
      $wasRemoved = true;
    }
    return $wasRemoved;
  }

  public function addStandRatingAt($aStandRating, $index)
  {
    $wasAdded = false;
    if($this->addStandRating($aStandRating))
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfStandRatings()) { $index = $this->numberOfStandRatings() - 1; }
      array_splice($this->standRatings, $this->indexOfStandRating($aStandRating), 1);
      array_splice($this->standRatings, $index, 0, array($aStandRating));
      $wasAdded = true;
    }
    return $wasAdded;
  }

  public function addOrMoveStandRatingAt($aStandRating, $index)
  {
    $wasAdded = false;
    if($this->indexOfStandRating($aStandRating) !== -1)
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfStandRatings()) { $index = $this->numberOfStandRatings() - 1; }
      array_splice($this->standRatings, $this->indexOfStandRating($aStandRating), 1);
      array_splice($this->standRatings, $index, 0, array($aStandRating));
      $wasAdded = true;
    }
    else
    {
      $wasAdded = $this->addStandRatingAt($aStandRating, $index);
    }
    return $wasAdded;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    foreach ($this->standRatings as $aStandRating)
    {
      $aStandRating->delete();
    }
  }

}




//%% NEW FILE PassordUtil BEGINS HERE %%


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/

class PassordUtil
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //PassordUtil Attributes
  private $SALTLENGDE;
  private $PASSORD_TEGNSETT;
  private $HASH_ALGORITME;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aSALTLENGDE, $aPASSORD_TEGNSETT, $aHASH_ALGORITME)
  {
    $this->SALTLENGDE = $aSALTLENGDE;
    $this->PASSORD_TEGNSETT = $aPASSORD_TEGNSETT;
    $this->HASH_ALGORITME = $aHASH_ALGORITME;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setSALTLENGDE($aSALTLENGDE)
  {
    $wasSet = false;
    $this->SALTLENGDE = $aSALTLENGDE;
    $wasSet = true;
    return $wasSet;
  }

  public function setPASSORD_TEGNSETT($aPASSORD_TEGNSETT)
  {
    $wasSet = false;
    $this->PASSORD_TEGNSETT = $aPASSORD_TEGNSETT;
    $wasSet = true;
    return $wasSet;
  }

  public function setHASH_ALGORITME($aHASH_ALGORITME)
  {
    $wasSet = false;
    $this->HASH_ALGORITME = $aHASH_ALGORITME;
    $wasSet = true;
    return $wasSet;
  }

  public function getSALTLENGDE()
  {
    return $this->SALTLENGDE;
  }

  public function getPASSORD_TEGNSETT()
  {
    return $this->PASSORD_TEGNSETT;
  }

  public function getHASH_ALGORITME()
  {
    return $this->HASH_ALGORITME;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}




//%% NEW FILE StandRating BEGINS HERE %%


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/

class StandRating
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //StandRating Attributes
  private $tlf;
  private $standId;
  private $rating;

  //StandRating Associations
  private $user;
  private $stand;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aTlf, $aStandId, $aRating, $aUser, $aStand)
  {
    $this->tlf = $aTlf;
    $this->standId = $aStandId;
    $this->rating = $aRating;
    $didAddUser = $this->setUser($aUser);
    if (!$didAddUser)
    {
      throw new Exception("Unable to create standRating due to user");
    }
    $didAddStand = $this->setStand($aStand);
    if (!$didAddStand)
    {
      throw new Exception("Unable to create standRating due to stand");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setTlf($aTlf)
  {
    $wasSet = false;
    $this->tlf = $aTlf;
    $wasSet = true;
    return $wasSet;
  }

  public function setStandId($aStandId)
  {
    $wasSet = false;
    $this->standId = $aStandId;
    $wasSet = true;
    return $wasSet;
  }

  public function setRating($aRating)
  {
    $wasSet = false;
    $this->rating = $aRating;
    $wasSet = true;
    return $wasSet;
  }

  public function getTlf()
  {
    return $this->tlf;
  }

  public function getStandId()
  {
    return $this->standId;
  }

  public function getRating()
  {
    return $this->rating;
  }

  public function getUser()
  {
    return $this->user;
  }

  public function getStand()
  {
    return $this->stand;
  }

  public function setUser($aUser)
  {
    $wasSet = false;
    if ($aUser == null)
    {
      return $wasSet;
    }

    $existingUser = $this->user;
    $this->user = $aUser;
    if ($existingUser != null && $existingUser != $aUser)
    {
      $existingUser->removeStandRating($this);
    }
    $this->user->addStandRating($this);
    $wasSet = true;
    return $wasSet;
  }

  public function setStand($aStand)
  {
    $wasSet = false;
    if ($aStand == null)
    {
      return $wasSet;
    }

    $existingStand = $this->stand;
    $this->stand = $aStand;
    if ($existingStand != null && $existingStand != $aStand)
    {
      $existingStand->removeStandRating($this);
    }
    $this->stand->addStandRating($this);
    $wasSet = true;
    return $wasSet;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $placeholderUser = $this->user;
    $this->user = null;
    $placeholderUser->removeStandRating($this);
    $placeholderStand = $this->stand;
    $this->stand = null;
    $placeholderStand->removeStandRating($this);
  }

}




//%% NEW FILE LoggInn BEGINS HERE %%


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/

class LoggInn
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //LoggInn Attributes
  private $mobilnr;
  private $passord;
  private $feilmelding;
  private $tillatmobilnr;
  private $tillatpassord;

  //LoggInn Associations
  private $standEAO;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aMobilnr, $aPassord, $aFeilmelding, $aTillatmobilnr, $aTillatpassord, $aStandEAO)
  {
    $this->mobilnr = $aMobilnr;
    $this->passord = $aPassord;
    $this->feilmelding = $aFeilmelding;
    $this->tillatmobilnr = $aTillatmobilnr;
    $this->tillatpassord = $aTillatpassord;
    $didAddStandEAO = $this->setStandEAO($aStandEAO);
    if (!$didAddStandEAO)
    {
      throw new Exception("Unable to create loggInn due to standEAO");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setMobilnr($aMobilnr)
  {
    $wasSet = false;
    $this->mobilnr = $aMobilnr;
    $wasSet = true;
    return $wasSet;
  }

  public function setPassord($aPassord)
  {
    $wasSet = false;
    $this->passord = $aPassord;
    $wasSet = true;
    return $wasSet;
  }

  public function setFeilmelding($aFeilmelding)
  {
    $wasSet = false;
    $this->feilmelding = $aFeilmelding;
    $wasSet = true;
    return $wasSet;
  }

  public function setTillatmobilnr($aTillatmobilnr)
  {
    $wasSet = false;
    $this->tillatmobilnr = $aTillatmobilnr;
    $wasSet = true;
    return $wasSet;
  }

  public function setTillatpassord($aTillatpassord)
  {
    $wasSet = false;
    $this->tillatpassord = $aTillatpassord;
    $wasSet = true;
    return $wasSet;
  }

  public function getMobilnr()
  {
    return $this->mobilnr;
  }

  public function getPassord()
  {
    return $this->passord;
  }

  public function getFeilmelding()
  {
    return $this->feilmelding;
  }

  public function getTillatmobilnr()
  {
    return $this->tillatmobilnr;
  }

  public function getTillatpassord()
  {
    return $this->tillatpassord;
  }

  public function getStandEAO()
  {
    return $this->standEAO;
  }

  public function setStandEAO($aStandEAO)
  {
    $wasSet = false;
    if ($aStandEAO == null)
    {
      return $wasSet;
    }

    $existingStandEAO = $this->standEAO;
    $this->standEAO = $aStandEAO;
    if ($existingStandEAO != null && $existingStandEAO != $aStandEAO)
    {
      $existingStandEAO->removeLoggInn($this);
    }
    $this->standEAO->addLoggInn($this);
    $wasSet = true;
    return $wasSet;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $placeholderStandEAO = $this->standEAO;
    $this->standEAO = null;
    $placeholderStandEAO->removeLoggInn($this);
  }

}




//%% NEW FILE StandEAO BEGINS HERE %%


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/

class StandEAO
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //StandEAO Attributes
  private $em;

  //StandEAO Associations
  private $loggInns;
  private $registrerings;
  private $redigeres;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aEm)
  {
    $this->em = $aEm;
    $this->loggInns = array();
    $this->registrerings = array();
    $this->redigeres = array();
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setEm($aEm)
  {
    $wasSet = false;
    $this->em = $aEm;
    $wasSet = true;
    return $wasSet;
  }

  public function getEm()
  {
    return $this->em;
  }

  public function getLoggInn_index($index)
  {
    $aLoggInn = $this->loggInns[$index];
    return $aLoggInn;
  }

  public function getLoggInns()
  {
    $newLoggInns = $this->loggInns;
    return $newLoggInns;
  }

  public function numberOfLoggInns()
  {
    $number = count($this->loggInns);
    return $number;
  }

  public function hasLoggInns()
  {
    $has = $this->numberOfLoggInns() > 0;
    return $has;
  }

  public function indexOfLoggInn($aLoggInn)
  {
    $wasFound = false;
    $index = 0;
    foreach($this->loggInns as $loggInn)
    {
      if ($loggInn->equals($aLoggInn))
      {
        $wasFound = true;
        break;
      }
      $index += 1;
    }
    $index = $wasFound ? $index : -1;
    return $index;
  }

  public function getRegistrering_index($index)
  {
    $aRegistrering = $this->registrerings[$index];
    return $aRegistrering;
  }

  public function getRegistrerings()
  {
    $newRegistrerings = $this->registrerings;
    return $newRegistrerings;
  }

  public function numberOfRegistrerings()
  {
    $number = count($this->registrerings);
    return $number;
  }

  public function hasRegistrerings()
  {
    $has = $this->numberOfRegistrerings() > 0;
    return $has;
  }

  public function indexOfRegistrering($aRegistrering)
  {
    $wasFound = false;
    $index = 0;
    foreach($this->registrerings as $registrering)
    {
      if ($registrering->equals($aRegistrering))
      {
        $wasFound = true;
        break;
      }
      $index += 1;
    }
    $index = $wasFound ? $index : -1;
    return $index;
  }

  public function getRedigere_index($index)
  {
    $aRedigere = $this->redigeres[$index];
    return $aRedigere;
  }

  public function getRedigeres()
  {
    $newRedigeres = $this->redigeres;
    return $newRedigeres;
  }

  public function numberOfRedigeres()
  {
    $number = count($this->redigeres);
    return $number;
  }

  public function hasRedigeres()
  {
    $has = $this->numberOfRedigeres() > 0;
    return $has;
  }

  public function indexOfRedigere($aRedigere)
  {
    $wasFound = false;
    $index = 0;
    foreach($this->redigeres as $redigere)
    {
      if ($redigere->equals($aRedigere))
      {
        $wasFound = true;
        break;
      }
      $index += 1;
    }
    $index = $wasFound ? $index : -1;
    return $index;
  }

  public static function minimumNumberOfLoggInns()
  {
    return 0;
  }

  public function addLoggInnVia($aMobilnr, $aPassord, $aFeilmelding, $aTillatmobilnr, $aTillatpassord)
  {
    return new LoggInn($aMobilnr, $aPassord, $aFeilmelding, $aTillatmobilnr, $aTillatpassord, $this);
  }

  public function addLoggInn($aLoggInn)
  {
    $wasAdded = false;
    if ($this->indexOfLoggInn($aLoggInn) !== -1) { return false; }
    $existingStandEAO = $aLoggInn->getStandEAO();
    $isNewStandEAO = $existingStandEAO != null && $this !== $existingStandEAO;
    if ($isNewStandEAO)
    {
      $aLoggInn->setStandEAO($this);
    }
    else
    {
      $this->loggInns[] = $aLoggInn;
    }
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeLoggInn($aLoggInn)
  {
    $wasRemoved = false;
    //Unable to remove aLoggInn, as it must always have a standEAO
    if ($this !== $aLoggInn->getStandEAO())
    {
      unset($this->loggInns[$this->indexOfLoggInn($aLoggInn)]);
      $this->loggInns = array_values($this->loggInns);
      $wasRemoved = true;
    }
    return $wasRemoved;
  }

  public function addLoggInnAt($aLoggInn, $index)
  {
    $wasAdded = false;
    if($this->addLoggInn($aLoggInn))
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfLoggInns()) { $index = $this->numberOfLoggInns() - 1; }
      array_splice($this->loggInns, $this->indexOfLoggInn($aLoggInn), 1);
      array_splice($this->loggInns, $index, 0, array($aLoggInn));
      $wasAdded = true;
    }
    return $wasAdded;
  }

  public function addOrMoveLoggInnAt($aLoggInn, $index)
  {
    $wasAdded = false;
    if($this->indexOfLoggInn($aLoggInn) !== -1)
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfLoggInns()) { $index = $this->numberOfLoggInns() - 1; }
      array_splice($this->loggInns, $this->indexOfLoggInn($aLoggInn), 1);
      array_splice($this->loggInns, $index, 0, array($aLoggInn));
      $wasAdded = true;
    }
    else
    {
      $wasAdded = $this->addLoggInnAt($aLoggInn, $index);
    }
    return $wasAdded;
  }

  public static function minimumNumberOfRegistrerings()
  {
    return 0;
  }

  public function addRegistreringVia($aPassord, $aPassordFeil, $aTlf, $aTlfFeil, $aRepeterPassord, $aRepeterFeil)
  {
    return new Registrering($aPassord, $aPassordFeil, $aTlf, $aTlfFeil, $aRepeterPassord, $aRepeterFeil, $this);
  }

  public function addRegistrering($aRegistrering)
  {
    $wasAdded = false;
    if ($this->indexOfRegistrering($aRegistrering) !== -1) { return false; }
    $existingStandEAO = $aRegistrering->getStandEAO();
    $isNewStandEAO = $existingStandEAO != null && $this !== $existingStandEAO;
    if ($isNewStandEAO)
    {
      $aRegistrering->setStandEAO($this);
    }
    else
    {
      $this->registrerings[] = $aRegistrering;
    }
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeRegistrering($aRegistrering)
  {
    $wasRemoved = false;
    //Unable to remove aRegistrering, as it must always have a standEAO
    if ($this !== $aRegistrering->getStandEAO())
    {
      unset($this->registrerings[$this->indexOfRegistrering($aRegistrering)]);
      $this->registrerings = array_values($this->registrerings);
      $wasRemoved = true;
    }
    return $wasRemoved;
  }

  public function addRegistreringAt($aRegistrering, $index)
  {
    $wasAdded = false;
    if($this->addRegistrering($aRegistrering))
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfRegistrerings()) { $index = $this->numberOfRegistrerings() - 1; }
      array_splice($this->registrerings, $this->indexOfRegistrering($aRegistrering), 1);
      array_splice($this->registrerings, $index, 0, array($aRegistrering));
      $wasAdded = true;
    }
    return $wasAdded;
  }

  public function addOrMoveRegistreringAt($aRegistrering, $index)
  {
    $wasAdded = false;
    if($this->indexOfRegistrering($aRegistrering) !== -1)
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfRegistrerings()) { $index = $this->numberOfRegistrerings() - 1; }
      array_splice($this->registrerings, $this->indexOfRegistrering($aRegistrering), 1);
      array_splice($this->registrerings, $index, 0, array($aRegistrering));
      $wasAdded = true;
    }
    else
    {
      $wasAdded = $this->addRegistreringAt($aRegistrering, $index);
    }
    return $wasAdded;
  }

  public static function minimumNumberOfRedigeres()
  {
    return 0;
  }

  public function addRedigereVia($aTittel, $aGruppenavn, $aLokasjon, $aBilde, $aBeskrivelse, $aStand)
  {
    return new Redigere($aTittel, $aGruppenavn, $aLokasjon, $aBilde, $aBeskrivelse, $this, $aStand);
  }

  public function addRedigere($aRedigere)
  {
    $wasAdded = false;
    if ($this->indexOfRedigere($aRedigere) !== -1) { return false; }
    $existingStandEAO = $aRedigere->getStandEAO();
    $isNewStandEAO = $existingStandEAO != null && $this !== $existingStandEAO;
    if ($isNewStandEAO)
    {
      $aRedigere->setStandEAO($this);
    }
    else
    {
      $this->redigeres[] = $aRedigere;
    }
    $wasAdded = true;
    return $wasAdded;
  }

  public function removeRedigere($aRedigere)
  {
    $wasRemoved = false;
    //Unable to remove aRedigere, as it must always have a standEAO
    if ($this !== $aRedigere->getStandEAO())
    {
      unset($this->redigeres[$this->indexOfRedigere($aRedigere)]);
      $this->redigeres = array_values($this->redigeres);
      $wasRemoved = true;
    }
    return $wasRemoved;
  }

  public function addRedigereAt($aRedigere, $index)
  {
    $wasAdded = false;
    if($this->addRedigere($aRedigere))
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfRedigeres()) { $index = $this->numberOfRedigeres() - 1; }
      array_splice($this->redigeres, $this->indexOfRedigere($aRedigere), 1);
      array_splice($this->redigeres, $index, 0, array($aRedigere));
      $wasAdded = true;
    }
    return $wasAdded;
  }

  public function addOrMoveRedigereAt($aRedigere, $index)
  {
    $wasAdded = false;
    if($this->indexOfRedigere($aRedigere) !== -1)
    {
      if($index < 0 ) { $index = 0; }
      if($index > $this->numberOfRedigeres()) { $index = $this->numberOfRedigeres() - 1; }
      array_splice($this->redigeres, $this->indexOfRedigere($aRedigere), 1);
      array_splice($this->redigeres, $index, 0, array($aRedigere));
      $wasAdded = true;
    }
    else
    {
      $wasAdded = $this->addRedigereAt($aRedigere, $index);
    }
    return $wasAdded;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    foreach ($this->loggInns as $aLoggInn)
    {
      $aLoggInn->delete();
    }
    foreach ($this->registrerings as $aRegistrering)
    {
      $aRegistrering->delete();
    }
    foreach ($this->redigeres as $aRedigere)
    {
      $aRedigere->delete();
    }
  }

}




//%% NEW FILE Redigere BEGINS HERE %%


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/

class Redigere
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Redigere Attributes
  private $tittel;
  private $gruppenavn;
  private $lokasjon;
  private $bilde;
  private $beskrivelse;

  //Redigere Associations
  private $standEAO;
  private $stand;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aTittel, $aGruppenavn, $aLokasjon, $aBilde, $aBeskrivelse, $aStandEAO, $aStand)
  {
    $this->tittel = $aTittel;
    $this->gruppenavn = $aGruppenavn;
    $this->lokasjon = $aLokasjon;
    $this->bilde = $aBilde;
    $this->beskrivelse = $aBeskrivelse;
    $didAddStandEAO = $this->setStandEAO($aStandEAO);
    if (!$didAddStandEAO)
    {
      throw new Exception("Unable to create redigere due to standEAO");
    }
    $didAddStand = $this->setStand($aStand);
    if (!$didAddStand)
    {
      throw new Exception("Unable to create redigere due to stand");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setTittel($aTittel)
  {
    $wasSet = false;
    $this->tittel = $aTittel;
    $wasSet = true;
    return $wasSet;
  }

  public function setGruppenavn($aGruppenavn)
  {
    $wasSet = false;
    $this->gruppenavn = $aGruppenavn;
    $wasSet = true;
    return $wasSet;
  }

  public function setLokasjon($aLokasjon)
  {
    $wasSet = false;
    $this->lokasjon = $aLokasjon;
    $wasSet = true;
    return $wasSet;
  }

  public function setBilde($aBilde)
  {
    $wasSet = false;
    $this->bilde = $aBilde;
    $wasSet = true;
    return $wasSet;
  }

  public function setBeskrivelse($aBeskrivelse)
  {
    $wasSet = false;
    $this->beskrivelse = $aBeskrivelse;
    $wasSet = true;
    return $wasSet;
  }

  public function getTittel()
  {
    return $this->tittel;
  }

  public function getGruppenavn()
  {
    return $this->gruppenavn;
  }

  public function getLokasjon()
  {
    return $this->lokasjon;
  }

  public function getBilde()
  {
    return $this->bilde;
  }

  public function getBeskrivelse()
  {
    return $this->beskrivelse;
  }

  public function getStandEAO()
  {
    return $this->standEAO;
  }

  public function getStand()
  {
    return $this->stand;
  }

  public function setStandEAO($aStandEAO)
  {
    $wasSet = false;
    if ($aStandEAO == null)
    {
      return $wasSet;
    }

    $existingStandEAO = $this->standEAO;
    $this->standEAO = $aStandEAO;
    if ($existingStandEAO != null && $existingStandEAO != $aStandEAO)
    {
      $existingStandEAO->removeRedigere($this);
    }
    $this->standEAO->addRedigere($this);
    $wasSet = true;
    return $wasSet;
  }

  public function setStand($aStand)
  {
    $wasSet = false;
    if ($aStand == null)
    {
      return $wasSet;
    }

    $existingStand = $this->stand;
    $this->stand = $aStand;
    if ($existingStand != null && $existingStand != $aStand)
    {
      $existingStand->removeRedigere($this);
    }
    $this->stand->addRedigere($this);
    $wasSet = true;
    return $wasSet;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $placeholderStandEAO = $this->standEAO;
    $this->standEAO = null;
    $placeholderStandEAO->removeRedigere($this);
    $placeholderStand = $this->stand;
    $this->stand = null;
    $placeholderStand->removeRedigere($this);
  }

}




//%% NEW FILE Registrering BEGINS HERE %%


/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/

class Registrering
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Registrering Attributes
  private $passord;
  private $passordFeil;
  private $tlf;
  private $tlfFeil;
  private $repeterPassord;
  private $repeterFeil;

  //Registrering Associations
  private $standEAO;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct($aPassord, $aPassordFeil, $aTlf, $aTlfFeil, $aRepeterPassord, $aRepeterFeil, $aStandEAO)
  {
    $this->passord = $aPassord;
    $this->passordFeil = $aPassordFeil;
    $this->tlf = $aTlf;
    $this->tlfFeil = $aTlfFeil;
    $this->repeterPassord = $aRepeterPassord;
    $this->repeterFeil = $aRepeterFeil;
    $didAddStandEAO = $this->setStandEAO($aStandEAO);
    if (!$didAddStandEAO)
    {
      throw new Exception("Unable to create registrering due to standEAO");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setPassord($aPassord)
  {
    $wasSet = false;
    $this->passord = $aPassord;
    $wasSet = true;
    return $wasSet;
  }

  public function setPassordFeil($aPassordFeil)
  {
    $wasSet = false;
    $this->passordFeil = $aPassordFeil;
    $wasSet = true;
    return $wasSet;
  }

  public function setTlf($aTlf)
  {
    $wasSet = false;
    $this->tlf = $aTlf;
    $wasSet = true;
    return $wasSet;
  }

  public function setTlfFeil($aTlfFeil)
  {
    $wasSet = false;
    $this->tlfFeil = $aTlfFeil;
    $wasSet = true;
    return $wasSet;
  }

  public function setRepeterPassord($aRepeterPassord)
  {
    $wasSet = false;
    $this->repeterPassord = $aRepeterPassord;
    $wasSet = true;
    return $wasSet;
  }

  public function setRepeterFeil($aRepeterFeil)
  {
    $wasSet = false;
    $this->repeterFeil = $aRepeterFeil;
    $wasSet = true;
    return $wasSet;
  }

  public function getPassord()
  {
    return $this->passord;
  }

  public function getPassordFeil()
  {
    return $this->passordFeil;
  }

  public function getTlf()
  {
    return $this->tlf;
  }

  public function getTlfFeil()
  {
    return $this->tlfFeil;
  }

  public function getRepeterPassord()
  {
    return $this->repeterPassord;
  }

  public function getRepeterFeil()
  {
    return $this->repeterFeil;
  }

  public function getStandEAO()
  {
    return $this->standEAO;
  }

  public function setStandEAO($aStandEAO)
  {
    $wasSet = false;
    if ($aStandEAO == null)
    {
      return $wasSet;
    }

    $existingStandEAO = $this->standEAO;
    $this->standEAO = $aStandEAO;
    if ($existingStandEAO != null && $existingStandEAO != $aStandEAO)
    {
      $existingStandEAO->removeRegistrering($this);
    }
    $this->standEAO->addRegistrering($this);
    $wasSet = true;
    return $wasSet;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {
    $placeholderStandEAO = $this->standEAO;
    $this->standEAO = null;
    $placeholderStandEAO->removeRegistrering($this);
  }

}
