SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `Email` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

INSERT INTO `Email` (`id`, `name`, `email`) VALUES
(1, 'john', 'f32ee@localhost'),
(2, 'peter', 'f32ee@localhost'),
(3, 'Ted', 'f32ee@localhost');
