drop database Cinemania;
create database Cinemania;
CREATE TABLE Administrator
( 
	KorisnickoIme     varchar(255) PRIMARY key NOT NULL 
);


CREATE TABLE Film
( 
	Naziv              varchar(255)  NOT NULL ,
	Zanr               varchar(255)  NOT NULL ,
	DatumPrikazivanja  datetime  NOT NULL ,
	DuzinaTrajanja     integer  NOT NULL ,
	Glumci             varchar(255)  NOT NULL ,
	Reziser            varchar(255)  NOT NULL ,
	Opis              text  NOT NULL ,
	ImgSrc             varchar(255)  NULL ,
	IDFilma          int  PRIMARY KEY NOT NULL ,
	Scenarista         varchar(255)  NULL ,
	Sinhronizacija     varchar(255)  NULL ,
	OcenaKorisnika     integer  NULL ,
	TrailerSrc         varchar(255)  NULL 
)
;

CREATE TABLE Karta
( 
	IDKarte          integer  primary key  NOT NULL ,
	IDProjekcije      int  NOT NULL ,
	Cena               integer  NOT NULL ,
	KorisnickoIme     varchar(255)  NULL,
    BrojSedista         varchar(255) NOT NULL
)
;

CREATE TABLE Komentar
( 
	IDKomentar       integer  primary key NOT NULL ,
	Opis              varchar(255)  NOT NULL ,
	KorisnickoIme      varchar(255)  NOT NULL ,
	IDFilma          integer  NOT NULL 
)
;


CREATE TABLE Ocena
( 
	Vrednost        integer  NOT NULL ,
	KorisnickoIme      varchar(255) primary key  NOT NULL ,
	IDFilma            integer primary key NOT NULL 
)
;


CREATE TABLE Projekcija
( 
	IDProjekcije       integer  primary key  NOT NULL ,
	IDSale             int  NOT NULL ,
	Termin             varchar(255)  NOT NULL ,
	IDFilma            integer  NOT NULL,
	CenaKarte			integer not null
)
;


CREATE TABLE RegistrovanKorisnik
( 
	Ime		varchar(255) not null,
	Prezime		varchar(255) not null,
	BodoviPopust      integer  NOT NULL ,
	BodoviVIP          integer  NULL ,
	VIPKorisnik        integer  NULL ,
	Email             varchar(255)  NULL ,
	Pol             char(1)  NULL ,
	DatumRodjenja      varchar(255)  NULL ,
	Sifra            varchar(255)  NULL ,
	KorisnickoIme     varchar(255) primary key NOT NULL 
)
;

CREATE TABLE Sala
( 
	IDSale             int primary key NOT NULL 
)
;



ALTER TABLE Administrator
	ADD CONSTRAINT R_12 FOREIGN KEY (KorisnickoIme) REFERENCES RegistrovanKorisnik(KorisnickoIme)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
;


ALTER TABLE Karta
	ADD CONSTRAINT R_10 FOREIGN KEY (IDProjekcije) REFERENCES Projekcija(IDProjekcije)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION
;

ALTER TABLE Karta
	ADD CONSTRAINT R_15 FOREIGN KEY (KorisnickoIme) REFERENCES RegistrovanKorisnik(KorisnickoIme)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;


ALTER TABLE Komentar
	ADD CONSTRAINT R_8 FOREIGN KEY (IDFilma) REFERENCES Film(IDFilma)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;

ALTER TABLE Komentar
	ADD CONSTRAINT R_13 FOREIGN KEY (KorisnickoIme) REFERENCES RegistrovanKorisnik(KorisnickoIme)
		ON DELETE SET null
		ON UPDATE CASCADE
;


ALTER TABLE Ocena
	ADD CONSTRAINT R_7 FOREIGN KEY (IDFilma) REFERENCES Film(IDFilma)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;

ALTER TABLE Ocena
	ADD CONSTRAINT R_14 FOREIGN KEY (KorisnickoIme) REFERENCES RegistrovanKorisnik(KorisnickoIme)
		ON DELETE SET null
		ON UPDATE CASCADE
;


ALTER TABLE Projekcija
	ADD CONSTRAINT R_6 FOREIGN KEY (IDFilma) REFERENCES Film(IDFilma)
		ON DELETE CASCADE
		ON UPDATE CASCADE
;

ALTER TABLE Projekcija
	ADD CONSTRAINT R_11 FOREIGN KEY (IDSale) REFERENCES Sala(IDSale)
		ON DELETE CASCADE
		ON UPDATE NO ACTION
;