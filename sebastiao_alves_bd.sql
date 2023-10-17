-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 02:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebastiao_alves_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `acessos`
--

CREATE TABLE `acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `ultimo_acesso` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acessos`
--

INSERT INTO `acessos` (`id`, `nome`, `apelido`, `username`, `password`, `ultimo_acesso`) VALUES
(1, 'João', 'Ramos', 'joao', '111', '01:01:11 - 15/10/2023');

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `link_imagem` varchar(1500) NOT NULL,
  `texto_autor` mediumtext NOT NULL,
  `ultima_atualizacao` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`id`, `link_imagem`, `texto_autor`, `ultima_atualizacao`) VALUES
(1, 'http://localhost/sebastiao_alves/img/desktop/conteudo.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac felis id orci bibendum efficitur a a libero. Aenean at arcu nec odio gravida volutpat. Vivamus in ante vel justo tempus congue. Nullam in urna nec libero feugiat vehicula. Vestibulum nec turpis a augue viverra viverra. Nunc hendrerit interdum lacus, a ultrices urna. Sed eget lacinia libero. Integer at congue odio. Cras sed leo quis nisi vehicula cursus. Sed non metus vel urna auctor cursus. Etiam ultricies, purus id tincidunt facilisis, nunc erat vestibulum orci, a iaculis erat odio ac augue. Integer nec bibendum neque.</p><p>In ultrices ligula vel libero euismod, eget efficitur erat tincidunt. Sed lacinia erat a justo ultricies, in tristique nulla mattis. Sed venenatis massa sed enim fermentum, sit amet lacinia odio vulputate. Sed at quam quis eros gravida egestas. Vivamus ac justo a turpis laoreet malesuada eget at velit. Fusce posuere sapien id arcu bibendum eleifend. Vestibulum sodales lacinia justo, eu posuere nunc suscipit et. Morbi auctor, arcu a tincidunt volutpat, justo quam finibus est, vel laoreet ex quam a ex.</p>', '12:53:41 - 15/10/2023');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1500) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `subtitulo` varchar(1500) NOT NULL,
  `link` varchar(1500) NOT NULL,
  `imagem_mobile` varchar(1500) NOT NULL,
  `data_atualizacao` varchar(300) NOT NULL,
  `observacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `imagem`, `titulo`, `subtitulo`, `link`, `imagem_mobile`, `data_atualizacao`, `observacao`) VALUES
(7, 'http://localhost/sebastiao_alves/backoffice/uploads/cabecalho1.jpg', 'SENHORA DO AMOR E DA GUERRA', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.</p>', 'http://localhost/sebastiao_alves/livro.php?id=1', 'http://localhost/sebastiao_alves/backoffice/uploads/cabecalho1_mobile.jpg', '10:51:11 - 06/10/2023', 'Novidade'),
(8, 'http://localhost/sebastiao_alves/backoffice/uploads/cabecalho2.jpg', 'O CARACÓL ESTRÁBICO', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.</p>', 'http://localhost/sebastiao_alves/livro.php?id=2', 'http://localhost/sebastiao_alves/backoffice/uploads/cabecalho2_mobile.jpg', '04:21:46 - 03/10/2023', ''),
(9, 'http://localhost/sebastiao_alves/backoffice/uploads/cabecalho3.jpg', 'O COLECIONADOR DE AMNÉSIAS', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.</p>', 'http://localhost/sebastiao_alves/livro.php?id=3', 'http://localhost/sebastiao_alves/backoffice/uploads/cabecalho3_mobile.jpg', '04:21:49 - 03/10/2023', ''),
(10, 'http://localhost/sebastiao_alves/backoffice/uploads/cabecalho4.jpg', 'O VELHO QUE PENSAVA QUE FUGIA', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.</p>', 'http://localhost/sebastiao_alves/livro.php?id=4', 'http://localhost/sebastiao_alves/backoffice/uploads/cabecalho4_mobile.jpg', '04:21:53 - 03/10/2023', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `morada` varchar(500) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `horario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `morada`, `mail`, `horario`) VALUES
(1, '+351 123 456 799', 'Lorem ipsum dolor sit, 121234-543 Lorem', 'lorem@lorem.pt', 'De Segunda a Sexta das 00:00h às 00:00h');

-- --------------------------------------------------------

--
-- Table structure for table `destaques`
--

