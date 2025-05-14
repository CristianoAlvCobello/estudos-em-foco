<?php   
    include('includes/header.php');
    include('includes/conexao.php');

    $escolaridade = $_GET['escolaridade'] ?? '';
    $materia = $_GET['materia'] ?? '';

    $topicos = $conexao->prepare("
        SELECT t.id, t.nome, t.descricao
        FROM topicos t
        JOIN materias m ON t.materia_id = m.id
        JOIN escolaridades e ON m.escolaridade_id = e.id
        WHERE e.nome = ? AND m.nome = ?
    ");

    $topicos->bind_param('ss', $escolaridade, $materia);
    $topicos->execute();
    $topicos = $topicos->get_result();
?>

<h1 class="text-center"><?php echo $materia . ' Nivel ' . $escolaridade?></h1>
<article class="container p-5">
<ul class="fs-4">
    <?php 
        if($topicos->num_rows > 0){
            while($linha = $topicos->fetch_assoc()){
                echo '<li><a href="explicacao.php?topico=' . $linha['id'] . '">' . $linha['nome']; '</a>';
            }
        }else{
            echo 'Topicos dessa máteria ainda não estão disponíveis';
        }
    ?>
</ul>
</article>

<?php include('includes/footer.php') ?>