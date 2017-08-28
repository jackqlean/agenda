-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.1.21-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela agenda.local
CREATE TABLE IF NOT EXISTS `local` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `local` char(1) DEFAULT '0',
  `descricao` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela agenda.local: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
INSERT INTO `local` (`id`, `local`, `descricao`) VALUES
	(1, 'O', 'OMSS');
INSERT INTO `local` (`id`, `local`, `descricao`) VALUES
	(2, 'C', 'CAMARA MUNICIPAL DE REGISTRO');
INSERT INTO `local` (`id`, `local`, `descricao`) VALUES
	(3, 'P', 'PREFEITURA MUNICIPAL DE REGISTRO');
/*!40000 ALTER TABLE `local` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
