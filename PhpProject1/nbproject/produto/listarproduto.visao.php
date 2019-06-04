<h2>Listar Produtos</h2>
<table class="table">
        <thead>
            <tr>
                <th>NOME</th>
                <th>Descrição</th>
                <th>Valor</th>
        </thead>
        <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?=$produto['nome']?></td>
            <td><?=$produto['descricao']?></td>
            <td><?=$produto['valor']?></td>
            
        </tr>
        <?php endforeach; ?>
</table>
