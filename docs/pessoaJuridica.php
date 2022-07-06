<!DOCTYPE html>
<html>
    <head>
        <script defer src="js/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
        <script src="js/jquery-validate/lib/jquery-3.1.1.js"></script>
        <script src="js/jquery-validate/dist/jquery.validate.js"></script>
        <script src="js/jquery-validate/src/additional/cpfBR.js"></script>
        <script src="js/jquery-validate/src/additional/postalcodeBR.js"></script>
        <script src="js/jquery-validate/dist/localization/messages_pt_BR.js"></script>
        <script src="js/validateJuridico.js"></script>
        <script src="js/jquery-validate/src/additional/cnpjBR.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estilo.css"> 
    </head>
    <body>
        <form method="get" action="" id="formPessoaJuridica" class="formPessoaJuridica">
            <fieldset>
                <legend>Dados da empresa</legend>

                <div id="divGlobal">
                <div>
                    <label>Nome: <input type="text" placeholder="Digite seu nome" id="nome" name="nome"></label>
                </div>

                <div>
                    <label>CNPJ: <input type="text" placeholder="Digite o CNPJ" id="cnpj" name="cnpj" onkeypress="$(this).mask('00.000.000/0001-00')"></label>
                </div>

                <div>
                    <label>Razão social: <input type="text" placeholder="Digite sua razão social" id="razaoSocial" name="razaoSocial"></label>
                </div>

                <div>
                    <label>Inscrição Estadual: <input type="text" placeholder="Inscrição Estadual" id="inscEstadual" name="inscEstadual"></label>
                </div>

                </div>
            </fieldset>

            <fieldset>
                <legend>Endereço</legend>

                <div id="divGlobal">
                <div>
                    <label>CEP: <input type="text" placeholder="Digite o cep" id="cep" name="cep" onkeypress="$(this).mask('00000-000')"></label>                    
                </div>

                <div>
                    <label>Rua / Avenida: <input type="text" id="rua" name="rua" placeholder="Digite a rua"></label>
                </div>

                <div>
                    <label>Bairro: <input type="text" id="bairro" name="bairro" placeholder="Digite o bairro"></label>
                </div>

                <div>
                    <label>Complemento: <input type="text" id="comp" name="comp" placeholder="Digite o complemento"></label>
                </div>

                <div>
                    <label>Municipio: <input type="text" id="municipio" name="municipio" placeholder="Digite o municipio"></label>
                    <label>UF: 
                        <select id="uf">
                            <option>Acre</option>
                            <option>Alagoas</option>
                            <option>Amapá</option>
                            <option>Amazonas</option>
                            <option>Bahia</option>
                            <option selected>Ceará</option>
                            <option>Espirito Santo</option>
                            <option>Goiás</option>
                            <option>Maranhão</option>
                            <option>Mato Grosso</option>
                            <option>Mato Grosso do Sul</option>
                            <option>Minas Gerais</option>
                            <option>Pará</option>
                            <option>Paraíba</option>
                            <option>Paraná</option>
                            <option>Pernambuco</option>
                            <option>Piauí</option>
                            <option>Rio de Janeiro</option>
                            <option>Rio grande do Norte</option>
                            <option>Rio Grande do Sul</option>
                            <option>Rondônia</option>
                            <option>Roraima</option>
                            <option>Santa Catarina</option>
                            <option>São Paulo</option>
                            <option>Sergipe</option>
                            <option>Tocantins</option>
                        </select>
                    </label>
                </div>

                </div>
            </fieldset>

            <fieldset>
                <legend>Autenticação</legend>

                <div id="divGlobal">
                <div>
                    <label>Nome 1: <input type="text" id="nome1" name="nome1"></label>
                    <label>Telefone <input type="text" id="tel1" name="tel1"></label>
                </div>

                <div>
                    <label>Nome 2: <input type="text" id="nome2" name="nome2"></label>
                    <label>Telefone <input type="text" id="tel2" name="tel2"></label>
                </div>

                <div>
                    <label>Email 1: <input type="text" id="email1" name="email1"></label>
                    <label>Ramal: <input type="text" id="ramal1" name="ramal1"></label>
                </div>

                <div>
                    <label>Email 2: <input type="text" id="email2" name="email2"></label>
                    <label>Ramal: <input type="text" id="ramal2" name="ramal2"></label>
                </div>
                
                </div>
            </fieldset>
            
            <div>
                <input type="submit" id="enviar" value="Cadastrar pessoa juridica"> 
                <input type="reset" id="resetar" value="Limpar dados do formulario">
            </div>

        </form>
    </body>
</html>