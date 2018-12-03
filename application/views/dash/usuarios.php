<table class="table table-bordered" id = "">
    <thead>

        <tr class = "tr-estilo">
            <th class="text-center">ID Usuário</th>
            <th class = "text-center">CPF</th>
            <th class="text-center">Nome</th>
            <th class="text-center">E-mail</th>
            <th class="text-center">Apelido</th>
            <th class="text-center">Data de Cadastro</th>
        </tr>

    </thead>
    <tbody>

    <?php foreach($usuarios as $usuario){ ?>
        <tr>
            <td class = "text-center">#<?=$usuario['id_usuario']?></td>
            <td class = "text-center"><?=$usuario['cpf']?></td>
            <td class = "text-center"><?=$usuario['nome']?></td>
            <td class = "text-center"><?=$usuario['email']?></td>
            <td class = "text-center"><?=$usuario['apelido']?></td>
            <td class = "text-center"><?=formataData($usuario['data_cadastro'])?></td>
        </tr>
    <?php } ?>

    </tbody>
</table>


</div>

</div>
</div>
</body>

</html>