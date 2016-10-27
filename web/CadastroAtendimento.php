<?php
require 'Header.php';
require 'Sidebar.php';
require 'config.php';
?>

<div class="well well-small span10 desktop2">

    <div class="form_paciente">
        <form name="cadastro" method="post" action="phpCadastroAtendimento.php">

            <div class="form-group">
                <label for="paciente">Código do paciente:</label>
                <input type="text" name="paciente" id="paciente"   maxlength="14" value="<?php echo $paciente; ?>" />
            </div>

            <div class="form-group">
                <label for="observacao">Observação:</label>
                <input type="text" name="observacao" id="observacao" value="<?php echo $observacao; ?>" />
            </div>  

            <button name="submit" type="submit" value="Enviar" onClick="phpCadastroAtendimento.php" class="btn btn-default">Cadastrar</button>


        </form>
    </div>

</div>


</div>




<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
