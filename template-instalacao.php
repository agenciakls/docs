<?php 
/*
Template Name: Instalação
*/

get_header(); ?>
<div class="docs-wrapper">
    <div id="docs-sidebar" class="docs-sidebar">
        <div class="top-search-box d-lg-none p-3">
            <form class="search-form">
                <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <nav id="docs-nav" class="docs-nav navbar">
            <ul class="section-items list-unstyled nav flex-column pb-3">
                <li class="nav-item section-title"><a class="nav-link scrollto active" href="#section-1"><span class="theme-icon-holder mr-2"><i class="fas fa-map-signs"></i></span>Instalação</a></li>
                <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">Section Item 1.1</a></li>
                <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">Section Item 1.2</a></li>
                <li class="nav-item"><a class="nav-link scrollto" href="#item-1-3">Section Item 1.3</a></li>
                <li class="nav-item"><a class="nav-link scrollto" href="#item-1-4">Section Item 1.4</a></li>
                <li class="nav-item"><a class="nav-link scrollto" href="#item-1-5">Section Item 1.5</a></li>
                <li class="nav-item"><a class="nav-link scrollto" href="#item-1-6">Section Item 1.6</a></li>
            </ul>

        </nav>
        <!--//docs-nav-->
    </div>
    <!--//docs-sidebar-->
    <div class="docs-content">
        <div class="container">
            <article class="docs-article" id="section-1">
                <header class="docs-header">
                    <h1 class="docs-heading">Instalação dos Programas <span class="docs-time">Last updated: 2019-06-01</span></h1>

                    <h2 class="section-heading">Instalação - VS Code</h2>
                    <section class="docs-intro">
                        <p>Para instalar os programas você precisa começar na ordem de instalação.</p>
                        <p>Primeiro instalamos o VS Code para editar os códigos.</p>
                        <p><a href="https://code.visualstudio.com/" target="_blank"> Clique neste link para instalar o VS Code</a></p>
                        <p><small>Durante a instalação lembre-se de marcar a opção "Abrir com VS Code"</small></p>
                    </section>
                    <!--//docs-intro-->

                </header>
                <section class="docs-section" id="item-1-1">


                    <h2 class="section-heading">Configuração do VS Code</h2>
                    <p>O segundo passo é fazer a configuração do VS Code, nós utilizamos as configurações indicadas pela Rocketseat na hora da instalação</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/c7P03kkrEG8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <h5 class="my-4">Extensões e Ferramentas Utilizadas no Vídeo:</h5>
                    <div class="table-responsive my-4">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">Dracula Oficial</a></th>
                                    <td>Para otimizar as cores do editor </td>
                                </tr>
                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">Fira Code</a></th>
                                    <td>Fontes de Texto para programadores. <a href="https://github.com/tonsky/FiraCode" target="_blank">Clique aqui</a> </td>
                                </tr>
                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">Color highlight</a></th>
                                    <td>Mostrar as cores do código HEX</td>
                                </tr>
                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">DotENV</a></th>
                                    <td> Ele adiciona sintaxe de arquivos de variáveis de ambiente. </td>
                                </tr>

                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">EditorConfig</a></th>
                                    <td> Editores em formatações diferentes. </td>
                                </tr>

                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">ESLint</a></th>
                                    <td> Padrão de Códigos </td>
                                </tr>

                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">Gitlens</a></th>
                                    <td> Adiciona muitas funcionalidades para Git e Github </td>
                                </tr>

                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">GraphQL</a></th>
                                    <td> GraphQL dentro do VS Code </td>
                                </tr>

                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">LiveServer</a></th>
                                    <td> Adiciona funcionalidade de reload no navegador </td>
                                </tr>

                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">Liveshare</a></th>
                                    <td> Compartilhamento de código em tempo real </td>
                                </tr>

                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">Material icon</a></th>
                                    <td> Material Icon é uma extensão de ícones na hora da edição </td>
                                </tr>

                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">Styled Components</a></th>
                                    <td> Parte de CSS com cores.</td>
                                </tr>

                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">Rocketseat ReactJS</a></th>
                                    <td> Extensão da Rocketseat ReactJS.</td>
                                </tr>

                                <tr>
                                    <th class="theme-bg-light"><a class="theme-link" href="#">Rocketseat React Native</a></th>
                                    <td> Extensão da Rocketseat React Native.</td>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--//table-responsive-->

                    <h5 class="my-4">Configuração do VS Code em Settings:</h5>
                    <p>As configurações de instalação estão no <a href="https://gist.github.com/diego3g/b1b189063d21b96d6144ca896755be64" target="_blank">github da Rocketseat</a></p>
                    <p>Você consegue alterar as configurações apertandos as teclas CTRL + SHIFT + P e logo depois apertando enter. Cole o código que está no github dentro do settings.js do VS Code.</p>
                </section>
                <!--//section-->
                <section class="docs-section" id="item-1-1">

                    <h2>Instalação do Git</h2>
                    <p>Git é o programa de versionamento </p>
                    <p><a href="https://git-scm.com/" target="_blank">Clique aqui para baixar o Git</a></p>

                    <p>Abaixo temos algumas dicas pra quem desenvolver os códigos em </p>
                    <script src="https://gist.github.com/fabiofreitasbr/59aabf6a5e4fb85f614f71f4759f0b47.js"></script>

                    <h2 class="section-heading">Instalação do Node (Para quem programa em Javascript)</h2>
                    <p>Para fazer a instalação do Node é só entrar na página do Node.org</p>
                    <p><a href="https://nodejs.org/" target="_blank"> Clique aqui para instalar o Node</a></p>
                    
                    <h2 class="section-heading">Yarn</h2>
                    <p>Para fazer a instalação do Yarn é só digitar o código abaixo de acordo com a <a href="https://yarnpkg.com/getting-started/install" target="_blank">documentação do Yarn</a></p>]
                    <pre class="language-text"><code class="language-text">npm install -g yarn</code></pre>

                    <h2 class="section-heading">PowerShell - Permissões</h2>
                    <p>Pode ser que você veja um erro na hora de executar o Yarn ou npm.</p>
                    <p>Isto é uma política de segurança do Powershell para evitar que scripts maliciosos sejam executados indevidamente no seu sistema. Por isso, todos os scripts que não forem assinados terão sua execução bloqueada. Ou seja, a política de execução está como Restricted (que é o padrão).</p>
                    <p>Você pode controlar estas permissões usando o cmdlet Set-ExecutionPolicy. E pode conferir qual a política de execução atual usando o cmdlet Get-ExecutionPolicy.</p>

                    <pre class="language-text"><code class="language-text">
                    PS C:\Users\LINQ> Get-ExecutionPolicy
                    Restricted

                    PS C:\Users\LINQ> Set-ExecutionPolicy RemoteSigned
                    PS C:\Users\LINQ> Get-ExecutionPolicy
                    RemoteSigned
                    </code></pre>

                </section>
                <!--//section-->
                <section class="docs-section" id="item-1-1">

                    <h2 class="section-heading">Instalação do WampServer (Para quem programa em PHP)</h2>
                    <p>Para simular um servidor PHP use o Wampserver no Windows.</p>
                    <p><a href="https://www.wampserver.com/en/" target="_blank"> Clique aqui para baixar o Wampserver</a></p>



                    <h2 class="section-heading">Notion.so</h2>
                    <p>Notion é um ótimo programa para organizar suas tarefas.</p>
                    <p>Você consegue baixá-lo através desse link: <a href="https://www.notion.so/desktop" target="_blank">https://www.notion.so/desktop</a></p>
                    <p>Também indicamos o <a href="https://trello.com/" target="_blank">trello</a> e o <a href="https://runrun.it/pt-BR" target="_blank">Runrun.it</a></p>

                    <h2 class="section-heading">Instalação dos Programas da Adobe</h2>
                    <p>Através do link do Creative Cloud você consegue instalar todos os programas baixando apenas 1 instalador.</p>
                    <p>Se você já tem assinatura entre nesse link <a href="https://creativecloud.adobe.com/cc?locale=pt" target="_blank">https://creativecloud.adobe.com/cc?locale=pt</a></p>

                    <h2 class="section-heading">Instalação do Google Chrome</h2>
                    <p>Google Chrome é uma ferramenta muito importante no desenvolvimento de aplicações web.</p>
                    <p>Através desse link você consegue baixá-lo <a href="https://www.google.com/intl/pt-BR/chrome/" target="_blank">https://www.google.com/intl/pt-BR/chrome/</a></p>

                    <h2 class="section-heading">Instalação do Filezilla</h2>
                    <p>Há quem prefira fazer deploy via git, mas ainda há pessoas que usam o Filezilla pra administrar diretórios no servidor.</p>
                    <p>Caso queira baixá-lo, você consegue através desse link <a href="https://filezilla-project.org/" target="_blank">https://filezilla-project.org/</a></p>
                    <p><small>Lembre-se de baixar a versão Client.</small></p>


                    <h2 class="section-heading">Format Factory</h2>
                    <p>O maior programa de conversão de formatos/extensão de arquivos para windows.</p>
                    <p>Entre por esse link para instalá-lo: <a href="https://formatfactory.br.uptodown.com/windows" target="_blank">https://formatfactory.br.uptodown.com/windows</a></p>



                    <h2 class="section-heading">Pronto!</h2>
                    <p>Agora você precisa escolher qual linguagem vai desenvolver e ir para a documentação.</p>
                    <p>No caso do desenvolvimento web, comece por HTML > CSS > JAVASCRIPT > REACT / PHP / NODE.</p>
                </section>
                <!--//section-->

            </article>
            <?php get_footer(); ?>