CREATE TABLE `destaques` (
  `id` int(11) NOT NULL,
  `imagem` varchar(2500) NOT NULL,
  `observacao` varchar(100) NOT NULL,
  `data_atualizacao` varchar(250) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `link` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destaques`
--

INSERT INTO `destaques` (`id`, `imagem`, `observacao`, `data_atualizacao`, `titulo`, `link`) VALUES
(1, 'http://localhost/sebastiao_alves/backoffice/uploads/livro-conteudo.jpg', 'Novidade', '03:27:56 - 09/10/2023', 'SENHORA DO AMOR E DA GUERRA', 'http://localhost/sebastiao_alves/livro.php?id=1'),
(2, 'http://localhost/sebastiao_alves/backoffice/uploads/livro-conteudo3.jpg', 'MAIS VENDIDO', '07:44:39 - 08/10/2023', 'O CARACÓL ESTRÁBICO', 'http://localhost/sebastiao_alves/livro.php?id=2'),
(3, 'http://localhost/sebastiao_alves/backoffice/uploads/livro-conteudo4.jpg', 'EM PROMOÇÃO', '12:52:45 - 15/10/2023', 'O VELHO QUE PENSAVA QUE FUGIA', 'http://localhost/sebastiao_alves/livro.php?id=4'),
(4, 'http://localhost/sebastiao_alves/backoffice/uploads/livro-conteudo4.jpg', '32 4', '07:04:53 - 04/10/2023', 'O VELHO QUE PENSAVA QUE FUGIA', 'http://localhost/sebastiao_alves/livro.php?id=4');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `link_imagem` varchar(2500) NOT NULL,
  `texto_ultimos_livros` varchar(2500) NOT NULL,
  `ultima_atualizacao` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `link_imagem`, `texto_ultimos_livros`, `ultima_atualizacao`) VALUES
(1, 'http://localhost/sebastiao_alves/backoffice/uploads/FOTO-editada.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac felis id orci bibendum efficitur a a libero. Aenean at arcu nec odio gravida volutpat. Vivamus in ante vel justo tempus congue. Nullam in urna nec libero feugiat vehicula. Vestibulum nec turpis a augue viverra viverra. Nunc hendrerit interdum lacus, a ultrices urna. Sed eget lacinia libero. Integer at congue odio. Cras sed leo quis nisi vehicula cursus. Sed non metus vel urna auctor cursus. Etiam ultricies, purus id tincidunt facilisis, nunc erat vestibulum orci, a iaculis erat odio ac augue. Integer nec bibendum neque.</p><p>In ultrices ligula vel libero euismod, eget efficitur erat tincidunt. Sed lacinia erat a justo ultricies, in tristique nulla mattis. Sed venenatis massa sed enim fermentum, sit amet lacinia odio vulputate. Sed at quam quis eros gravida egestas. Vivamus ac justo a turpis laoreet malesuada eget at velit. Fusce posuere sapien id arcu bibendum eleifend. Vestibulum sodales lacinia justo, eu posuere nunc suscipit et. Morbi auctor, arcu a tincidunt volutpat, justo quam finibus est, vel laoreet ex quam a ex.</p>', '12:54:03 - 15/10/2023');

-- --------------------------------------------------------

--
-- Table structure for table `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1500) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` varchar(5000) NOT NULL,
  `data_publicacao` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imprensa`
--

