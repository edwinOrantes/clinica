
        <!-- Start::app-content -->
            <div class="main-content app-content">
                    <div class="container-fluid">

                        <!-- Page Header -->
                        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                            <div class="ms-md-1 ms-0">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Paciente</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Agregar</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- Page Header Close -->

                        <!-- Start:: row-1 -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title">
                                            Datos del paciente
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form class="row g-3 needs-validation"  method="post" action="<?php echo base_url()?>Paciente/guardar_paciente" novalidate>

                                            <div class="row mt-3">
                                                <div class="form-group col-md-6">
                                                    <label for=""><strong>Nombre Completo</strong></label>
                                                    <input type="text" class="form-control" id="nombrePaciente" name="nombrePaciente" placeholder="Nombre del paciente" required>
                                                    <div class="invalid-feedback">
                                                        Debes ingresar el nombre del paciente.
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for=""><strong>Edad</strong></label>
                                                    <input type="number" class="form-control numeros" min="0" id="edadPaciente" name="edadPaciente" placeholder="Edad del paciente" required>
                                                    <div class="invalid-feedback">
                                                        Debes ingresar la edad del paciente.
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mt-3">
                            
                                                <div class="form-group col-md-6">
                                                    <label for=""><strong>Teléfono</strong></label>
                                                    <input type="text" class="form-control" data-mask="9999-9999" id="telefonoPaciente" name="telefonoPaciente" placeholder="Teléfono del paciente" required>
                                                    <div class="invalid-feedback">
                                                        Debes ingresar el teléfono del paciente.
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for=""><strong>DUI</strong></label>
                                                    <input type="text" class="form-control" id="duiPaciente" name="duiPaciente" data-mask="99999999-9" placeholder="DUI del paciente" required>
                                                    <div class="invalid-feedback">
                                                        Debes ingresar el DUI del paciente.
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="row mt-3">

                                                <div class="form-group col-md-6">
                                                    <label for=""><strong>Fecha de nacimiento</strong></label>
                                                    <input type="date" class="form-control" id="nacimientoPaciente" name="nacimientoPaciente" required>
                                                    <div class="invalid-feedback">
                                                        Debes ingresar la fecha de nacimiento del paciente.
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for=""><strong>Dirección</strong></label>
                                                    <input class="form-control" id="direccionPaciente" name="direccionPaciente" required>
                                                    <div class="invalid-feedback">
                                                        Debes ingresar dirección del paciente.
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="col-12">
                                                <div class="form-group text-center mt-3">
                                                    <button type="submit" class="btn btn-secondary has-icon"><i class="fa fa-save"></i> Guardar paciente </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End:: row-1 -->
                    </div>
                </div>
        <!-- End::app-content -->
        
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="input-group">
                    <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                    <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                    <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                    <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="mt-4">
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                    <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                  </div>
                  <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="notifications.html"><span>Notifications</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="alerts.html"><span>Alerts</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                      <a href="mail.html"><span>Mail</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="btn-group ms-auto">
                    <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted"> Copyright © <span id="year"></span> <a
                        href="javascript:void(0);" class="text-dark fw-semibold">O'S</a>.
                    Diseñado con <span class="bi bi-heart-fill text-success"></span> por <a href="javascript:void(0);">
                        <span class="fw-semibold text-primary text-decoration-underline">Edwin Orantes</span>
                    </a> 
                    Todos los derechos reservados
                </span>
            </div>
        </footer>
        <!-- Footer End -->

    </div>