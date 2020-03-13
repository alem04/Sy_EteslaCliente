var arrayPeriodosGDMTH = [];
var objPeriodosGDMTH = {};
var indexador = 0;

function agregarPeriodo(){
    var BkWh = document.getElementById('inpBkWh').value;
    var IkWh = document.getElementById('inpIkWh').value;
    var PkWh = document.getElementById('inpPkWh').value;
    var BkW = document.getElementById('inpBkw').value;
    var IkW = document.getElementById('inpIkw').value;
    var PkW = document.getElementById('inpPkw').value;
    var Bmxn = document.getElementById('B(mxn/kWh)').value;
    var Imxn = document.getElementById('I(mxn/kWh)').value;
    var Pmxn = document.getElementById('P(mxn/kWh)').value;
    var pagoTransmision = document.getElementById('inpPagoTransmision').value;
    var Cmxn = document.getElementById('C(mxn/kW)').value;
    var Dmxn = document.getElementById('D(mxn/kW)').value;

    /*Validar campos vacios*/
    if(validarCamposVacios(BkWh) || validarCamposVacios(IkWh) || validarCamposVacios(PkWh) || validarCamposVacios(BkW) || validarCamposVacios(IkW) || validarCamposVacios(PkW) || validarCamposVacios(Bmxn) || validarCamposVacios(Imxn) || validarCamposVacios(Pmxn) || validarCamposVacios(pagoTransmision) || validarCamposVacios(Cmxn) || validarCamposVacios(Dmxn)){
        alert('Todos los campos pertenecientes a los datos de consumo, deben de llenarse');
    }else{
        objPeriodosGDMTH = {
            bkwh: BkWh,
            ikwh: IkWh,
            pkwh: PkWh,
            bkw: BkW,
            ikw: IkW,
            pkw: PkW,
            bmxn: Bmxn,
            imxn: Imxn,
            pmxn: Pmxn,
            pagoTransmi: pagoTransmision,
            cmxn: Cmxn,
            dmxn: Dmxn
        };
    
        arrayPeriodosGDMTH.push(objPeriodosGDMTH);
        sumarNoAlIndexador();
        limpiarCampos();
    
        console.log(arrayPeriodosGDMTH);
    }
}

function mostrarPeriodo(){
    /*Se desplega el contenido del array en los campos*/ 

}

function validarCamposVacios(valor){
    valor = valor.replace("&nbsp;", "");
    valor = valor == undefined ? "" : valor;

    if (!valor || 0 === valor.trim().length){
        return true;
    }
    else{
        return false;
    }
}

function sumarNoAlIndexador(){
    indexador = arrayPeriodosGDMTH.length;
    var lista = document.getElementById("lstPeriodos");    
    var option = document.createElement("option");
    option.text = indexador;
    lista.add(option);
    lista.selectedIndex = indexador.toString();
}

function limpiarCampos(){
    $('input[type="number"]').val('');
}

function GDMTH(){
    document.getElementById('divGDMTO').style.display = 'none';
    document.getElementById('divGDMTH').style.display = '';
}
