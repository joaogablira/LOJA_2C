-- Criar o banco de dados (caso não exista)
CREATE DATABASE IF NOT EXISTS loja;
USE loja;

-- Estrutura da tabela `produtos`
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserir dados
INSERT INTO `produtos` (`id`, `nome`, `preco`, `quantidade`) VALUES
(3, 'Lousa Enganadora', '1599.00', 3),
(5, 'Teclado gamer', '178.00', 3);

-- Definir chave primária
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

-- Ajustar AUTO_INCREMENT
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
