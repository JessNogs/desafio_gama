<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" 
        href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" 
        crossorigin="anonymous">
        <link rel ="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
        <title>Formulario Cadastro</title>
    </head>
    <body>

        <!-- Inicial -->
        
        <div id="inicial">

        <h2>Banco de Talentos</h2>
        <img src="./logo.png" alt="logo">
        <P>JobsNet</P>       
        
        </div>
    
        <div id="faca_parte" >
            <h3>Faça parte do nosso time!</h3>
            <p>Alinhados com as tendências globais de seleção por competências, a JobsNet
                criou o Banco de Talentos, uma plataforma para cadastro de currículos.
                Venha fazer parte do time de Tecnologia que mais inova no país!</p>
        </div>

        <div id="cadastre">
            <h3>Cadastre-se!</h3>

        <div onclick = "displayFormulario()" id="icone">
        <i class="fas fa-chevron-down"></i>
        </div>

       </div>
    
        <!-- Formulário -->
        <form id="formulario" style="display:none;" method="post" action="processa.php"> 
            <!-- colocar depois: style="display:none;" -->

            <h4>Formulário de preenchimento para candidatura</h4>

            <h5>Dados Pessoais</h5>

        <!-- Linha 1 -->
            <div id="nome_cargo">

                <div id="nome">
                <label for = "nome"> Nome Completo </label>
                <label for = "*" style="color:red">*</label>
                    <input name="nome" type="text" size="35px" placeholder="Seu nome completo" required="">
            </div>

            <div id="profissao">
                <label for = "profissao"> Profissão </label>
                <label for = "*" style="color:red">*</label>
                    <input name="prof" type="text" size="35px" placeholder="Sua profissão atual" required="">
            </div>

            <div id="cargo">
                <label for = "cargo"> Cargo Pretendido </label>
                    <input name="cargo" type="text" size="35px" placeholder="Cargo que deseja">
            </div>

            </div>

            <!-- Linha 2 -->

            <div id = data_estado_sexo>

                <div id = "data">
                <label for = "data"> Data de Nascimento </label> 
                <label for ="*" style = "color:red">*</label>

                <select name="dia" required="">
                    <option value="data1">1</option>
                    <option value="data1">2</option>
                    <option value="data1">3</option>
                    <option value="data1">4</option>
                    <option value="data1">5</option>
                    <option value="data1">6</option>
                    <option value="data1">7</option>
                    <option value="data1">8</option>
                    <option value="data1">9</option>
                    <option value="data1">10</option>
                    <option value="data1">11</option>
                    <option value="data1">12</option>
                    <option value="data1">13</option>
                    <option value="data1">14</option>
                    <option value="data1">15</option>
                    <option value="data1">16</option>
                    <option value="data1">17</option>
                    <option value="data1">18</option>
                    <option value="data1">19</option>
                    <option value="data1">20</option>
                    <option value="data1">21</option>
                    <option value="data1">22</option>
                    <option value="data1">23</option>
                    <option value="data1">24</option>
                    <option value="data1">25</option>
                    <option value="data1">26</option>
                    <option value="data1">27</option>
                    <option value="data1">28</option>
                    <option value="data1">29</option>
                    <option value="data1">30</option>
                    <option value="data1">31</option>
                </select>
                <select name="mes" required="">
                    <option value="mes1">Janeiro</option>
                    <option value="mes1">Fevereiro</option>
                    <option value="mes1">Março</option>
                    <option value="mes1">Abril</option>
                    <option value="mes1">Maio</option>
                    <option value="mes1">Junho</option>
                    <option value="mes1">Julho</option>
                    <option value="mes1">Agosto</option>
                    <option value="mes1">Setembro</option>
                    <option value="mes1">Outubro</option>
                    <option value="mes1">Novembro</option>
                    <option value="mes1">Dezembro</option>

                </select>
                <select name="ano" required="">
                    <option value="ano1">1970</option>
                    <option value="ano1">1971</option>
                    <option value="ano1">1972</option>
                    <option value="ano1">1973</option>
                    <option value="ano1">1974</option>
                    <option value="ano1">1975</option>
                    <option value="ano1">1976</option>
                    <option value="ano1">1977</option>
                    <option value="ano1">1978</option>
                    <option value="ano1">1979</option>
                    <option value="ano1">1980</option>
                    <option value="ano1">1981</option>
                    <option value="ano1">1982</option>
                    <option value="ano1">1983</option>
                    <option value="ano1">1984</option>
                    <option value="ano1">1985</option>
                    <option value="ano1">1986</option>
                    <option value="ano1">1987</option>
                    <option value="ano1">1988</option>
                    <option value="ano1">1989</option>
                    <option value="ano1">1990</option>
                    <option value="ano1">1991</option>
                    <option value="ano1">1992</option>
                    <option value="ano1">1993</option>
                    <option value="ano1">1994</option>
                    <option value="ano1">1995</option>
                    <option value="ano1">1996</option>
                    <option value="ano1">1997</option>
                    <option value="ano1">1998</option>
                    <option value="ano1">1999</option>
                    <option value="ano1">2000</option>
                    <option value="ano1">2001</option>
                    <option value="ano1">2002</option>
                    <option value="ano1">2003</option>
                </select>
        </div>

            <div id="estado_civil">
                <label for="estado_civil">Estado Civil</label>
                    <input name="est_civil" type="text" size="20px" placeholder="Informe seu Estado Civil">
            </div>

            <div id="sexo">
                <label for="sexo">Sexo</label>
                    <select name="sexo">
                        <option value="sexo">-</option>
                        <option value="sexo">Mulher Cisgênero</option>
                        <option value="sexo">Homem Cisgênero</option>
                        <option value="sexo">Mulher Transgênero</option>
                        <option value="sexo">Homem Transgênero</option>
                        <option value="sexo">Prefiro não declarar</option>
                    </select>
            </div>

             </div>

             <!-- Linha 3 -->
             <div id="cep_estado">

             <div>
                <label>CEP</label>
                <label for="*" style="color:red">*</label>
                    <input name="cep" id="cep" type="text" size="40px" placeholder="Informe um CEP válido" required="" maxlenght="8">
            </div>

            <div id="estado">
                <label for="estado">Estado</label>
                <label for="*" style="color:red">*</label>
                    <input name="uf" id="uf" type="text" size="30px" placeholder="Informe o Estado" required="">
            </div>
        </div>

             <!-- Linha 4 -->
             <div id="logradouro">

             <div>
                 <label>Endereço</label>
                 <label for="*" style="color:red">*</label>
                     <input name="rua" id="rua" type="text" size="60px" placeholder="ex. Rua Bonita" required="">
             </div>

             <div>
                <label for="numero">Número</label>
                <label for="*" style="color:red">*</label>
                    <input name="num" id="numero" type="text" size="30px" placeholder="Nº casa ou apto" required="">
            </div>
        </div>

             <!-- Linha 4 -->
             <div id="bairro_cidade">
                 <div>
                <label for ="bairro_cidade">Bairro</label>
                <label for="*" style="color:red">*</label>
                    <input name="bairro" id="bairro" type="text" size="55px" placeholder="Informe seu bairro" required="">
                 </div>

                 <div >
                     <label>Cidade</label>
                     <label for="*" style="color:red">*</label>
                         <input name="cidade" id="cidade" type="text" size="55px" placeholder="Informe sua cidade" required="">
                 </div>
             </div>

             <!-- Linha 5 -->
             <div id="cep_tel">

                <div id="tel_1">
                    <label for="tel_1">Telefone Fixo 1</label>
                        <input name="tel1" type="text" size="30px" placeholder="Telefone fixo principal">
                </div>

                <div id="tel_2">
                    <label for="tel_2">Telefone Fixo 2</label>
                        <input name="tel2" type="text" size="30px" placeholder="Telefone fixo opcional">
             </div>
             </div>

             <!-- Linha 6 -->
             <div id ="cel_cont_email">

                <div id="cel">
                    <label for = "cel">Celular</label>
                    <label for="*" style="color:red">*</label>
                        <input name="celular" type = "text" size="30px" placeholder="ex. (99)99999-9999" required="">
                </div>

                <div id="contato">
                    <label for = "contato">Contato</label>
                        <input name="contato" type = "text" size="45px" placeholder="Nome">
                </div>

                <div id="email">
                    <label for = "email">E-mail</label>
                    <label for="*" style="color:red">*</label>
                        <input name="email" type = "text" size="30px" placeholder="seunome@exemplo.com" required="">
                </div>
             </div>

             <div id="titulo_doc">
             <p>Documentos</p>
            </div>
            <!-- Linha Documentos -->
            <div id ="documentos">
                <div id="id">
                    <label for = "id">Identidade</label>
                    <label for="*" style="color:red">*</label>
                        <input name="identidade" type = "text" size="35px" required="">
                </div>

                <div id="cpf">
                    <label for = "cpf">CPF</label>
                    <label for="*" style="color:red">*</label>
                        <input name="cpf" type = "text" size="35px" required="">
                </div>

                <div id="veiculo">
                    <label for = "id">Possui veículo próprio?</label>
                        <select name="veic">
                            <option value="nenhum">-</option>
                            <option value="sim">Sim</option>
                            <option value="nao">Não</option>
                        </select>
                </div>

                <div id="habilitacao">
                    <label for = "habilitacao">Habilitação</label>
                        <select name="habilitacao">
                            <option value="nenhum">-</option>
                            <option value="sim">CNH A</option>
                            <option value="nao">CNH B</option>
                            <option value="nao">CNH C</option>
                            <option value="nao">CNH D</option>
                            <option value="nao">CNH E</option>
                        </select>
                    
                </div>

            </div>

            <div class='butao'>
                <button id='enviar' type="submit" > Enviar! </button>
            </div>

    </form>


    <script>
        function displayFormulario() {
            var display= document.getElementById('formulario');
            display.classList.toggle('active');
        }
    </script>
    <script src= './cep.js'></script>


    </body>