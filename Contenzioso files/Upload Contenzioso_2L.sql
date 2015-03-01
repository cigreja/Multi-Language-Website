use Elle_ProjectManager;
DROP table IF EXISTS Contenzioso;
CREATE TABLE Contenzioso (
Id int(4),
Causa VARCHAR(16),
Materia VARCHAR(60),
Argomento VARCHAR(100),
Settore VARCHAR(30),
Gruppo tinyint,
ArgomentoOri VARCHAR(100)
);



LOAD DATA LOCAL INFILE
'C:/Users/Ziqi Li/Dropbox/ELLE Prog 2015/contenzioso/Contenzioso.csv'
into table Contenzioso
FIELDS OPTIONALLY ENCLOSED BY '"' TERMINATED BY ','
LINES TERMINATED BY '\n'
IGNORE 1 LINES
(
	Id, Causa, Materia, Argomento, Settore, Gruppo, ArgomentoOri
)
;