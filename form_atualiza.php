<?php
    include_once 'pedaco.php';
    $id = $_GET['id'];
 
?>

    <div class="container">
        <h3>Atualização de Produtos</h3>
        <form action="atualizar.php?id= <?php echo $id ?> " method="POST">

            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos WHERE id=$id";
                $stmt = $pdo->query($sql);
                $produto = $stmt->fetch(PDO::FETCH_ASSOC);

            ?> 

            <div class="mb-3">
                Nome: <input type="text" value="<?php echo $produto['nome']; ?>" class="form-control" name="nome_novo" required>
            </div>
            <div class="mb-3">
                Preço: <input type="text" value="<?php echo $produto['preco']; ?>" class="form-control" name="preco_novo" required>
            </div>
            <div class="mb-3">Quantidade: <input type="text" value="<?php echo $produto['quantidade']; ?>" class="form-control" name="quantidade_novo" required>
            </div>
            
            <button type="submit" class="btn btn-green">ATUALIZAR</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>