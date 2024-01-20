<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear Nuevo Egreso</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="Detalle">Detalle</label>
                        <textarea wire:model="Detalle" type="text" class="form-control" id="Detalle" placeholder="Detalle" rows="3"></textarea>
                        @error('Detalle')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Valor">Valor</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input wire:model="Valor" type="text" class="form-control" id="Valor"
                                        placeholder="Valor">
                                </div>
                                @error('Valor')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="FechaHora">Fecha y hora de la transacción</label>
                                <input wire:model="Fecha" type="datetime-local" class="form-control" id="FechaHora"
                                    placeholder="Fecha y Hora">
                                @error('Fecha')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal"><i
                        class="fa-solid fa-xmark"></i> Cancelar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-success"><i
                        class="fa-solid fa-plus"></i> Crear</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Egreso</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="Detalle">Detalle</label>
                        <textarea wire:model="Detalle" type="text" class="form-control" id="Detalle" placeholder="Detalle" rows="3"></textarea>
                        @error('Detalle')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Valor">Valor</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input wire:model="Valor" type="text" class="form-control" id="Valor"
                                        placeholder="Valor">
                                </div>
                                @error('Valor')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="FechaHora">Fecha y hora de la transacción</label>
                                <input wire:model="Fecha" type="datetime-local" class="form-control" id="FechaHora"
                                    placeholder="Fecha y Hora">
                                @error('FechaHora')
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary"
                    data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancelar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-warning"><i
                        class="fa-solid fa-pen-to-square"></i> Actualizar</button>
            </div>
        </div>
    </div>
</div>
