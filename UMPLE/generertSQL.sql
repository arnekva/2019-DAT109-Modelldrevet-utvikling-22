//%% NEW FILE Stand BEGINS HERE %%

-- PLEASE DO NOT EDIT THIS CODE
-- This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!



CREATE TABLE IF NOT EXISTS `stand`
(
  /*------------------------*/
  /* MEMBER VARIABLES       */
  /*------------------------*/

  /*stand Attributes*/
  standid INT,
  tittel VARCHAR(255),
  beskrivelse VARCHAR(255),
  gruppenavn VARCHAR(255),
  lokasjon VARCHAR(255),
  bildeurl VARCHAR(255),
  qr_url VARCHAR(255),
  kalkulertscore DOUBLE,
  PRIMARY KEY(standid)

);






//%% NEW FILE User BEGINS HERE %%

-- PLEASE DO NOT EDIT THIS CODE
-- This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!



CREATE TABLE IF NOT EXISTS `user`
(
  /*------------------------*/
  /* MEMBER VARIABLES       */
  /*------------------------*/

  /*user Attributes*/
  tlfnr INT,
  passord VARCHAR(255),
  PRIMARY KEY(tlfnr)

);






//%% NEW FILE PassordUtil BEGINS HERE %%

-- PLEASE DO NOT EDIT THIS CODE
-- This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!



CREATE TABLE IF NOT EXISTS `passord_util`
(
  /*------------------------*/
  /* MEMBER VARIABLES       */
  /*------------------------*/

  /*passord_util Attributes*/
  saltlengde INT,
  passord_tegnsett VARCHAR(255),
  hash_algoritme VARCHAR(255),
  PRIMARY KEY(saltlengde)

);






//%% NEW FILE StandRating BEGINS HERE %%

-- PLEASE DO NOT EDIT THIS CODE
-- This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!



CREATE TABLE IF NOT EXISTS `stand_rating`
(
  /*------------------------*/
  /* MEMBER VARIABLES       */
  /*------------------------*/

  /*stand_rating Associations*/
  user_tlfnr INT,
  stand_standid INT,

  /*stand_rating Attributes*/
  tlf INT,
  stand_id INT,
  rating DOUBLE,
  PRIMARY KEY(tlf)

);


ALTER TABLE `stand_rating` ADD CONSTRAINT `fk_standrating_user_tlfnr` FOREIGN KEY (`user_tlfnr`) REFERENCES `user`(`tlfnr`);
ALTER TABLE `stand_rating` ADD CONSTRAINT `fk_standrating_stand_standid` FOREIGN KEY (`stand_standid`) REFERENCES `stand`(`standid`);




//%% NEW FILE LoggInn BEGINS HERE %%

-- PLEASE DO NOT EDIT THIS CODE
-- This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!



CREATE TABLE IF NOT EXISTS `logg_inn`
(
  /*------------------------*/
  /* MEMBER VARIABLES       */
  /*------------------------*/

  /*logg_inn Associations*/
  stand_eao_em BLOB,

  /*logg_inn Attributes*/
  mobilnr VARCHAR(255),
  passord VARCHAR(255),
  feilmelding VARCHAR(255),
  tillatmobilnr VARCHAR(255),
  tillatpassord VARCHAR(255),
  PRIMARY KEY(mobilnr)

);


ALTER TABLE `logg_inn` ADD CONSTRAINT `fk_logginn_stand_eao_em` FOREIGN KEY (`stand_eao_em`) REFERENCES `stand_eao`(`em`);




//%% NEW FILE StandEAO BEGINS HERE %%

-- PLEASE DO NOT EDIT THIS CODE
-- This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!



CREATE TABLE IF NOT EXISTS `stand_eao`
(
  /*------------------------*/
  /* MEMBER VARIABLES       */
  /*------------------------*/

  /*stand_eao Attributes*/
  em BLOB,
  PRIMARY KEY(em)

);






//%% NEW FILE Redigere BEGINS HERE %%

-- PLEASE DO NOT EDIT THIS CODE
-- This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!



CREATE TABLE IF NOT EXISTS `redigere`
(
  /*------------------------*/
  /* MEMBER VARIABLES       */
  /*------------------------*/

  /*redigere Associations*/
  stand_eao_em BLOB,
  stand_standid INT,

  /*redigere Attributes*/
  tittel VARCHAR(255),
  gruppenavn VARCHAR(255),
  lokasjon VARCHAR(255),
  bilde VARCHAR(255),
  beskrivelse VARCHAR(255),
  PRIMARY KEY(tittel)

);


ALTER TABLE `redigere` ADD CONSTRAINT `fk_redigere_stand_eao_em` FOREIGN KEY (`stand_eao_em`) REFERENCES `stand_eao`(`em`);
ALTER TABLE `redigere` ADD CONSTRAINT `fk_redigere_stand_standid` FOREIGN KEY (`stand_standid`) REFERENCES `stand`(`standid`);




//%% NEW FILE Registrering BEGINS HERE %%

-- PLEASE DO NOT EDIT THIS CODE
-- This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!



CREATE TABLE IF NOT EXISTS `registrering`
(
  /*------------------------*/
  /* MEMBER VARIABLES       */
  /*------------------------*/

  /*registrering Associations*/
  stand_eao_em BLOB,

  /*registrering Attributes*/
  passord VARCHAR(255),
  passord_feil VARCHAR(255),
  tlf VARCHAR(255),
  tlf_feil VARCHAR(255),
  repeter_passord VARCHAR(255),
  repeter_feil VARCHAR(255),
  PRIMARY KEY(passord)

);


ALTER TABLE `registrering` ADD CONSTRAINT `fk_registrering_stand_eao_em` FOREIGN KEY (`stand_eao_em`) REFERENCES `stand_eao`(`em`);
