DROP DATABASE IF EXISTS site_artiste;
CREATE DATABASE site_artiste;
USE site_artiste;

CREATE TABLE OEUVRE (
  id int(11) primary key AUTO_INCREMENT,
  titre varchar(20) NOT NULL,
  annee int(4) NOT NULL,
  technique varchar(20) NOT NULL,
  support varchar(20) NOT NULL,
  largeur int(3) NOT NULL,
  hauteur int(3) NOT NULL,
  prix int(6) NOT NULL,
  petiteImage varchar(200) NOT NULL,
  grandeImage varchar(200) NOT NULL
) ENGINE=InnoDB;

Insert into OEUVRE values (NULL, 'oeuvre 1','2016', 'huile', 'toile', 40, 50, 500, 'Public/Images/oeuvre1-mini.jpg', 'Public/Images/oeuvre1.jpg');
Insert into OEUVRE values (NULL, 'oeuvre 2','2016', 'acrylique', 'toile', 30, 60, 500, 'Public/Images/oeuvre2-mini.jpg', 'Public/Images/oeuvre2.jpg');
Insert into OEUVRE values (NULL, 'oeuvre 3','2016', "pastel à l'huile", 'papier', 100, 120, 1000, 'Public/Images/oeuvre3-mini.jpg', 'Public/Images/oeuvre3.jpg');
Insert into OEUVRE values (NULL, 'oeuvre 4','2017', 'huile', 'bois', 40, 50, 800, 'Public/Images/oeuvre4-mini.jpg', 'Public/Images/oeuvre4.jpg');
Insert into OEUVRE values (NULL, 'oeuvre 5','2017', 'huile', 'toile', 20, 15, 200, 'Public/Images/oeuvre5-mini.jpg', 'Public/Images/oeuvre5.jpg');
Insert into OEUVRE values (NULL, 'oeuvre 6 ','2017', "pastel à l'huile", 'papier', 40, 50, 400, 'Public/Images/oeuvre6-mini.jpg', 'Public/Images/oeuvre6.jpg');
Insert into OEUVRE values (NULL, 'oeuvre 7','2018', 'acrylique', 'toile', 40, 50, 600, 'Public/Images/oeuvre7-mini.jpg', 'Public/Images/oeuvre7.jpg');
Insert into OEUVRE values (NULL, 'oeuvre 8','2000', 'acrylique', 'toile', 40, 50, 500, 'Public/Images/oeuvre8-mini.jpg', 'Public/Images/oeuvre8.jpg');
Insert into OEUVRE values (NULL, 'oeuvre 9','2019', 'acrylique', 'toile', 40, 50, 550, 'Public/Images/oeuvre9-mini.jpg', 'Public/Images/oeuvre9.jpg');
Insert into OEUVRE values (NULL, 'oeuvre 10','2008', 'acrylique', 'toile', 40, 50, 6000, 'Public/Images/oeuvre10-mini.jpg', 'Public/Images/oeuvre10.jpg');

Select * from OEUVRE;

CREATE TABLE EXPOSITION (
  id int(5) primary key AUTO_INCREMENT,
  nom varchar(20) NOT NULL,
  lieu varchar(20) NOT NULL,
  adresse varchar(50) NOT NULL,
  dateDebut date NOT NULL,
  dateFin date NOT NULL,
  dateVernissage datetime NOT NULL
) ENGINE=InnoDB;

Insert into EXPOSITION values (NULL, 'expo1','centre 1', 'rue machin', '2016-06-10', '2016-06-24', '2016-06-10-18:00:00');
Insert into EXPOSITION values (NULL, 'expo2','centre 2', 'rue chose', '2017-09-03', '2016-09-24', '2016-09-05-19:00:00');
Insert into EXPOSITION values (NULL, 'expo3','centre 3', 'rue truc', '2018-02-25', '2018-03-10', '2016-02-10-18:00:00');
Insert into EXPOSITION values (NULL, 'expo4','centre 3', 'rue truc bidule machin', '2018-08-25', '2018-10-10', '2012-02-10-18:25:00');

Select * from EXPOSITION;

CREATE TABLE OEUVRE_EXPOSEE (
  id_exposition int(5),
  id_oeuvre int(11),
  prix int(6) NOT NULL,
  primary key(id_oeuvre, id_exposition),
  foreign key (id_oeuvre) references oeuvre(id),
  foreign key (id_exposition) references exposition(id)
) ENGINE=InnoDB;

Insert into OEUVRE_EXPOSEE values (1, 1, 500);
Insert into OEUVRE_EXPOSEE values (1, 2, 500);
Insert into OEUVRE_EXPOSEE values (1, 3, 1000);
Insert into OEUVRE_EXPOSEE values (2, 2, 550);
Insert into OEUVRE_EXPOSEE values (2, 3, 1100);
Insert into OEUVRE_EXPOSEE values (2, 4, 880);
Insert into OEUVRE_EXPOSEE values (2, 5, 220);
Insert into OEUVRE_EXPOSEE values (2, 6, 440);
Insert into OEUVRE_EXPOSEE values (3, 2, 450);
Insert into OEUVRE_EXPOSEE values (3, 4, 800);
Insert into OEUVRE_EXPOSEE values (3, 6, 400);
Insert into OEUVRE_EXPOSEE values (3, 7, 600);
Insert into OEUVRE_EXPOSEE values (2, 8, 500);
Insert into OEUVRE_EXPOSEE values (4, 9, 550);
Insert into OEUVRE_EXPOSEE values (4, 10, 6000);