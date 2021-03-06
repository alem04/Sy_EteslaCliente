<?php $__env->startSection('cotizadores'); ?>
    <!-- Card - Panel/Inversor -->
    <div class="card">
        <div class="card-header"><img src="https://img.icons8.com/material-outlined/24/000000/lightning-bolt.png"><label class="label-cotizador"><strong>&nbsp;Cotizador de media tensión (Configuración)</strong></label></div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="form-group row justify-content-md-center">
                        <label class="col-sm-10 col-form-label">Seleccionar panel</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-2">
                                <select class="form-control" id="">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group row justify-content-md-center">
                        <label class="col-sm-10 col-form-label">Seleccionar marca del inversor</label>      
                        <div class="col-sm-10">
                            <div class="input-group mb-2">
                                <select class="form-control" id="">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <!-- Card - GDMTO/GDMTH -->
    <div class="card">
        <div class="card-header">
            <label class="label-cotizador"><img src="https://img.icons8.com/ios-filled/24/000000/light-automation.png"><strong>&nbsp;Datos de Consumo</strong></label>
            <div class="btn-group btn-group-toggle pull-right">
                <button type="button" class="btn btn-primary" onclick="GDMTO()">GDMTO</button>
                <button type="button" class="btn btn-primary" onclick="GDMTH()">GDMTH</button>
            </div>
        </div>
        <div class="card-body" >
            <div class="container-fluid" id="divGDMTO">
                <div class="row">
                    <div class="col-3 mx-auto">
                        <p align="center"><strong>Irradiación</strong></p>
                        <div class="form-group row">
                            <input type="number" class="form-control" id="inpIrradiacion" placeholder="Irradiacion" pattern="[^[0-9]+$]">
                        </div>
                    </div>
                    <div class="col-3 mx-auto">
                        <p align="center"><strong>Potencia</strong></p>
                        <div class="form-group-row">
                            <input type="number" class="form-control" id="inpPotencia" placeholder="Potencia">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <br>
                        <p align="center"><strong>Mes</strong></p>
                        <div class="form-group row">
                            <label for="inp1kwh" class="col-sm-2 col-form-label">1</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inpkwh" class="col-sm-2 col-form-label">2</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inpkwh" class="col-sm-2 col-form-label">3</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inpkwh" class="col-sm-2 col-form-label">4</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inpkwh" class="col-sm-2 col-form-label">5</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                        <div class="form-group row">
                            <label for="inpkwh" class="col-sm-2 col-form-label">6</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inpkwh" class="col-sm-2 col-form-label">7</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inpkwh" class="col-sm-2 col-form-label">8</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inpkwh" class="col-sm-2 col-form-label">9</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inpkwh" class="col-sm-2 col-form-label">10</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inpkwh" class="col-sm-2 col-form-label">11</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inpkwh" class="col-sm-2 col-form-label">12</label>
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <input type="number" id="inpkwh" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">kWh</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <br>
                        <p align="center"><strong>Costo</strong></p>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number" id="inpCost" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="display:none;" id="divGDMTH">
                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label>B(kWh)&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label>I(kWh)&nbsp;&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label>P(kWh)&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label for="">B(kw)&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label for="">I(kw)&nbsp;&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label for="">P(kw)&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <span class="label-cotizador" style="color: green"><strong>Tarifas CFE</strong></span><br><br>

                <div class="row">
                    <div class="col">
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label for="inPagoTransmision">Pago de transmisión&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" id="inPagoTransmision" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label for="B(mxn/kWh)">B(mxn/kWh)&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" id="B(mxn/kWh)" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label for="I(mxn/kWh)">I(mxn/kWh)&nbsp;&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" id="I(mxn/kWh)" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label for="P(mxn/kWh)">P(mxn/kWh)&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" id="P(mxn/kWh)" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label for="C(mxn/kW)">C(mxn/kW) &nbsp;&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" id="C(mxn/kW)" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <div class="input-group mb-2">
                                    <label for="D(mxn/kW)">D(mxn/kW)&nbsp;&nbsp;&nbsp;</label>
                                    <input type="number" min="0" value="0" class="form-control" id="D(mxn/kW)" onkeypress="return filterFloat(event,this);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div><br>

<!--Scrip que valida que solo se ingresen valores numéricos en las cajas de texto, con un solo punto y máximo 2 decimales.-->
<script type="text/javascript">
    function filterFloat(evt,input){
        // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
        var key = window.Event ? evt.which : evt.keyCode;
        var chark = String.fromCharCode(key);
        var tempValue = input.value+chark;
        if(key >= 48 && key <= 57) {
            if(filter(tempValue)=== false) {
                return false;
            } else {
                return true;
            }
        } else {
            if(key == 8 || key == 13 || key == 0) {
                return true;              
            } else if(key == 46) {
                if(filter(tempValue)=== false) {
                    return false;
                } else {
                    return true;
                }
            } else {
                return false;
            }
        }
    }
    function filter(__val__){
        var preg = /^([0-9]+\.?[0-9]{0,2})$/;
        if(preg.test(__val__) === true) {
            return true;
        } else {
            return false;
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('roles/seller/cotizador/cotizador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\EteslaPanelesSolares\resources\views/roles/seller/cotizador/mediaTension.blade.php ENDPATH**/ ?>