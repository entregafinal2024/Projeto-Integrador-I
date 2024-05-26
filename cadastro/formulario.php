<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condomínio Figueiras</title>
    <link rel="stylesheet" href="est.css">
    <!--<script src="https://kit.fontawesome.com/a076d05399.js"></script>-->
</head>
    <body>
         
        <div class="container">
        
            <header>Cadastro</header>
            <div class="progress-bar">
                <div class="step">
                    <p>Outros Residentes</p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>Dados Complementares</p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>Dados Veículos</p>
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <!--<div class="step">
                    <p>Outros Residentes</p>
                    <div class="bullet">
                        <span>4</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>-->
            </div>
            <div class="form-outer">
                <form action="conecta_bd.php" method="post"> 
                    <div class="page slide-page">
                        <div class="title">Dados Responsável:</div>
                        <div class="fields">
                            <div class="field">
                                <div class="label">Bloco</div>
                                <input type="bloco" name="bloco" ID="bloco">
                            </div>
                            <div class="field">
                                <div class="label">Apartamento</div>
                                <input type="apartamento" name="apartamento" id="apto">
                            </div>
                            <div class="field">
                                <div class="label">Condômino</div>
                                <input type="condomino" name = "condomino" id="condomino">
                            </div>
                            <div class="field">
                                <div class="label">CPF</div>
                                <input type="cpf" name = "cpf">
                            </div>
                            <div class="field">
                                <div class="label">RG</div>
                                <input type="rg" name = "rg">
                            </div>
                            <div class="field">
                                <div class="label">Data de Nascimento</div>
                                <input type="data_nascimento" name = "data_nascimento">
                            </div>

<!--

                            <div class="field">
                                <div class="label">Locatário</div>
                                <input type="text">
                            </div>
                            
                            <div class="field">
                                <div class="label">Data de Nascimento</div>
                                <input type="text">
                            </div>

-->

                            <div class="field">
                                <div class="label">Tel. Pessoal</div>
                                <input type="text" name = "tel_pessoal" >
                            </div>
                            <div class="field">
                                <div class="label">Tel. Comercial</div>
                                <input type="text" name = "tel_comercial">
                            </div>



<!--
                            <div class="field">
                                <div class="label">Tel. Emergencial</div>
                                <input type="text">
                            </div>

-->

                            <div class="field">
                                <div class="label">E-mail</div>
                                <input type="text" name="email"> 
                            </div>


<!--RETIREI O E-MAIL ADICIONAL
                            <div class="field">
                                <div class="label">E-mail Adicional</div>
                                <input type="text">
                            </div>

-->

                        </div>
                        <div class="field">
                            <button class="firstNext next">Avançar</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title">Outros Residentes no Imóvel:</div>
                        <div class="fields">
                            <div class="field">
                                <div class="label">1 - Nome</div>
                                <input type="text" name="pnome_1">
                            </div>
                            <div class="field">
                                <div class="label">Data Nasc.</div>
                                <input type="text" name="pnascimento_1">
                            </div>
                            <div class="field">
                                <div class="label">Parentesco</div>
                                <input type="text" name="pparentesco_1">
                            </div>
                            <div class="field">
                                <input type="text" name="pnome_2">
                                <div class="label">2 - Nome</div>
                            </div>
                            <div class="field">
                                <div class="label">Data Nasc.</div>
                                <input type="text" name="pnascimento_2">
                            </div>
                            <div class="field">
                                <div class="label">Parentesco</div>
                                <input type="text" name="pparentesco_2">
                            </div>
                            <div class="field">
                                <div class="label">3 - Nome</div>
                                <input type="text" name="pnome_3">
                            </div>
                            <div class="field">
                                <div class="label">Data Nasc.</div>
                                <input type="text" name="pnascimento_3">
                            </div>
                            <div class="field">
                                <div class="label">Parentesco</div>
                                <input type="text" name="pparentesco_3">
                            </div>
                            <div class="field">
                                <div class="label">4 - Nome</div>
                                <input type="text" name="pnome_4">
                            </div>
                            <div class="field">
                                <div class="label">Data Nasc.</div>
                                <input type="text" name="pnascimento_4">
                            </div>
                            <div class="field">
                                <div class="label">Parentesco</div>
                                <input type="text" name="pparentesco_4">
                            </div>


<!--    RETIREI O 5 NOME DE PARENTESCO
                            <div class="field">
                                <div class="label">5 - Nome</div>
                                <input type="text">
                            </div>
                            <div class="field">
                                <div class="label">Data Nasc.</div>
                                <input type="text">
                            </div>
                            <div class="field">
                                <div class="label">Parentesco</div>
                                <input type="text">
                            </div>

-->

<!-- RETIREI O 6 NOME DE PARENTESCO

                            <div class="field">
                                <div class="label">6 - Nome</div>
                                <input type="text">
                            </div>
                            <div class="field">
                                <div class="label">Data Nasc.</div>
                                <input type="text">
                            </div>
                            <div class="field">
                                <div class="label">Parentesco</div>
                                <input type="text">
                            </div>

