   <?php 
   require_once("../../config/connection.php");
   if ($_SESSION["rol_id"]==1){
   ?>                         
                            <li>
                                <a href="../NovoChamado/"><i class="fa fa-edit fa-fw"></i>Abrir chamado</a>
                            </li>
                            <li>
                                <a href="../ConsultarChamado/"><i class="fa fa-table fa-fw"></i>Chamados</a>
                            </li>
                            <li>
                                <!-- /.nav-second-level -->
                        
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
                </nav>
    <?php       
   }else{
    ?>

                            <li>
                                <a href="../ConsultarChamado/"><i class="fa fa-table fa-fw"></i>Chamados</a>
                            </li>
                            <li>
                                <!-- /.nav-second-level -->
                        
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
                </nav>
    <?php
   }
   ?>