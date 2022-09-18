<!-- update employee -->
<div id="update_additional_address" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar dirección secundaria</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('company.udpateEmployee', $company->id) }}" method="POST">
                    @csrf
                    <input type="hidden" class="form-control update-employee-id" name="additional_address_id">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Dirección <span class="text-danger">*</span></label>
                                <input type="text" class="form-control update-addtional-address" name="address"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete additional address Modal -->
<div class="modal custom-modal fade" id="delete_additional_address" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Eliminar dirección secundaria</h3>
                    <p>Estas seguro de eliminar está dirección secundaria?</p>
                </div>
                <div class="modal-btn delete-action">
                    <form action="{{ route('company.deleteEmployee') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <input type="hidden" name="user_id" class="delete_additional_address_id">
                                <button type="submit" class="btn btn-primary continue-btn">Eliminar</button>
                            </div>
                            <div class="col-6">
                                <button type="button" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete additional address Modal -->