-->
                        </div>
                        <div class="field btns">
                                <button class="prev-1 prev">Voltar</button>
                                <button class="next-1  next">Avançar</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="title">Dados Complementares:</div>
                        <div class="fields-2">
                           
                        </div>




                        <div class="field-3">
                            <div class="gas">Possui aquecedor a Gás?*</div>
                            <select name="gas">
                                <option value = ""></option>
                                <option value = "S"> Sim </option>
                                <option value = "N"> Não </option>
                            </select>
                        </div>

                        <div class="field-3">
                            <div class="bicicleta">Possui Bicicleta?</div>
                            <select name="bicicleta">
                                <option value = ""></option>
                                <option value = "S"> Sim </option>
                                <option value = "N"> Não </option>
                            </select>
                        </div>
                        <div class="field-3">
                            <div class="cachorro">Possui Cachorro?</div>
                            <select name="cachorro">
                            <option value = ""></option>
                            <option value = "S"> Sim </option>
                            <option value = "N"> Não </option>
                            </select>
                        </div>
                        <div class="field-3">
                            <div class="gato">Possui Gato?</div>
                            <select name="gato">
                            <option value = ""></option>
                            <option value = "S"> Sim </option>
                            <option value = "N"> Não </option>
                            </select>
                        </div>

                        <h5>*Exigência Ministério Público (Ofício 1651/15 - 1º PJ)</h5>
                        <br>


                        <!--
                        <div class="title-2">Imobiliária ou Corretor(a) do imóvel: (Se for locatário*(a))</div><br>
                        <div class="fields">
                            <div class="field">
                                <div class="label">Telefone</div>
                                <input type="text">
                            </div>
                            <div class="field">
                                <div class="label">Contato</div>
                                <input type="text">
                            </div>  
                        </div>



-->

                        <!-- 
                        <div class="title-2">Telefones Celulares para contato com o Síndico:</div><br>
                        <div class="fields">
                            <div class="field">
                                <div class="label">1.Cel</div>
                                <input type="text">
                            </div>

                            <div class="field">
                                <div class="label">Oper.</div>
                                <input type="text">
                            </div>

                            <div class="field">
                                <div class="label">Nome do Responsável</div>
                                <input type="text">
                            </div>

                            <div class="field">
                                <div class="label">2.Cel</div>
                                <input type="text">
                            </div>

                            <div class="field">
                                <div class="label">Oper.</div>
                                <input type="text">
                            </div>

                            <div class="field">
                                <div class="label">Nome do Responsável</div>
                                 <input type="text">
                            </div>  

                        </div>



-->
                        <div class="field btns">
                            <button class="prev-2 prev">Voltar</button>
                            <button class="next-2  next">Avançar</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title">Cadastro de Automóveis / Motos da unidade:</div>
                        <div class="fields">
                            <div class="field">
                                <div class="label">placa/carro</div>
                                <input type="text" name = "placa_carro">
                            </div>
                           
                           <!-- <div class="field">     name = ""
                                <div class="label">Modelo</div>
                                <input type="text">
                            </div>
                            <div class="field">
                                <div class="label">Cor</div>
                                <input type="text">
                            </div>-->
                            <div class="field">
                                <div class="label">Modelo</div>
                                <input type="text" name = "modelo_carro">
                            </div>
                            <div class="field">
                                <div class="label">Cor</div>
                                <input type="text" name = "cor_carro">
                            </div>
                            <div class="field">
                                <div class="label">placa/moto</div>
                                <input type="text" name = "placa_moto">
                            </div>
                            <div class="field">
                                <div class="label">Modelo</div>
                                <input type="text" name = "modelo_moto">
                            </div>
                            <div class="field">
                                <div class="label">Cor</div>
                                <input type="text" name = "cor_moto">
                            </div>
                          <!-- <div class="field">
                                <div class="label">placa</div>
                                <input type="text">
                            </div>
                            <div class="field">
                                <div class="label">Modelo</div>
                                <input type="text">
                            </div>
                            <div class="field">
                                <div class="label">Cor</div>
                                <input type="text">
                            </div> -->
                            <div class="field">
                                <div class="label">Vaga Provisória</div>
                                <input type="text" name = "vaga_provisoria">
                            </div>
                        </div>
                        <div class="field btns">
                            <button class="prev-3 prev">Voltar</button>
                            <button class="submit">Cadastrar</button>
                        </div>
                    </div>
                    <div class="page">
                        <div class="title">Imobiliária ou Corretor(a) do imóvel: (Se for locatário*(a))</div>
                        <div class="field">
                            <div class="label">Telefone</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <div class="label">Contato</div>
                            <input type="text">
                        </div>
                        <div class="title">Telefones Celulares para contato com o Síndico:</div>
                        <div class="field">
                            <div class="label">1.Cel</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <div class="label">Oper.</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <div class="label">Nome do Responsável</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <div class="label">2.Cel</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <div class="label">Oper.</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <div class="label">Nome do Responsável</div>
                            <input type="text">
                        </div> 
                    </div>
                </form>
            </div>
        </div>
        
        <script src="scp.js"></script>
    </body>
    
</html>