INSERT INTO `imprensa` (`id`, `imagem`, `titulo`, `texto`, `data_publicacao`) VALUES
(1, 'http://localhost/sebastiao_alves/img/desktop/conteudo-imprensa1.jpg', 'LANÇAMENTO | SENHORA DO AMOR E DA GUERRA', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit atque ut nobis numquam consequuntur optio magnam in praesentium perspiciatis odio quod quos sed, rerum quam provident nulla soluta libero nam! Quam facilis sed aut autem laboriosam nulla beatae voluptate vitae nam, totam at, quis voluptatem laborum. Blanditiis eligendi obcaecati odit non harum enim voluptatibus corporis? Numquam qui doloremque accusamus veniam nisi fugit nulla commodi tempora, aliquam, blanditiis quos quae obcaecati quia illum eum. Magnam enim alias fugit praesentium illo adipisci rerum deserunt. Veritatis sint rerum delectus magni dolore libero eligendi aperiam, ipsa ratione accusamus amet, officia deleniti voluptatibus nobis sequi aliquid molestias velit. Blanditiis earum consequatur.</p>', 'PUBLICADO A 07 DE OUTUBRO DE 2023'),
(2, 'http://localhost/sebastiao_alves/img/desktop/conteudo-imprensa2.jpg', 'LANÇAMENTO DO LIVRO \"O VELHO QUE PENSAVA QUE FUGIA\"', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit atque ut nobis numquam consequuntur optio magnam in praesentium perspiciatis odio quod quos sed, rerum quam provident nulla soluta libero nam! Quam facilis sed aut autem laboriosam nulla beatae voluptate vitae nam, totam at, quis voluptatem laborum. Blanditiis eligendi obcaecati odit non harum enim voluptatibus corporis? Numquam qui doloremque accusamus veniam nisi fugit nulla commodi tempora, aliquam, blanditiis quos quae obcaecati quia illum eum. Magnam enim alias fugit praesentium illo adipisci rerum deserunt. Veritatis sint rerum delectus magni dolore libero eligendi aperiam, ipsa ratione accusamus amet, officia deleniti voluptatibus nobis sequi aliquid molestias velit. Blanditiis earum consequatur.', 'PUBLICADO A 07 DE OUTUBRO DE 2023'),
(7, 'http://localhost/sebastiao_alves/backoffice/uploads/cabecalho2.jpg', 'O CARACÓL ESTRÁBICO', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit atque ut nobis numquam consequuntur optio magnam in praesentium perspiciatis odio quod quos sed, rerum quam provident nulla soluta libero nam! Quam facilis sed aut autem laboriosam nulla beatae voluptate vitae nam, totam at, quis voluptatem laborum. Blanditiis eligendi obcaecati odit non harum enim voluptatibus corporis? Numquam qui doloremque accusamus veniam nisi fugit nulla commodi tempora, aliquam, blanditiis quos quae obcaecati quia illum eum. Magnam enim alias fugit praesentium illo adipisci rerum deserunt. Veritatis sint rerum delectus magni dolore libero eligendi aperiam, ipsa ratione accusamus amet, officia deleniti voluptatibus nobis sequi aliquid molestias velit. Blanditiis earum consequatur.</p>', 'PUBLICADO A  07 DE OUTUBRO DE 2023'),
(8, 'http://localhost/sebastiao_alves/backoffice/uploads/cabecalho3.jpg', 'O COLECIONADOR DE AMNÉSIAS', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit atque ut nobis numquam consequuntur optio magnam in praesentium perspiciatis odio quod quos sed, rerum quam provident nulla soluta libero nam! Quam facilis sed aut autem laboriosam nulla beatae voluptate vitae nam, totam at, quis voluptatem laborum. Blanditiis eligendi obcaecati odit non harum enim voluptatibus corporis? Numquam qui doloremque accusamus veniam nisi fugit nulla commodi tempora, aliquam, blanditiis quos quae obcaecati quia illum eum. Magnam enim alias fugit praesentium illo adipisci rerum deserunt. Veritatis sint rerum delectus magni dolore libero eligendi aperiam, ipsa ratione accusamus amet, officia deleniti voluptatibus nobis sequi aliquid molestias velit. Blanditiis earum consequatur.</p>', 'PUBLICADO A  07 DE OUTUBRO DE 2023');

-- --------------------------------------------------------

--
-- Table structure for table `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `imagem` varchar(1500) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` varchar(5000) NOT NULL,
  `data_atualizacao` varchar(250) NOT NULL,
  `observacao` varchar(250) NOT NULL,
  `link` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livros`
--

INSERT INTO `livros` (`id`, `imagem`, `titulo`, `texto`, `data_atualizacao`, `observacao`, `link`) VALUES
(1, 'http://localhost/sebastiao_alves/backoffice/uploads/livro-conteudo.jpg', 'SENHORA DO AMOR E DA GUERRA', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, &gt;magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.</p>', '02:37:52 - 07/10/2023', 'Novidade', ''),
(2, 'http://localhost/sebastiao_alves/backoffice/uploads/livro-conteudo3.jpg', 'O CARACÓL ESTRÁBICO', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, <strong>magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, <strong>magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, <strong>magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.</strong></p>', '07:24:02 - 03/10/2023', 'teste', ''),
(3, 'http://localhost/sebastiao_alves/backoffice/uploads/livro-conteudo2.jpg', 'O COLECIONADOR DE AMNÉSIAS', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p>Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, <strong>magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.</strong></p>', '06:39:56 - 03/10/2023', '33', ''),
(4, 'http://localhost/sebastiao_alves/backoffice/uploads/livro-conteudo4.jpg', 'O VELHO QUE PENSAVA QUE FUGIA', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolor delectus expedita nobis molestiae nemo, sunt est enim natus, magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto velit. sunt est enim natus, <strong>magni soluta atque corrupti, hic repellendus earum tenetur perspiciatis voluptatem iusto &nbsp;velit.</strong></p>', '06:40:04 - 03/10/2023', 'Teste123', '');

-- --------------------------------------------------------

--
-- Table structure for table `redes_sociais`
--

CREATE TABLE `redes_sociais` (
  `id` int(11) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `linkedin` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `redes_sociais`
--

INSERT INTO `redes_sociais` (`id`, `instagram`, `facebook`, `linkedin`) VALUES
(1, 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acessos`
--
ALTER TABLE `acessos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redes_sociais`
--
ALTER TABLE `redes_sociais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acessos`
--
ALTER TABLE `acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `redes_sociais`
--
ALTER TABLE `redes_sociais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
