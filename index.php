<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="author" content="Carlos Olivira">

    <!-- Title Start -->
    <title>Project INTS</title>

    <!-- Favicon Start -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">

    <!-- Bootstrap Start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Style Start -->
    <link rel="stylesheet" href="assets/style/main.css">
</head>

<body>

    <!-- Header Start -->
    <header class="header__main">
        <h1>Project - INTS</h1>
    </header>


    <!-- Main Start -->
    <main class="container">

        <div class="row grid__One">
            <div class="col-sm-7">
                1. Crie um script em PHP que contenha uma variável global do tipo inteiro, uma variável local do tipo inteiro e
                uma função de soma simples entre elas. Ao final, exiba na tela um parágrafo contendo o resultado da soma.
            </div>
            <div class="col-sm-5 grid__Two">
                <?php

                $globalVariable = 15;

                function somar()
                {
                    global $globalVariable;

                    $localVariable  = 10;
                    return $globalVariable + $localVariable;
                }

                $result = somar();
                ?>
                <div class="result"> <?php echo "Resultado da soma <span>${result}</span>"; ?></div>
            </div>
        </div>

        <div class="row grid__One">
            <div class="col-sm-7">
                2. Elabore um script em PHP que exiba na tela randomicamente um número de 0 a 100.
            </div>
            <div class="col-sm-5 grid__Two">
                <?php
                function randomInitial()
                {
                    return random_int(0, 100);
                }
                $result = randomInitial();
                ?>
                <div class="result"> <?php echo "Número randômico <span>${result}</span>"; ?></div>
            </div>
        </div>

        <div class="row grid__One">
            <div class="col-sm-7">
                3. Desenvolva um script que deseje ao usuário bom dia, caso a hora atual do computador
                dele seja maior que 00:00h e inferior a 12h, e boa noite caso seja maior que 17:00h e inferior a 00:00h
                utilizando JavaScript.
            </div>
            <div class="col-sm-5 grid__Two">
                <div data-Result class="result"></div>
            </div>
        </div>

        <div class="row grid__One">
            <div class="col-sm-7">
                4. Elabore um loop de repetição que incremente uma variável e a exiba ao usuário mostrando todos os números de 1
                a 100 em PHP.
            </div>
            <div class="col-sm-5 grid__Two">
                <?php
                for ($variableIncrement = 1; $variableIncrement <= 100; $variableIncrement++) {
                    echo "$variableIncrement ";
                }
                ?>
            </div>
        </div>

        <div class="row grid__One">
            <div class="col-sm-7">
                5.
                Crie um Array que contenha cinco carros distintos, e os exiba em formato dentro de um SELECT para o usuário
                utilizando HTML e PHP.
            </div>
            <div class="col-sm-5 grid__Two">
                <?php $arrayCar = ["Toyota", "Ford", "Honda", "Hyundai", "Nissan"]; ?>
                <select class="form-select select">
                    <?php
                    foreach ($arrayCar as $value) { ?>
                        <option>
                            <?php echo "$value"; ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="row grid__One">
            <div class="col-sm-12">
                6. Crie uma página utilizando Bootstrap, que contenha um formulário com os seguintes campos.
                a. Nome Completo
                b. Data de Nascimento
                c. CPF
                d. Anexo de documento
                e. Botão de Envio de informações
                f. Utilize JS para validar se todos os campos foram preenchidos e caso contrário exibir alertas ao usuário,
                informando quais campos ainda precisam ser preenchidos.
                g. Adicionar Máscara e validação de CPF
            </div>
            <div class="col-sm-12 grid__Two ">

                <form action="inserirForm.php" method="post" class="containerForm">

                    <div class="mb-6">
                        <label for="nameComplet" class="form-label">Nome Completo</label>
                        <input type="text" data-nome="nomeCompleto" name="nome" class="form-control" id="nameComplet" placeholder="Nome Completo" autocomplete="off">
                    </div>

                    <div class="mb-6">
                        <label for="dateComplet" class="form-label">Data de Nascimento</label>
                        <input type="date" data-date class="form-control" name="data" id="dateComplet" placeholder="Data de Nascimento">
                    </div>

                    <div class="mb-6">
                        <label for="cpfComplet" class="form-label">CPF</label>
                        <input type="text" data-cpf class="form-control" name="cpf" id="cpfComplet" placeholder="Ex.: 000.000.000-00" autocomplete="off" maxlength="14">
                    </div>

                    <div class="mb-6">
                        <label for="formFile" class="form-label">Anexo de documento</label>
                        <input class="form-control" data-Doc type="file" name="doc" id="formFile">
                    </div>

                    <button data-send="Enviar" name="cadastrar" class="btn btn-success">Enviar</button>
                </form>

                <script>
                    const elementSend = document.querySelector('[data-send')
                    const elementName = document.querySelector('[data-nome')
                    const elementDate = document.querySelector('[data-date')
                    const elementCpf = document.querySelector('[data-cpf');
                    const elementDoc = document.querySelector('[data-Doc');

                    function validar() {

                        const nome = elementName.value;
                        if (nome === '') {
                            alert('Preencha o campo com o nome de entrada');
                            return false;
                        }

                        const date = elementDate.value;
                        if (date === '') {
                            alert('Preencha o campo com a data de entrada');
                            return false;
                        }

                        const cpf = elementCpf.value;
                        const cpfValido = /^(([0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2})|([0-9]{11}))$/;
                        if (!cpfValido.test(cpf) === true) {
                            alert("CPF Inválido")
                        }

                        const doc = elementDoc.value;
                        if (doc === '') {
                            alert('Insira um arquivo de entrada');
                            return false;
                        }
                    }

                    function mascara() {
                        if (elementCpf.value.length == 3 || elementCpf.value.length == 7) {
                            elementCpf.value += '.';
                        } else if (elementCpf.value.length == 11) {
                            elementCpf.value += '-';
                        }
                    }

                    elementSend.addEventListener('click', validar);
                    elementCpf.addEventListener('keyup', mascara);
                </script>
            </div>
        </div>
    </main>


    <!-- Footer Start -->
    <footer class="footer__main">
        &copy; 2021 | Carlos Oliveira
    </footer>


    <!-- Github-corners Start -->
    <a href="https://github.com/carlossroliveira" target="_blank" class="github-corner" aria-label="View source on GitHub">
        <svg width="80" height="80" viewBox="0 0 250 250" style="fill:#00CE6A; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true">
            <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
            <path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
            <path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path>
        </svg></a>


    <!-- Bootstrap Start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <!-- JavaScript Start -->
    <script type="module" src="assets/js/main.js"></script>
</body>
</html>