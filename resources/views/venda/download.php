<h2 style="text-align: center;">Relatório de Venda</h2>
<strong>Data da Compra: </strong> <?php echo $venda[0]->data ?> <br>
<strong>Forma de Pagamento: </strong> <?php echo $venda[0]->pagamento ?> <hr>

<?php
foreach ($venda as $key => $value):
    ?>
    <strong>Produto: </strong> <?php echo $value->produto ?> <br>
    <strong>Quantidade: </strong> <?php echo $value->quantidade ?> <br>
    <strong>Valor Unitário: </strong> R$ <?php echo number_format($value->valor, 2, ',', '.') ?> <br>
    <strong>Valor Total: </strong> R$ <?php echo number_format($value->quantidade * $value->valor, 2, ',', '.') ?><br><br>
    <?php
endforeach;
?>