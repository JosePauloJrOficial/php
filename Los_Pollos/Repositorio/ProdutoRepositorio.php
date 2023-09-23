<?php
class ProdutoRepositorio
{
    private $conn; // Sua conexão com o banco de dados
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function cadastrar(Produto $produto)
    {
        $sql = "INSERT INTO produtos (tipo, 
        nome, descricao, imagem, preco) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssd", $produto->getTipo(), $produto->getNome(), 
        $produto->getDescricao(), $produto->getImagem(), $produto->getPreco());
        if ($stmt->execute()){
            $stmt->close();
            return true;
        }else{
            $stmt->close();
            return false;
        }
    
    }
    





    public function listarCafes()
    {
        $sql = "SELECT * FROM produtos where tipo = 'Café' ORDER BY preco";
        $result = $this->conn->query($sql);
        $produtos = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $produto = new Produto(
                    $row['id'],
                    $row['tipo'],
                    $row['nome'],
                    $row['descricao'],
                    $row['imagem'],
                    $row['preco']
                );
                $produtos[] = $produto;
            }
        }
        return $produtos;
    }
    public function listarAlmocos()
    {
        $sql = "SELECT * FROM produtos where tipo = 'Almoço' ORDER BY preco";
        $result = $this->conn->query($sql);
        $produtos = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $produto = new Produto(
                    $row['id'],
                    $row['tipo'],
                    $row['nome'],
                    $row['descricao'],
                    $row['imagem'],
                    $row['preco']
                );
                $produtos[] = $produto;
            }
        }
        return $produtos;
    }
}
