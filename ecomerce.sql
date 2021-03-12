-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2020 at 12:41 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nomeCategoria` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categoria`),
  UNIQUE KEY `nomeCategoria_UNIQUE` (`nomeCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nomeCategoria`) VALUES
(6, 'Acessorios'),
(5, 'Armazenamento'),
(4, 'Fonte'),
(3, 'Memorias RAM'),
(2, 'placa de video'),
(1, 'placa mae');

-- --------------------------------------------------------

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `USUARIO_id_usuario` int NOT NULL,
  `PRODUTOS_id_produto` int NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`USUARIO_id_usuario`,`PRODUTOS_id_produto`),
  KEY `fk_USUARIO_has_PRODUTOS_PRODUTOS1_idx` (`PRODUTOS_id_produto`),
  KEY `fk_USUARIO_has_PRODUTOS_USUARIO1_idx` (`USUARIO_id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE IF NOT EXISTS `endereco` (
  `id_indereco` int NOT NULL AUTO_INCREMENT,
  `rua` varchar(45) NOT NULL,
  `numero` varchar(8) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `referencia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_indereco`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `endereco`
--

INSERT INTO `endereco` (`id_indereco`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `complemento`, `referencia`) VALUES
(11, 'P1ka', '0', 'Foda', 'P1ka', 'MS', '123123123123', 'legal', 'bonito'),
(12, 'P1ka', '0', 'Foda', 'P1ka', 'MS', '123123123123', 'legal', 'bonito'),
(13, 'P1ka', '0', 'Foda', 'P1ka', 'MS', '123123123123', 'legal', 'bonito'),
(14, '123', '0', '123123', '123123', 'MS', '123123123', 'p1ka', '123123'),
(15, '123', '0', '123123', '123123', 'MS', '123123123', 'p1ka', '123123'),
(16, '123', '0', '123123', '123123', 'MS', '123123123', 'p1ka', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `foto_principal` varchar(400) DEFAULT NULL,
  `quantidade` int NOT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `CATEGORIA_id` int NOT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `fk_PRODUTOS_CATEGORIA1_idx` (`CATEGORIA_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome_produto`, `preco`, `descricao`, `foto_principal`, `quantidade`, `marca`, `CATEGORIA_id`) VALUES
(1, 'RTX 2070', 30, 'O sistema de resfriamento WINDFORCE 3X possui 3x ventiladores de lâmina exclusivos de 80mm, ventilador giratório alternado, 6 tubos de calor de cobre composto, toque direto de tubo de calor e funcionalidade de ventilador ativo 3D, proporcionando uma capacidade efetiva de dissipação de calor para mai', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.wccftech.com%2Fwp-content%2Fuploads%2F2019%2F07%2F20190701161604941a8b2b903922ae9ad8ba81b97984063a_big.png&f=1&nofb=1', 2, 'gigabyte', 2),
(2, 'Strix x370-f gaming', 40, 'As placas-mãe ROG Strix X370-F Gaming continuam com o legado orgulhoso da série Pro Gaming com inovações aclamadas da ROG. As placas-mãe ROG Strix X370-F Gaming combinam estética com desempenho premium e áudio incrível para oferecer experiências e estilo de jogo incomparáveis. Suporta os mais recent', 'https://img.terabyteshop.com.br/produto/g/placa-mae-asus-rog-strix-x370-f-gaming-ddr4-amd-am4_63136.jpg', 3, 'Asus', 1),
(3, 'Hx-1000', 30, ' Potência: 1000 Watts\r\n- Tecnologia Bearing Fan Fluid Dynamic Bearing\r\n- Eficiência de platina 80 PLUS, fornecendo 90% de eficiência energética em condições de carga do mundo real.\r\n- Cabos inteiramente modulares para fácil instalação, menos desordem e ajudam a maximizar o fluxo de ar através do cha', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.i9y2WNU-t-xpXa84pp8M_AHaFj%26pid%3DApi&f=1', 4, 'Corsair', 4),
(4, 'Memoria Ram Royal (2 x 16gb)', 300, 'Efeito de iluminação LED RGB revolucionário projetado para mostrar o seu sistema Efeito de iluminação padrão de onda do arco-íris Fluido Completamente descoberto, barra de luz de comprimento completo ICs altamente rastreados e PCB de 10 camadas personalizado para desempenho de overclocking sem compr', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.techspot.com%2Fimages2%2Fnews%2Fbigimage%2F2018%2F11%2F2018-11-20-image-2.png&f=1&nofb=1', 4, 'G.Skill', 3),
(5, 'Ryzen 9 3950x', 300, 'O processador AMD Ryzen 9 3950X 3,5 GHz e 16 núcleos AM4 é um poderoso processador de 16 núcleos com 32 threads, projetado para placas-mãe soquete AM4. Construído com a arquitetura Zen 2, o processador Ryzen de 7nm de terceira geração oferece desempenho aprimorado em comparação com o antecessor. Ele', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.extremetech.com%2Fwp-content%2Fuploads%2F2019%2F11%2FAMD-Ryzen-9-Feature.jpg&f=1&nofb=1', 1, 'AMD', 6),
(6, 'Blackwidow chroma v2', 100, 'Os gamers vão se surpreender com este teclado gamer para PC, um equipamento feito para garantir a performance mais veloz do universo dos teclados Razer. Nos games, cada milissegundo é importante para vencer o adversário. Este teclado mecânico tem switches que dão mais agilidade para respostas, além ', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fassets.razerzone.com%2Feeimages%2Fproducts%2F25713%2Frazer-ornata-chroma-gallery-09.png&f=1&nofb=1', 400, 'Razer', 6),
(7, 'Razer Mamba Sem Fio ', 300, 'O mouse para jogos sem fio Razer Mamba se conecta ao seu computador através de uma conexão sem fio de 2,4 GHz e tem até 50 horas de duração da bateria, alimentada por uma bateria recarregável de íons de lítio, o mouse possui Roda de rolagem, sete botões programáveis ​​e iluminação Razer Chroma perso', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fd4kkpd69xt9l7.cloudfront.net%2Fsys-master%2Froot%2Fhfe%2Fh80%2F8898921725982%2FRazer-Lancehead-Wireless-Mouse.jpg&f=1&nofb=1', 300, 'Razer', 6),
(8, 'Cloud Alpha', 200, 'Os fones de ouvido Kingston HyperX Cloud Alpha possuem a tecnologia de alto-falante de câmera dupla que oferece um som com um nível mais alto de nitidez e clareza, graças à redução de distorção. A câmara dupla separa os graves dos médios e agudos, permitindo um ajuste ideal que produzirá um som mais', 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Froyalflushmagazine.com%2Fwp-content%2Fuploads%2F2017%2F10%2FHyperX-Cloud-Alpha_Image-1.jpg&f=1&nofb=1', 20, 'HyperX', 6),
(9, 'Mousepad SteelSeries qck+', 10, 'O mousepad SteelSeries qck+ é feito com uma costura especial sem bordas para oferecer uma superfície lisa e uniforme; o tecido de alta densidade fornece uma superfície macia e otimizada. Possui uma superfície de tecido macio para maior conforto no pulso e um fundo de borracha natural texturizado pro', 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fecx.images-amazon.com%2Fimages%2FI%2F81gRAyhnPXL.jpg&f=1&nofb=1', 7, 'SteelSeries', 6),
(10, 'SSD NVME 1tb 970 EVO', 300, 'Considerada uma das marcas mais inovadoras no campo da tecnologia, a Samsung oferece produtos de qualidade, além de se destacar por sua especialização em unidades de armazenamento. O 970 EVO Plus MZ-V7S1T0 é adaptado para que você possa acessar rapidamente seus documentos digitais graças a sua tecno', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.falconcomputers.co.uk%2Fmedia%2Fproduct%2F83908%2F0%2F0%2Fsamsung-1tb-1000gb-970-evo-m2-pcie-high-performance-nvme-ssd-solid-state-drive.jpg%3F&f=1&nofb=1', 1, 'Samsung', 5),
(11, 'Lian li O11 dynamic razer', 5000, 'Model PC-O11 Dynamic Designed by Razer. Case Type Tower Chassis. Structure Dual chamber. Dimensions (W)274mm x(H)449mm x(D)446mm. Color Black. Material (Front/Side)Tempered Glass+Aluminum (Body)0.8mm SECC. I/O Ports USB3.0 x2 , HD Audio USB3.1 Type-C x1 , HD Audio M/B Type E-ATX / ATX / Micro-ATX.', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.SiH2IEfH88WNog68s3VmoAHaHa%26pid%3DApi&f=1', 30, 'Lian li', 6),
(12, 'Monitor alienware 240hz 25\'\'', 3000, 'Monitor de 25\" para gaming com 240 Hz de taxa de atualização e 1 ms de tempo de resposta. Com tecnologia AMD FreeSync™ para gaming com fluidez sem esforço.', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.anandtech.com%2Fdoci%2F15274%2FAlienware-25-Gaming-Monitor_right-side-display-view.jpg&f=1&nofb=1', 22, 'Alienware', 6),
(13, 'i5-10600K Avengers Collector Edition', 10, 'Detalhes\r\n \r\nO processador Intel I5-10600KA Avengers Edition destina-se aos entusiastas e fãs do Universo Marvel e dos Vingadores. Uma combinação da performance característica que a Intel oferece aos usuários e um visual artístico renovado projetado pelo artista Tristan Eaton. Esta edição para verda', 'https://www.casanissei.com/media/catalog/product/cache/16a9529cefd63504739dab4fc3414065/0/0/0083494_0.jpeg', 2, 'Intel', 6);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `datadenascimento` varchar(10) DEFAULT NULL,
  `ENDERECO_id` int DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_USUARIO_ENDERECO_idx` (`ENDERECO_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `cpf`, `email`, `senha`, `telefone`, `datadenascimento`, `ENDERECO_id`) VALUES
(2, 'Lucas Amarilla', '3519109131', 'amarilla482@gmail.com', '123123123', '123456', '2020-08-21', 11),
(5, 'Elo', '123123', '123123@bol.com', '123123', '123456', '2333-12-31', 14);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_USUARIO_has_PRODUTOS_PRODUTOS1` FOREIGN KEY (`PRODUTOS_id_produto`) REFERENCES `produtos` (`id_produto`),
  ADD CONSTRAINT `fk_USUARIO_has_PRODUTOS_USUARIO1` FOREIGN KEY (`USUARIO_id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_PRODUTOS_CATEGORIA1` FOREIGN KEY (`CATEGORIA_id`) REFERENCES `categoria` (`id_categoria`);

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_USUARIO_ENDERECO` FOREIGN KEY (`ENDERECO_id`) REFERENCES `endereco` (`id_indereco`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
