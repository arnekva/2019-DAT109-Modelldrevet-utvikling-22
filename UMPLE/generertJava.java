//%% NEW FILE Stand BEGINS HERE %%

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/


import java.util.*;

// line 63 "model.ump"
public class Stand
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Stand Attributes
  private int standid;
  private String tittel;
  private String beskrivelse;
  private String gruppenavn;
  private String lokasjon;
  private String bildeurl;
  private String qrUrl;
  private double kalkulertscore;

  //Stand Associations
  private List<Redigere> redigeres;
  private List<StandRating> standRatings;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public Stand(int aStandid, String aTittel, String aBeskrivelse, String aGruppenavn, String aLokasjon, String aBildeurl, String aQrUrl, double aKalkulertscore)
  {
    standid = aStandid;
    tittel = aTittel;
    beskrivelse = aBeskrivelse;
    gruppenavn = aGruppenavn;
    lokasjon = aLokasjon;
    bildeurl = aBildeurl;
    qrUrl = aQrUrl;
    kalkulertscore = aKalkulertscore;
    redigeres = new ArrayList<Redigere>();
    standRatings = new ArrayList<StandRating>();
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setStandid(int aStandid)
  {
    boolean wasSet = false;
    standid = aStandid;
    wasSet = true;
    return wasSet;
  }

  public boolean setTittel(String aTittel)
  {
    boolean wasSet = false;
    tittel = aTittel;
    wasSet = true;
    return wasSet;
  }

  public boolean setBeskrivelse(String aBeskrivelse)
  {
    boolean wasSet = false;
    beskrivelse = aBeskrivelse;
    wasSet = true;
    return wasSet;
  }

  public boolean setGruppenavn(String aGruppenavn)
  {
    boolean wasSet = false;
    gruppenavn = aGruppenavn;
    wasSet = true;
    return wasSet;
  }

  public boolean setLokasjon(String aLokasjon)
  {
    boolean wasSet = false;
    lokasjon = aLokasjon;
    wasSet = true;
    return wasSet;
  }

  public boolean setBildeurl(String aBildeurl)
  {
    boolean wasSet = false;
    bildeurl = aBildeurl;
    wasSet = true;
    return wasSet;
  }

  public boolean setQrUrl(String aQrUrl)
  {
    boolean wasSet = false;
    qrUrl = aQrUrl;
    wasSet = true;
    return wasSet;
  }

  public boolean setKalkulertscore(double aKalkulertscore)
  {
    boolean wasSet = false;
    kalkulertscore = aKalkulertscore;
    wasSet = true;
    return wasSet;
  }

  public int getStandid()
  {
    return standid;
  }

  public String getTittel()
  {
    return tittel;
  }

  public String getBeskrivelse()
  {
    return beskrivelse;
  }

  public String getGruppenavn()
  {
    return gruppenavn;
  }

  public String getLokasjon()
  {
    return lokasjon;
  }

  public String getBildeurl()
  {
    return bildeurl;
  }

  public String getQrUrl()
  {
    return qrUrl;
  }

  public double getKalkulertscore()
  {
    return kalkulertscore;
  }
  /* Code from template association_GetMany */
  public Redigere getRedigere(int index)
  {
    Redigere aRedigere = redigeres.get(index);
    return aRedigere;
  }

  public List<Redigere> getRedigeres()
  {
    List<Redigere> newRedigeres = Collections.unmodifiableList(redigeres);
    return newRedigeres;
  }

  public int numberOfRedigeres()
  {
    int number = redigeres.size();
    return number;
  }

  public boolean hasRedigeres()
  {
    boolean has = redigeres.size() > 0;
    return has;
  }

  public int indexOfRedigere(Redigere aRedigere)
  {
    int index = redigeres.indexOf(aRedigere);
    return index;
  }
  /* Code from template association_GetMany */
  public StandRating getStandRating(int index)
  {
    StandRating aStandRating = standRatings.get(index);
    return aStandRating;
  }

  public List<StandRating> getStandRatings()
  {
    List<StandRating> newStandRatings = Collections.unmodifiableList(standRatings);
    return newStandRatings;
  }

  public int numberOfStandRatings()
  {
    int number = standRatings.size();
    return number;
  }

  public boolean hasStandRatings()
  {
    boolean has = standRatings.size() > 0;
    return has;
  }

  public int indexOfStandRating(StandRating aStandRating)
  {
    int index = standRatings.indexOf(aStandRating);
    return index;
  }
  /* Code from template association_MinimumNumberOfMethod */
  public static int minimumNumberOfRedigeres()
  {
    return 0;
  }
  /* Code from template association_AddManyToOne */
  public Redigere addRedigere(String aTittel, String aGruppenavn, String aLokasjon, String aBilde, String aBeskrivelse, StandEAO aStandEAO)
  {
    return new Redigere(aTittel, aGruppenavn, aLokasjon, aBilde, aBeskrivelse, aStandEAO, this);
  }

  public boolean addRedigere(Redigere aRedigere)
  {
    boolean wasAdded = false;
    if (redigeres.contains(aRedigere)) { return false; }
    Stand existingStand = aRedigere.getStand();
    boolean isNewStand = existingStand != null && !this.equals(existingStand);
    if (isNewStand)
    {
      aRedigere.setStand(this);
    }
    else
    {
      redigeres.add(aRedigere);
    }
    wasAdded = true;
    return wasAdded;
  }

  public boolean removeRedigere(Redigere aRedigere)
  {
    boolean wasRemoved = false;
    //Unable to remove aRedigere, as it must always have a stand
    if (!this.equals(aRedigere.getStand()))
    {
      redigeres.remove(aRedigere);
      wasRemoved = true;
    }
    return wasRemoved;
  }
  /* Code from template association_AddIndexControlFunctions */
  public boolean addRedigereAt(Redigere aRedigere, int index)
  {
    boolean wasAdded = false;
    if(addRedigere(aRedigere))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfRedigeres()) { index = numberOfRedigeres() - 1; }
      redigeres.remove(aRedigere);
      redigeres.add(index, aRedigere);
      wasAdded = true;
    }
    return wasAdded;
  }

  public boolean addOrMoveRedigereAt(Redigere aRedigere, int index)
  {
    boolean wasAdded = false;
    if(redigeres.contains(aRedigere))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfRedigeres()) { index = numberOfRedigeres() - 1; }
      redigeres.remove(aRedigere);
      redigeres.add(index, aRedigere);
      wasAdded = true;
    }
    else
    {
      wasAdded = addRedigereAt(aRedigere, index);
    }
    return wasAdded;
  }
  /* Code from template association_MinimumNumberOfMethod */
  public static int minimumNumberOfStandRatings()
  {
    return 0;
  }
  /* Code from template association_AddManyToOne */
  public StandRating addStandRating(int aTlf, int aStandId, double aRating, User aUser)
  {
    return new StandRating(aTlf, aStandId, aRating, aUser, this);
  }

  public boolean addStandRating(StandRating aStandRating)
  {
    boolean wasAdded = false;
    if (standRatings.contains(aStandRating)) { return false; }
    Stand existingStand = aStandRating.getStand();
    boolean isNewStand = existingStand != null && !this.equals(existingStand);
    if (isNewStand)
    {
      aStandRating.setStand(this);
    }
    else
    {
      standRatings.add(aStandRating);
    }
    wasAdded = true;
    return wasAdded;
  }

  public boolean removeStandRating(StandRating aStandRating)
  {
    boolean wasRemoved = false;
    //Unable to remove aStandRating, as it must always have a stand
    if (!this.equals(aStandRating.getStand()))
    {
      standRatings.remove(aStandRating);
      wasRemoved = true;
    }
    return wasRemoved;
  }
  /* Code from template association_AddIndexControlFunctions */
  public boolean addStandRatingAt(StandRating aStandRating, int index)
  {
    boolean wasAdded = false;
    if(addStandRating(aStandRating))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfStandRatings()) { index = numberOfStandRatings() - 1; }
      standRatings.remove(aStandRating);
      standRatings.add(index, aStandRating);
      wasAdded = true;
    }
    return wasAdded;
  }

  public boolean addOrMoveStandRatingAt(StandRating aStandRating, int index)
  {
    boolean wasAdded = false;
    if(standRatings.contains(aStandRating))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfStandRatings()) { index = numberOfStandRatings() - 1; }
      standRatings.remove(aStandRating);
      standRatings.add(index, aStandRating);
      wasAdded = true;
    }
    else
    {
      wasAdded = addStandRatingAt(aStandRating, index);
    }
    return wasAdded;
  }

  public void delete()
  {
    for(int i=redigeres.size(); i > 0; i--)
    {
      Redigere aRedigere = redigeres.get(i - 1);
      aRedigere.delete();
    }
    for(int i=standRatings.size(); i > 0; i--)
    {
      StandRating aStandRating = standRatings.get(i - 1);
      aStandRating.delete();
    }
  }


  public String toString()
  {
    return super.toString() + "["+
            "standid" + ":" + getStandid()+ "," +
            "tittel" + ":" + getTittel()+ "," +
            "beskrivelse" + ":" + getBeskrivelse()+ "," +
            "gruppenavn" + ":" + getGruppenavn()+ "," +
            "lokasjon" + ":" + getLokasjon()+ "," +
            "bildeurl" + ":" + getBildeurl()+ "," +
            "qrUrl" + ":" + getQrUrl()+ "," +
            "kalkulertscore" + ":" + getKalkulertscore()+ "]";
  }
}



