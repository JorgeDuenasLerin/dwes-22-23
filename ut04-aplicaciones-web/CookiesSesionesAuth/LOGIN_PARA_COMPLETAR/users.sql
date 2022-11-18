CREATE TABLE `usuarios` (
  `id` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `email`       varchar(255) NOT NULL ,
  `pass`        varchar(255) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- Todas las contraseñas son 1234

INSERT INTO usuarios (email, pass) VALUES (
  'jorge.duenas.lerin.edu@gmail.com', '$2y$10$2IBLoO9c2NqscjxBqKSZhe0KUTs8FeCQpXi.H4S5N8qK2GbMAQX0a'
);

INSERT INTO usuarios (email, pass) VALUES (
  'asd@qwe.es', '$2y$10$oUK2psl33/ISPfWU/RnnheZcN5So6SPFTpmdD6S6WMudkLvHY7eaa'
);
