          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Bem Vindo!</h6>
            </div>
            <a href="#" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>O Meu Perfil</span>
            </a>
            <a href="#" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Configurações</span>
            </a>
            <a href="#" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>As Minhas Consultas</span>
            </a>
            <a href="#" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Ajuda</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
              <i class="ni ni-user-run"></i>
              <span>Encerrar Sessão</span>
            </a>
          </div>