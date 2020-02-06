create database LoginHS;

use LoginHS;

CREATE TABLE AdmUser (
  id int unsigned NOT NULL auto_increment unique,
  email varchar(100) NOT NULL unique,
  senha varchar(50) NOT NULL,
  PRIMARY KEY (id)
);