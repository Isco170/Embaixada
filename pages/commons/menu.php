  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="<?=base_url('telaPrincipal')?>" class="brand-link">

      <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"

           style="opacity: .8">

        <span class="brand-text font-weight-light">Embaixada</span>

    </a>



    <!-- Sidebar -->

    <div class="sidebar">

      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item has-treeview"> 

            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-graduation-cap"></i> 

              <p>

                Acadêmico

                <i class="right fas fa-angle-left"></i>

              </p>

            </a> 

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="<?=base_url('alunos')?>" class="nav-link">

                  <i class="fa fa-list"></i>

                  <p>Ver alunos</p> 

                </a>

                <a href="<?=base_url('Aluno_inscricao')?>" class="nav-link <?php echo ($this->session->userdata('nivel') == 3) ? 'd-none' : 'null' ?>">

                  <i class="far fa-circle nav-icon"></i>

                    <p>Inscrição</p>

                </a>

              </li>

            </ul>

          </li>

          <li class="nav-item has-treeview d-none <?php echo ($this->session->userdata('nivel') == 2 ||  $this->session->userdata('nivel') == 3) ? 'd-none' : 'null' ?>">

            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-industry"></i>

              <p>

                Financeiro

                <i class="fas fa-angle-left right"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">

            <li class="nav-item">

                      <a href="<?=base_url('faturaMat')?>" class="nav-link">

                        <i class="far fa-circle nav-icon"></i>

                          <p>Matriculas</p>

                      </a>

                    </li>

                    <li class="nav-item">

                      <a href="<?=base_url('funcionarios')?>" class="nav-link">

                        <i class="far fa-circle nav-icon"></i>

                          <p>Mensalidades</p>

                      </a>

                    </li> 

              </li>

              <!-- <li class="nav-item">

                <a href="<?=base_url('moeda')?>" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Moeda</p>

                </a>

              </li> -->

            </ul>

          </li>

          <li class="nav-item has-treeview">

            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-folder-open"></i>

              <p>

                Documentos

                <i class="fas fa-angle-left right"></i>

              </p>

            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('DocumentosController')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Doc. Internos</p> 
                </a>
              </li>

              <li class="nav-item">
                <a href="<?=base_url('verArquivos')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                    <p>Arquivos</p> 
                </a>
              </li>

              <li class="nav-item">
                <li class="nav-item">
                  <a href="<?=base_url('ComunicadosController')?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                      <p>Comunicados</p>
                  </a>
                </li>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-university"></i> 
              <p>Pedagógico
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> 

            <ul class="nav nav-treeview"> 

              <li class="nav-item ">

                <a href="<?=base_url('FuncionarioController')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i> 
                  <p>Funcionários</p>
                </a>

              </li>

              <li class="nav-item">

                <a href="<?=base_url('classes')?>" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Classes</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="<?=base_url('disciplinas')?>" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Disciplinas</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="<?=base_url('atividades')?>" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Atividades extras</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="<?=base_url('salas')?>" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Salas</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="<?=base_url('turmas')?>" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Turmas</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="<?=base_url('turnos')?>" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Turnos</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="<?=base_url('horarios')?>" class="nav-link"> 

                  <i class="far fa-circle nav-icon"></i>

                  <p>Horários</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="<?=base_url('trimestres')?>" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Trimestres</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="<?=base_url('calendario')?>" class="nav-link">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Calendário</p>

                </a>

              </li>

              <li class="nav-item">

                <a href="<?=base_url('moeda')?>" class="nav-link <?php echo ($this->session->userdata('nivel') <> 0) ? 'd-none' : 'null' ?>">

                  <i class="far fa-circle nav-icon"></i>

                  <p>Moeda</p>

                </a>

              </li>

            </ul>

          </li>

          <li class="nav-item has-treeview"> 

            <a href="#" class="nav-link">

              <i class="nav-icon fas fa-cogs"></i> 

              <p>

                Configurações

                <i class="right fas fa-angle-left"></i>

              </p>

            </a> 

            <ul class="nav nav-treeview">

              <li class="nav-item">

                <a href="<?=base_url('configEmail')?>" class="nav-link">

                  <i class="fas fa-envelope"></i>

                  <p>Configurar E-mail</p> 

                </a>

              </li>

            </ul>

          </li>

        </ul>

      </nav>

      <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

  </aside>