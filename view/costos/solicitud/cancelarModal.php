<form action="<?php echo getUrl("costos","solicitud","modalCancelarPost"); ?>" method="post" class="m-auto">
    <div class="modal-body">
    <p>¿Desea rechazar la solicitud de cotización <b>No° <?php echo $Ped_id; ?></b>?</p>
            <input value="<?php echo $Ped_id;?>" type="hidden" name="Ped_id">
    
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <table id="datatable-responsive-costos-cotizacion-pendiente"
                            class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                            width="100%">
                            <thead style="background-color:#17A481; color:#fff;">
                                <tr>
                                    <th cope="col">No. Item</th>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                </tr>
                            <tbody>
                                <?php
                                        echo "<tr>";
                                    $contadorItem = 0;
                                    foreach($detalleCotizacion as $dc){
                                        $contadorItem++;
                                        echo "
                                        <td>".$contadorItem."</td>
                                        <td>".$dc['Pba_descripcion']."</td>
                                        <td>".$dc['Dpe_cantidad']."</td>
                                        </tr>
                                        ";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <textarea class="form-control" name="Ped_motivo" id="" cols="3" rows="3" placeholder="Escriba el motivo de cancelación..." required ></textarea>

    </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-success">Si</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar Rechazo</button>

       
    </div>
</form>