<nav id="sidebar" class="sidebar-wrapper">
    <input type="checkbox" id="open-sidebar" hidden>
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <span>BIBLI<i class="fas fa-power-off"></i>N</span>
        </div>
        <div class="sidebar-header">
            <div class="user-icon">
                <i class="fas fa-user-circle"></i>
            </div>
            <div class="user-info">
                @if(isset($nome) && isset($sobrenome))
                    <span class="user-name">{{$nome}} <strong>{{$sobrenome}}</strong></span>
                @endif
                @isset($cargo)
                    <span class="user-role">{{$cargo}}</span>
                @endisset
            </div>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>Geral</span>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fas fa-book"></i>
                        <span>Livros</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">Empréstimo</a>
                            </li>
                            <li>
                                <a href="#">Devolução</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @if(isset($acesso) && ($acesso == 1 || $acesso == 2))
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fas fa-print"></i>
                            <span>Relatórios</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Empréstimo</a>
                                </li>
                                <li>
                                    <a href="#">Devolução</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
                @if(isset($acesso) && $acesso == 1)
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fas fa-users"></i>
                            <span>Usuários</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="#">Conceder Permissão</a>
                                </li>
                                <li>
                                    <a href="#">Editar</a>
                                </li>
                                <li>
                                    <a href="#">Remover</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>