//%% NEW FILE User BEGINS HERE %%

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/


import java.util.*;

// line 58 "model.ump"
public class User
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //User Attributes
  private int tlfnr;
  private String passord;

  //User Associations
  private List<StandRating> standRatings;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public User(int aTlfnr, String aPassord)
  {
    tlfnr = aTlfnr;
    passord = aPassord;
    standRatings = new ArrayList<StandRating>();
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setTlfnr(int aTlfnr)
  {
    boolean wasSet = false;
    tlfnr = aTlfnr;
    wasSet = true;
    return wasSet;
  }

  public boolean setPassord(String aPassord)
  {
    boolean wasSet = false;
    passord = aPassord;
    wasSet = true;
    return wasSet;
  }

  public int getTlfnr()
  {
    return tlfnr;
  }

  public String getPassord()
  {
    return passord;
  }
  /* Code from template association_GetMany */
  public StandRating getStandRating(int index)
  {
    StandRating aStandRating = standRatings.get(index);
    return aStandRating;
  }

  public List<StandRating> getStandRatings()
  {
    List<StandRating> newStandRatings = Collections.unmodifiableList(standRatings);
    return newStandRatings;
  }

  public int numberOfStandRatings()
  {
    int number = standRatings.size();
    return number;
  }

  public boolean hasStandRatings()
  {
    boolean has = standRatings.size() > 0;
    return has;
  }

  public int indexOfStandRating(StandRating aStandRating)
  {
    int index = standRatings.indexOf(aStandRating);
    return index;
  }
  /* Code from template association_MinimumNumberOfMethod */
  public static int minimumNumberOfStandRatings()
  {
    return 0;
  }
  /* Code from template association_AddManyToOne */
  public StandRating addStandRating(int aTlf, int aStandId, double aRating, Stand aStand)
  {
    return new StandRating(aTlf, aStandId, aRating, this, aStand);
  }

  public boolean addStandRating(StandRating aStandRating)
  {
    boolean wasAdded = false;
    if (standRatings.contains(aStandRating)) { return false; }
    User existingUser = aStandRating.getUser();
    boolean isNewUser = existingUser != null && !this.equals(existingUser);
    if (isNewUser)
    {
      aStandRating.setUser(this);
    }
    else
    {
      standRatings.add(aStandRating);
    }
    wasAdded = true;
    return wasAdded;
  }

  public boolean removeStandRating(StandRating aStandRating)
  {
    boolean wasRemoved = false;
    //Unable to remove aStandRating, as it must always have a user
    if (!this.equals(aStandRating.getUser()))
    {
      standRatings.remove(aStandRating);
      wasRemoved = true;
    }
    return wasRemoved;
  }
  /* Code from template association_AddIndexControlFunctions */
  public boolean addStandRatingAt(StandRating aStandRating, int index)
  {
    boolean wasAdded = false;
    if(addStandRating(aStandRating))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfStandRatings()) { index = numberOfStandRatings() - 1; }
      standRatings.remove(aStandRating);
      standRatings.add(index, aStandRating);
      wasAdded = true;
    }
    return wasAdded;
  }

  public boolean addOrMoveStandRatingAt(StandRating aStandRating, int index)
  {
    boolean wasAdded = false;
    if(standRatings.contains(aStandRating))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfStandRatings()) { index = numberOfStandRatings() - 1; }
      standRatings.remove(aStandRating);
      standRatings.add(index, aStandRating);
      wasAdded = true;
    }
    else
    {
      wasAdded = addStandRatingAt(aStandRating, index);
    }
    return wasAdded;
  }

  public void delete()
  {
    for(int i=standRatings.size(); i > 0; i--)
    {
      StandRating aStandRating = standRatings.get(i - 1);
      aStandRating.delete();
    }
  }


  public String toString()
  {
    return super.toString() + "["+
            "tlfnr" + ":" + getTlfnr()+ "," +
            "passord" + ":" + getPassord()+ "]";
  }
}



