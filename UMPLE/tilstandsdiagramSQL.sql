-- PLEASE DO NOT EDIT THIS CODE
-- This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!



CREATE TABLE IF NOT EXISTS `expo`
(
  /*------------------------*/
  /* MEMBER VARIABLES       */
  /*------------------------*/
  
  /*Expo State Machines*/
  status ENUM('qr', 'standliste', 'stand', 'logginn', 'registrering', 'rating', 'jury', 'juryfunksjoner', 'endre_stand', 'leggtil_stand', 'poengtavle'),
  PRIMARY KEY(status)

);


