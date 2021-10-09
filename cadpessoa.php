<?php
    class Handler
    {
        public static function arrayHandler()
        {
            $a = [];
            $a['nome'] = $_POST['nome'];
            $a['celular'] = $_POST['celular'];
            $a['cpf'] = $_POST['cpf'];

            $gravar = $_POST['nome']."|".$_POST['celular']."|".$_POST['cpf']."|";
            $arquivo = fopen('contatos.txt', 'a+');
            fwrite($arquivo, $gravar);
            fclose($arquivo);
            return $a;
        }
    }
?>