//%% NEW FILE PassordUtil BEGINS HERE %%

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/



// line 25 "model.ump"
public class PassordUtil
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //PassordUtil Attributes
  private int SALTLENGDE;
  private String PASSORD_TEGNSETT;
  private String HASH_ALGORITME;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public PassordUtil(int aSALTLENGDE, String aPASSORD_TEGNSETT, String aHASH_ALGORITME)
  {
    SALTLENGDE = aSALTLENGDE;
    PASSORD_TEGNSETT = aPASSORD_TEGNSETT;
    HASH_ALGORITME = aHASH_ALGORITME;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setSALTLENGDE(int aSALTLENGDE)
  {
    boolean wasSet = false;
    SALTLENGDE = aSALTLENGDE;
    wasSet = true;
    return wasSet;
  }

  public boolean setPASSORD_TEGNSETT(String aPASSORD_TEGNSETT)
  {
    boolean wasSet = false;
    PASSORD_TEGNSETT = aPASSORD_TEGNSETT;
    wasSet = true;
    return wasSet;
  }

  public boolean setHASH_ALGORITME(String aHASH_ALGORITME)
  {
    boolean wasSet = false;
    HASH_ALGORITME = aHASH_ALGORITME;
    wasSet = true;
    return wasSet;
  }

  public int getSALTLENGDE()
  {
    return SALTLENGDE;
  }

  public String getPASSORD_TEGNSETT()
  {
    return PASSORD_TEGNSETT;
  }

  public String getHASH_ALGORITME()
  {
    return HASH_ALGORITME;
  }

  public void delete()
  {}


  public String toString()
  {
    return super.toString() + "["+
            "SALTLENGDE" + ":" + getSALTLENGDE()+ "," +
            "PASSORD_TEGNSETT" + ":" + getPASSORD_TEGNSETT()+ "," +
            "HASH_ALGORITME" + ":" + getHASH_ALGORITME()+ "]";
  }
}



//%% NEW FILE StandRating BEGINS HERE %%

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/



