create database cafebistro_phpoo_turmaa;
use cafebistro_lp2d3;
create table usuario (
nome varchar(255),
email varchar(255) primary key,
senha varchar(255));
select * from usuario;

-- Banco de dados: `los_pollos_lp2d3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(90) NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `preco` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `tipo`, `nome`, `descricao`, `imagem`, `preco`) VALUES
(1, 'Café', 'Café Cremoso', 'Café cremoso irresistivelmente suave e que envolve seu paladar', 'img/cafe-cremoso.jpg', '5.00'),
(2, 'Café', 'Café com Leite', 'A harmonia perfeita do café e do leite, uma experiência reconfortante', 'img/cafe-com-leite.jpg', '2.00'),
(3, 'Café', 'Cappuccino', 'Café suave, leite cremoso e uma pitada de sabor adocicado', 'img/cappuccino.jpg', '7.00'),
(5, 'Almoço', 'Bife', 'Bife, arroz com feijão e uma deliciosa batata frita', 'img/bife.jpg', '27.90'),
(7, 'Almoço', 'Frango', 'Saboroso frango à milanesa com batatas fritas, salada de repolho e molho picante', 'img/prato-frango.jpg', '23.00'),
(9, 'Café', 'Batatas fritas', 'Batatas fritas com iscas de frango.', 'img/fritas.jfif', '21.59'),
(10, 'Almoço', 'Cebolas fritas', 'Cebolas fritas com muito molho e batatas ships', 'img/cebolas_rings.jfif', '23.00'),
(11, 'Almoço', 'Taco y Burrito', 'Taco e burrito para casal loucamente apaixonados', 'img/taco.jfif', '14.10'),
(12, 'Almoço', 'X frango', 'Sanduiche de frango com um delicioso queijo prato e cebolas fritas.', 'img/xfrango.jfif', '12.60'),
(14, 'Café', 'Café Mexicano', 'Um delicoso cafe com bolachas secas.', 'img/cafe mexicano.jpg', '6.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES
('Jose Paulo', 'jpjasilva@gmail.com', '$2y$10$0PCIBI7X2PM5NNjZ75AU6ezR59cdQs7sOMuEsYMTVjL2PGTo.ZCX6');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;