<div class="cliente_info">
    <form action="" method="POST">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="sobrenome" placeholder="Sobrenome">
        <input type="text" name="fone" placeholder="fone">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="rua" placeholder="rua">
        <input type="text" name="numero" placeholder="numero">
        <input type="text" name="bairro" placeholder="bairro">
        <input type="text" name="cidade" placeholder="cidade">
    </form>
</div>

<div class="cliente_table">
    <table>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Fone</th>
            <th>Valor em aberto</th>
            <th>Ação</th>
        </tr>
        <?php
            require_once("../controller/clienteController.php");
            $cliente = new clienteController();
            $cliente->getAllCliente();
        ?>
    </table>
</div>