// line 51 "model.ump"
public class StandRating
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //StandRating Attributes
  private int tlf;
  private int standId;
  private double rating;

  //StandRating Associations
  private User user;
  private Stand stand;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public StandRating(int aTlf, int aStandId, double aRating, User aUser, Stand aStand)
  {
    tlf = aTlf;
    standId = aStandId;
    rating = aRating;
    boolean didAddUser = setUser(aUser);
    if (!didAddUser)
    {
      throw new RuntimeException("Unable to create standRating due to user");
    }
    boolean didAddStand = setStand(aStand);
    if (!didAddStand)
    {
      throw new RuntimeException("Unable to create standRating due to stand");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setTlf(int aTlf)
  {
    boolean wasSet = false;
    tlf = aTlf;
    wasSet = true;
    return wasSet;
  }

  public boolean setStandId(int aStandId)
  {
    boolean wasSet = false;
    standId = aStandId;
    wasSet = true;
    return wasSet;
  }

  public boolean setRating(double aRating)
  {
    boolean wasSet = false;
    rating = aRating;
    wasSet = true;
    return wasSet;
  }

  public int getTlf()
  {
    return tlf;
  }

  public int getStandId()
  {
    return standId;
  }

  public double getRating()
  {
    return rating;
  }
  /* Code from template association_GetOne */
  public User getUser()
  {
    return user;
  }
  /* Code from template association_GetOne */
  public Stand getStand()
  {
    return stand;
  }
  /* Code from template association_SetOneToMany */
  public boolean setUser(User aUser)
  {
    boolean wasSet = false;
    if (aUser == null)
    {
      return wasSet;
    }

    User existingUser = user;
    user = aUser;
    if (existingUser != null && !existingUser.equals(aUser))
    {
      existingUser.removeStandRating(this);
    }
    user.addStandRating(this);
    wasSet = true;
    return wasSet;
  }
  /* Code from template association_SetOneToMany */
  public boolean setStand(Stand aStand)
  {
    boolean wasSet = false;
    if (aStand == null)
    {
      return wasSet;
    }

    Stand existingStand = stand;
    stand = aStand;
    if (existingStand != null && !existingStand.equals(aStand))
    {
      existingStand.removeStandRating(this);
    }
    stand.addStandRating(this);
    wasSet = true;
    return wasSet;
  }

  public void delete()
  {
    User placeholderUser = user;
    this.user = null;
    if(placeholderUser != null)
    {
      placeholderUser.removeStandRating(this);
    }
    Stand placeholderStand = stand;
    this.stand = null;
    if(placeholderStand != null)
    {
      placeholderStand.removeStandRating(this);
    }
  }


  public String toString()
  {
    return super.toString() + "["+
            "tlf" + ":" + getTlf()+ "," +
            "standId" + ":" + getStandId()+ "," +
            "rating" + ":" + getRating()+ "]" + System.getProperties().getProperty("line.separator") +
            "  " + "user = "+(getUser()!=null?Integer.toHexString(System.identityHashCode(getUser())):"null") + System.getProperties().getProperty("line.separator") +
            "  " + "stand = "+(getStand()!=null?Integer.toHexString(System.identityHashCode(getStand())):"null");
  }
}



//%% NEW FILE LoggInn BEGINS HERE %%

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/



// line 2 "model.ump"
// line 75 "model.ump"
public class LoggInn
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //LoggInn Attributes
  private String mobilnr;
  private String passord;
  private String feilmelding;
  private String tillatmobilnr;
  private String tillatpassord;

  //LoggInn Associations
  private StandEAO standEAO;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public LoggInn(String aMobilnr, String aPassord, String aFeilmelding, String aTillatmobilnr, String aTillatpassord, StandEAO aStandEAO)
  {
    mobilnr = aMobilnr;
    passord = aPassord;
    feilmelding = aFeilmelding;
    tillatmobilnr = aTillatmobilnr;
    tillatpassord = aTillatpassord;
    boolean didAddStandEAO = setStandEAO(aStandEAO);
    if (!didAddStandEAO)
    {
      throw new RuntimeException("Unable to create loggInn due to standEAO");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setMobilnr(String aMobilnr)
  {
    boolean wasSet = false;
    mobilnr = aMobilnr;
    wasSet = true;
    return wasSet;
  }

  public boolean setPassord(String aPassord)
  {
    boolean wasSet = false;
    passord = aPassord;
    wasSet = true;
    return wasSet;
  }

  public boolean setFeilmelding(String aFeilmelding)
  {
    boolean wasSet = false;
    feilmelding = aFeilmelding;
    wasSet = true;
    return wasSet;
  }

  public boolean setTillatmobilnr(String aTillatmobilnr)
  {
    boolean wasSet = false;
    tillatmobilnr = aTillatmobilnr;
    wasSet = true;
    return wasSet;
  }

  public boolean setTillatpassord(String aTillatpassord)
  {
    boolean wasSet = false;
    tillatpassord = aTillatpassord;
    wasSet = true;
    return wasSet;
  }

  public String getMobilnr()
  {
    return mobilnr;
  }

  public String getPassord()
  {
    return passord;
  }

  public String getFeilmelding()
  {
    return feilmelding;
  }

  public String getTillatmobilnr()
  {
    return tillatmobilnr;
  }

  public String getTillatpassord()
  {
    return tillatpassord;
  }
  /* Code from template association_GetOne */
  public StandEAO getStandEAO()
  {
    return standEAO;
  }
  /* Code from template association_SetOneToMany */
  public boolean setStandEAO(StandEAO aStandEAO)
  {
    boolean wasSet = false;
    if (aStandEAO == null)
    {
      return wasSet;
    }

    StandEAO existingStandEAO = standEAO;
    standEAO = aStandEAO;
    if (existingStandEAO != null && !existingStandEAO.equals(aStandEAO))
    {
      existingStandEAO.removeLoggInn(this);
    }
    standEAO.addLoggInn(this);
    wasSet = true;
    return wasSet;
  }

  public void delete()
  {
    StandEAO placeholderStandEAO = standEAO;
    this.standEAO = null;
    if(placeholderStandEAO != null)
    {
      placeholderStandEAO.removeLoggInn(this);
    }
  }


  public String toString()
  {
    return super.toString() + "["+
            "mobilnr" + ":" + getMobilnr()+ "," +
            "passord" + ":" + getPassord()+ "," +
            "feilmelding" + ":" + getFeilmelding()+ "," +
            "tillatmobilnr" + ":" + getTillatmobilnr()+ "," +
            "tillatpassord" + ":" + getTillatpassord()+ "]" + System.getProperties().getProperty("line.separator") +
            "  " + "standEAO = "+(getStandEAO()!=null?Integer.toHexString(System.identityHashCode(getStandEAO())):"null");
  }
}



//%% NEW FILE StandEAO BEGINS HERE %%

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/


import java.util.*;

// line 46 "model.ump"
public class StandEAO
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //StandEAO Attributes
  private EntityManager em;

  //StandEAO Associations
  private List<LoggInn> loggInns;
  private List<Registrering> registrerings;
  private List<Redigere> redigeres;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public StandEAO(EntityManager aEm)
  {
    em = aEm;
    loggInns = new ArrayList<LoggInn>();
    registrerings = new ArrayList<Registrering>();
    redigeres = new ArrayList<Redigere>();
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setEm(EntityManager aEm)
  {
    boolean wasSet = false;
    em = aEm;
    wasSet = true;
    return wasSet;
  }

  public EntityManager getEm()
  {
    return em;
  }
  /* Code from template association_GetMany */
  public LoggInn getLoggInn(int index)
  {
    LoggInn aLoggInn = loggInns.get(index);
    return aLoggInn;
  }

  public List<LoggInn> getLoggInns()
  {
    List<LoggInn> newLoggInns = Collections.unmodifiableList(loggInns);
    return newLoggInns;
  }

  public int numberOfLoggInns()
  {
    int number = loggInns.size();
    return number;
  }

  public boolean hasLoggInns()
  {
    boolean has = loggInns.size() > 0;
    return has;
  }

  public int indexOfLoggInn(LoggInn aLoggInn)
  {
    int index = loggInns.indexOf(aLoggInn);
    return index;
  }
  /* Code from template association_GetMany */
  public Registrering getRegistrering(int index)
  {
    Registrering aRegistrering = registrerings.get(index);
    return aRegistrering;
  }

  public List<Registrering> getRegistrerings()
  {
    List<Registrering> newRegistrerings = Collections.unmodifiableList(registrerings);
    return newRegistrerings;
  }

  public int numberOfRegistrerings()
  {
    int number = registrerings.size();
    return number;
  }

  public boolean hasRegistrerings()
  {
    boolean has = registrerings.size() > 0;
    return has;
  }

  public int indexOfRegistrering(Registrering aRegistrering)
  {
    int index = registrerings.indexOf(aRegistrering);
    return index;
  }
  /* Code from template association_GetMany */
  public Redigere getRedigere(int index)
  {
    Redigere aRedigere = redigeres.get(index);
    return aRedigere;
  }

  public List<Redigere> getRedigeres()
  {
    List<Redigere> newRedigeres = Collections.unmodifiableList(redigeres);
    return newRedigeres;
  }

  public int numberOfRedigeres()
  {
    int number = redigeres.size();
    return number;
  }

  public boolean hasRedigeres()
  {
    boolean has = redigeres.size() > 0;
    return has;
  }

  public int indexOfRedigere(Redigere aRedigere)
  {
    int index = redigeres.indexOf(aRedigere);
    return index;
  }
  /* Code from template association_MinimumNumberOfMethod */
  public static int minimumNumberOfLoggInns()
  {
    return 0;
  }
  /* Code from template association_AddManyToOne */
  public LoggInn addLoggInn(String aMobilnr, String aPassord, String aFeilmelding, String aTillatmobilnr, String aTillatpassord)
  {
    return new LoggInn(aMobilnr, aPassord, aFeilmelding, aTillatmobilnr, aTillatpassord, this);
  }

  public boolean addLoggInn(LoggInn aLoggInn)
  {
    boolean wasAdded = false;
    if (loggInns.contains(aLoggInn)) { return false; }
    StandEAO existingStandEAO = aLoggInn.getStandEAO();
    boolean isNewStandEAO = existingStandEAO != null && !this.equals(existingStandEAO);
    if (isNewStandEAO)
    {
      aLoggInn.setStandEAO(this);
    }
    else
    {
      loggInns.add(aLoggInn);
    }
    wasAdded = true;
    return wasAdded;
  }

  public boolean removeLoggInn(LoggInn aLoggInn)
  {
    boolean wasRemoved = false;
    //Unable to remove aLoggInn, as it must always have a standEAO
    if (!this.equals(aLoggInn.getStandEAO()))
    {
      loggInns.remove(aLoggInn);
      wasRemoved = true;
    }
    return wasRemoved;
  }
  /* Code from template association_AddIndexControlFunctions */
  public boolean addLoggInnAt(LoggInn aLoggInn, int index)
  {
    boolean wasAdded = false;
    if(addLoggInn(aLoggInn))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfLoggInns()) { index = numberOfLoggInns() - 1; }
      loggInns.remove(aLoggInn);
      loggInns.add(index, aLoggInn);
      wasAdded = true;
    }
    return wasAdded;
  }

  public boolean addOrMoveLoggInnAt(LoggInn aLoggInn, int index)
  {
    boolean wasAdded = false;
    if(loggInns.contains(aLoggInn))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfLoggInns()) { index = numberOfLoggInns() - 1; }
      loggInns.remove(aLoggInn);
      loggInns.add(index, aLoggInn);
      wasAdded = true;
    }
    else
    {
      wasAdded = addLoggInnAt(aLoggInn, index);
    }
    return wasAdded;
  }
  /* Code from template association_MinimumNumberOfMethod */
  public static int minimumNumberOfRegistrerings()
  {
    return 0;
  }
  /* Code from template association_AddManyToOne */
  public Registrering addRegistrering(String aPassord, String aPassordFeil, String aTlf, String aTlfFeil, String aRepeterPassord, String aRepeterFeil)
  {
    return new Registrering(aPassord, aPassordFeil, aTlf, aTlfFeil, aRepeterPassord, aRepeterFeil, this);
  }

  public boolean addRegistrering(Registrering aRegistrering)
  {
    boolean wasAdded = false;
    if (registrerings.contains(aRegistrering)) { return false; }
    StandEAO existingStandEAO = aRegistrering.getStandEAO();
    boolean isNewStandEAO = existingStandEAO != null && !this.equals(existingStandEAO);
    if (isNewStandEAO)
    {
      aRegistrering.setStandEAO(this);
    }
    else
    {
      registrerings.add(aRegistrering);
    }
    wasAdded = true;
    return wasAdded;
  }

  public boolean removeRegistrering(Registrering aRegistrering)
  {
    boolean wasRemoved = false;
    //Unable to remove aRegistrering, as it must always have a standEAO
    if (!this.equals(aRegistrering.getStandEAO()))
    {
      registrerings.remove(aRegistrering);
      wasRemoved = true;
    }
    return wasRemoved;
  }
  /* Code from template association_AddIndexControlFunctions */
  public boolean addRegistreringAt(Registrering aRegistrering, int index)
  {
    boolean wasAdded = false;
    if(addRegistrering(aRegistrering))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfRegistrerings()) { index = numberOfRegistrerings() - 1; }
      registrerings.remove(aRegistrering);
      registrerings.add(index, aRegistrering);
      wasAdded = true;
    }
    return wasAdded;
  }

  public boolean addOrMoveRegistreringAt(Registrering aRegistrering, int index)
  {
    boolean wasAdded = false;
    if(registrerings.contains(aRegistrering))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfRegistrerings()) { index = numberOfRegistrerings() - 1; }
      registrerings.remove(aRegistrering);
      registrerings.add(index, aRegistrering);
      wasAdded = true;
    }
    else
    {
      wasAdded = addRegistreringAt(aRegistrering, index);
    }
    return wasAdded;
  }
  /* Code from template association_MinimumNumberOfMethod */
  public static int minimumNumberOfRedigeres()
  {
    return 0;
  }
  /* Code from template association_AddManyToOne */
  public Redigere addRedigere(String aTittel, String aGruppenavn, String aLokasjon, String aBilde, String aBeskrivelse, Stand aStand)
  {
    return new Redigere(aTittel, aGruppenavn, aLokasjon, aBilde, aBeskrivelse, this, aStand);
  }

  public boolean addRedigere(Redigere aRedigere)
  {
    boolean wasAdded = false;
    if (redigeres.contains(aRedigere)) { return false; }
    StandEAO existingStandEAO = aRedigere.getStandEAO();
    boolean isNewStandEAO = existingStandEAO != null && !this.equals(existingStandEAO);
    if (isNewStandEAO)
    {
      aRedigere.setStandEAO(this);
    }
    else
    {
      redigeres.add(aRedigere);
    }
    wasAdded = true;
    return wasAdded;
  }

  public boolean removeRedigere(Redigere aRedigere)
  {
    boolean wasRemoved = false;
    //Unable to remove aRedigere, as it must always have a standEAO
    if (!this.equals(aRedigere.getStandEAO()))
    {
      redigeres.remove(aRedigere);
      wasRemoved = true;
    }
    return wasRemoved;
  }
  /* Code from template association_AddIndexControlFunctions */
  public boolean addRedigereAt(Redigere aRedigere, int index)
  {
    boolean wasAdded = false;
    if(addRedigere(aRedigere))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfRedigeres()) { index = numberOfRedigeres() - 1; }
      redigeres.remove(aRedigere);
      redigeres.add(index, aRedigere);
      wasAdded = true;
    }
    return wasAdded;
  }

  public boolean addOrMoveRedigereAt(Redigere aRedigere, int index)
  {
    boolean wasAdded = false;
    if(redigeres.contains(aRedigere))
    {
      if(index < 0 ) { index = 0; }
      if(index > numberOfRedigeres()) { index = numberOfRedigeres() - 1; }
      redigeres.remove(aRedigere);
      redigeres.add(index, aRedigere);
      wasAdded = true;
    }
    else
    {
      wasAdded = addRedigereAt(aRedigere, index);
    }
    return wasAdded;
  }

  public void delete()
  {
    for(int i=loggInns.size(); i > 0; i--)
    {
      LoggInn aLoggInn = loggInns.get(i - 1);
      aLoggInn.delete();
    }
    for(int i=registrerings.size(); i > 0; i--)
    {
      Registrering aRegistrering = registrerings.get(i - 1);
      aRegistrering.delete();
    }
    for(int i=redigeres.size(); i > 0; i--)
    {
      Redigere aRedigere = redigeres.get(i - 1);
      aRedigere.delete();
    }
  }


  public String toString()
  {
    return super.toString() + "["+ "]" + System.getProperties().getProperty("line.separator") +
            "  " + "em" + "=" + (getEm() != null ? !getEm().equals(this)  ? getEm().toString().replaceAll("  ","    ") : "this" : "null");
  }
}



