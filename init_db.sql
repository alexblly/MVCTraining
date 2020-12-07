CREATE DATABASE recette;
USE recette;

CREATE TABLE `lachevre` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `recette` text NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `lachevre` (`nom`, `recette`) VALUES
('Raignac', 'La classique, jus de raisin avec du cognac et une gousse de vanille!');

INSERT INTO `lachevre` (`nom`, `recette`) VALUES
('Pommegnac', 'La classique, jus de pomme avec du cognac et une gousse de vanille ou canelle!');

  ALTER TABLE `lachevre`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `lachevre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

  GRANT ALL ON *.* to root@localhost IDENTIFIED BY 'root';
