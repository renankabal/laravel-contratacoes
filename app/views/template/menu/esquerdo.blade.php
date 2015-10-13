<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <center>
                        <?php $imagem = "upload/perfis/".Auth::user()->foto?>
                        @if (!Auth::user()->foto)
                            <img src="{{ asset('template/assets/img/user.jpg') }}" class="img-circle">
                        @else
                            <img src="{{ asset($imagem) }}" class="img-circle">                            
                        @endif
                        <div class="perfil">
                            <?php
                                #Pega Nome e Sobrenome
                                $nome_usuario = explode(' ', trim(Auth::user()->nome));
                                $cont = count($nome_usuario)-1;
                            ?>
                            {{ $nome_usuario[0]." ".$nome_usuario[$cont] }}<br>
                            <?php
                            #Criptografa o ID do usuario
                            $hash = Crypt::encrypt(Auth::user()->id);
                            ?>
                            {{ HTML::link("perfil/editar/$hash", 'Editar perfil') }} <i class="fa fa-cogs"></i></a>
                        </div>
                    </center>
                </div>
            </li>
            <li>
                <a class="active-menu" href="{{action('HomeController@home')}}"><i class="fa fa-home"></i>Inicio</a>
            </li>
            <li>
                <a href="{{action('PessoasController@index')}}"><i class="fa fa-users"></i>Pessoas</a>
            </li>
            <li>
                <a href="{{action('ContratosController@index')}}"><i class="fa fa-commenting-o"></i>Contratos</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-commenting-o"></i>Lotacao</a>
            </li>
            <li>
                <a href="{{ url('sair') }}"><i class="fa fa-sign-out"></i>Sair</a>
            </li>
        </ul>
    </div>
</nav>