//%% NEW FILE Redigere BEGINS HERE %%

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/



// line 34 "model.ump"
public class Redigere
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Redigere Attributes
  private String tittel;
  private String gruppenavn;
  private String lokasjon;
  private String bilde;
  private String beskrivelse;

  //Redigere Associations
  private StandEAO standEAO;
  private Stand stand;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public Redigere(String aTittel, String aGruppenavn, String aLokasjon, String aBilde, String aBeskrivelse, StandEAO aStandEAO, Stand aStand)
  {
    tittel = aTittel;
    gruppenavn = aGruppenavn;
    lokasjon = aLokasjon;
    bilde = aBilde;
    beskrivelse = aBeskrivelse;
    boolean didAddStandEAO = setStandEAO(aStandEAO);
    if (!didAddStandEAO)
    {
      throw new RuntimeException("Unable to create redigere due to standEAO");
    }
    boolean didAddStand = setStand(aStand);
    if (!didAddStand)
    {
      throw new RuntimeException("Unable to create redigere due to stand");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setTittel(String aTittel)
  {
    boolean wasSet = false;
    tittel = aTittel;
    wasSet = true;
    return wasSet;
  }

  public boolean setGruppenavn(String aGruppenavn)
  {
    boolean wasSet = false;
    gruppenavn = aGruppenavn;
    wasSet = true;
    return wasSet;
  }

  public boolean setLokasjon(String aLokasjon)
  {
    boolean wasSet = false;
    lokasjon = aLokasjon;
    wasSet = true;
    return wasSet;
  }

  public boolean setBilde(String aBilde)
  {
    boolean wasSet = false;
    bilde = aBilde;
    wasSet = true;
    return wasSet;
  }

  public boolean setBeskrivelse(String aBeskrivelse)
  {
    boolean wasSet = false;
    beskrivelse = aBeskrivelse;
    wasSet = true;
    return wasSet;
  }

  public String getTittel()
  {
    return tittel;
  }

  public String getGruppenavn()
  {
    return gruppenavn;
  }

  public String getLokasjon()
  {
    return lokasjon;
  }

  public String getBilde()
  {
    return bilde;
  }

  public String getBeskrivelse()
  {
    return beskrivelse;
  }
  /* Code from template association_GetOne */
  public StandEAO getStandEAO()
  {
    return standEAO;
  }
  /* Code from template association_GetOne */
  public Stand getStand()
  {
    return stand;
  }
  /* Code from template association_SetOneToMany */
  public boolean setStandEAO(StandEAO aStandEAO)
  {
    boolean wasSet = false;
    if (aStandEAO == null)
    {
      return wasSet;
    }

    StandEAO existingStandEAO = standEAO;
    standEAO = aStandEAO;
    if (existingStandEAO != null && !existingStandEAO.equals(aStandEAO))
    {
      existingStandEAO.removeRedigere(this);
    }
    standEAO.addRedigere(this);
    wasSet = true;
    return wasSet;
  }
  /* Code from template association_SetOneToMany */
  public boolean setStand(Stand aStand)
  {
    boolean wasSet = false;
    if (aStand == null)
    {
      return wasSet;
    }

    Stand existingStand = stand;
    stand = aStand;
    if (existingStand != null && !existingStand.equals(aStand))
    {
      existingStand.removeRedigere(this);
    }
    stand.addRedigere(this);
    wasSet = true;
    return wasSet;
  }

  public void delete()
  {
    StandEAO placeholderStandEAO = standEAO;
    this.standEAO = null;
    if(placeholderStandEAO != null)
    {
      placeholderStandEAO.removeRedigere(this);
    }
    Stand placeholderStand = stand;
    this.stand = null;
    if(placeholderStand != null)
    {
      placeholderStand.removeRedigere(this);
    }
  }


  public String toString()
  {
    return super.toString() + "["+
            "tittel" + ":" + getTittel()+ "," +
            "gruppenavn" + ":" + getGruppenavn()+ "," +
            "lokasjon" + ":" + getLokasjon()+ "," +
            "bilde" + ":" + getBilde()+ "," +
            "beskrivelse" + ":" + getBeskrivelse()+ "]" + System.getProperties().getProperty("line.separator") +
            "  " + "standEAO = "+(getStandEAO()!=null?Integer.toHexString(System.identityHashCode(getStandEAO())):"null") + System.getProperties().getProperty("line.separator") +
            "  " + "stand = "+(getStand()!=null?Integer.toHexString(System.identityHashCode(getStand())):"null");
  }
}



//%% NEW FILE Registrering BEGINS HERE %%

/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/



// line 14 "model.ump"
// line 80 "model.ump"
public class Registrering
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Registrering Attributes
  private String passord;
  private String passordFeil;
  private String tlf;
  private String tlfFeil;
  private String repeterPassord;
  private String repeterFeil;

  //Registrering Associations
  private StandEAO standEAO;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public Registrering(String aPassord, String aPassordFeil, String aTlf, String aTlfFeil, String aRepeterPassord, String aRepeterFeil, StandEAO aStandEAO)
  {
    passord = aPassord;
    passordFeil = aPassordFeil;
    tlf = aTlf;
    tlfFeil = aTlfFeil;
    repeterPassord = aRepeterPassord;
    repeterFeil = aRepeterFeil;
    boolean didAddStandEAO = setStandEAO(aStandEAO);
    if (!didAddStandEAO)
    {
      throw new RuntimeException("Unable to create registrering due to standEAO");
    }
  }

  //------------------------
  // INTERFACE
  //------------------------

  public boolean setPassord(String aPassord)
  {
    boolean wasSet = false;
    passord = aPassord;
    wasSet = true;
    return wasSet;
  }

  public boolean setPassordFeil(String aPassordFeil)
  {
    boolean wasSet = false;
    passordFeil = aPassordFeil;
    wasSet = true;
    return wasSet;
  }

  public boolean setTlf(String aTlf)
  {
    boolean wasSet = false;
    tlf = aTlf;
    wasSet = true;
    return wasSet;
  }

  public boolean setTlfFeil(String aTlfFeil)
  {
    boolean wasSet = false;
    tlfFeil = aTlfFeil;
    wasSet = true;
    return wasSet;
  }

  public boolean setRepeterPassord(String aRepeterPassord)
  {
    boolean wasSet = false;
    repeterPassord = aRepeterPassord;
    wasSet = true;
    return wasSet;
  }

  public boolean setRepeterFeil(String aRepeterFeil)
  {
    boolean wasSet = false;
    repeterFeil = aRepeterFeil;
    wasSet = true;
    return wasSet;
  }

  public String getPassord()
  {
    return passord;
  }

  public String getPassordFeil()
  {
    return passordFeil;
  }

  public String getTlf()
  {
    return tlf;
  }

  public String getTlfFeil()
  {
    return tlfFeil;
  }

  public String getRepeterPassord()
  {
    return repeterPassord;
  }

  public String getRepeterFeil()
  {
    return repeterFeil;
  }
  /* Code from template association_GetOne */
  public StandEAO getStandEAO()
  {
    return standEAO;
  }
  /* Code from template association_SetOneToMany */
  public boolean setStandEAO(StandEAO aStandEAO)
  {
    boolean wasSet = false;
    if (aStandEAO == null)
    {
      return wasSet;
    }

    StandEAO existingStandEAO = standEAO;
    standEAO = aStandEAO;
    if (existingStandEAO != null && !existingStandEAO.equals(aStandEAO))
    {
      existingStandEAO.removeRegistrering(this);
    }
    standEAO.addRegistrering(this);
    wasSet = true;
    return wasSet;
  }

  public void delete()
  {
    StandEAO placeholderStandEAO = standEAO;
    this.standEAO = null;
    if(placeholderStandEAO != null)
    {
      placeholderStandEAO.removeRegistrering(this);
    }
  }


  public String toString()
  {
    return super.toString() + "["+
            "passord" + ":" + getPassord()+ "," +
            "passordFeil" + ":" + getPassordFeil()+ "," +
            "tlf" + ":" + getTlf()+ "," +
            "tlfFeil" + ":" + getTlfFeil()+ "," +
            "repeterPassord" + ":" + getRepeterPassord()+ "," +
            "repeterFeil" + ":" + getRepeterFeil()+ "]" + System.getProperties().getProperty("line.separator") +
            "  " + "standEAO = "+(getStandEAO()!=null?Integer.toHexString(System.identityHashCode(getStandEAO())):"null");
  }
}
