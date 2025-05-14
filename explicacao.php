<?php
    include('includes/header.php');
    include('includes/conexao.php');

    $topico_id = $_GET['topico'] ?? '';

    if($topico_id){
        $tabela = $conexao->prepare("SELECT nome, descricao FROM topicos WHERE id = ?");
        $tabela->bind_param('i', $topico_id);
        $tabela->execute();
        $tabela = $tabela->get_result();
    }else{
        echo '<p>Nenhum tópico especificado.</p>';
    }
?>

<article class="container justify-content-center p-5">
    <?php
        if($linha = $tabela->fetch_assoc()){
            echo '<h1 class="mb-4">' . $linha['nome'] . '</h1>';
            
            $paragrafos = explode("\n", $linha['descricao']);
            foreach ($paragrafos as $paragrafo) {
                echo '<p class="fs-5">' . $paragrafo . '</p>';
            }
        }else{
                echo '<p>Este tópico não foi encontrado.</p>';
        }
    ?>
</article>

<?php include('includes/footer.php'); ?>
