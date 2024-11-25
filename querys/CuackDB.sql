create database if not exists cuackDB;
use cuackDB;

CREATE TABLE IF NOT EXISTS puntuaciones (
  id_puntuacion int AUTO_INCREMENT,
  jugador varchar(50) NOT NULL,
  puntuacion int NOT NULL,
  fechaJuego  date not null,
  constraint PK_msg
	primary key (id_puntuacion)
) ENGINE=InnoDB;