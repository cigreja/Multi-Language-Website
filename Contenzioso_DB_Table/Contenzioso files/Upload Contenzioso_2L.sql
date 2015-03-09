
use Registration;
DROP TABLE Registration.Contenziosos;
CREATE TABLE Registration.Contenziosos (
  Id            INT (4),
  Causa         VARCHAR(16),
  Materia       VARCHAR(60),
  Argomento     VARCHAR(100),
  Settore       VARCHAR(30),
  Gruppo        TINYINT,
  ArgomentoOri  VARCHAR(100),
  Settore_breve VARCHAR(100),
  Industria     VARCHAR(100));


LOAD DATA LOCAL INFILE
  '/Users/danielabecker/Dropbox/ZZ-WEBSITES/Contenzioso_DB/Contenzioso files/Contenzioso.csv'
INTO TABLE Contenziosos
FIELDS OPTIONALLY ENCLOSED BY '"'
TERMINATED BY ','
LINES TERMINATED BY '\r'
IGNORE 1 LINES
(
  Id, Causa, Materia, Argomento, Settore, Gruppo, ArgomentoOri, Settore_breve, Industria

);
