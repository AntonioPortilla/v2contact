var Global = {
    intervalID: 0,
    dataDialog: '',
    nowTemp: '',
    now: '',
    deleteConfirm: 'EstÃ¡ seguro(a) de realiza esta operaciÃ³n?',
    run: function() {
        Global.nowTemp = new Date();
        Global.now = new Date(Global.nowTemp.getFullYear(), Global.nowTemp.getMonth(), Global.nowTemp.getDate(), 0, 0, 0, 0);
    },
    fnShowError: function(rec) {
        switch(rec.type){
            case 1:
                alert(rec.error_message);
                location.reload();
                break;
            case 2:
                Global.fnBoxAlert(rec.error_message, rec.modalType, rec.flag);
                break;
            case 3:
                Global.fnGritterError(rec.title, rec.error_message);
                Global.fnRemoveLoadingNow();
                break;
            case 4:
                Global.fnBoxAlert(rec.error_message, rec.modalType, rec.type);
                break;
            case 5:
                Global.fnOpenModalDialog('', rec.error_message, [{"label" : "Cerrar","class" : "btn-small btn-primary"}]);
                break;
        }
        Global.fnRemoveDisableActionsButtomDialog();
    },
    fnRemoveLoading: function(){
        return setInterval('Global.fnRemoveLoadingNow()', 18000);
    },
    fnClearInterval: function() {
        clearInterval(Global.intervalID);
        Global.intervalID = 0;
    },
    fnRemoveLoadingNow: function(){
        var $button = $('div.alert button.close');
        if ($button.length) {
            Global.fnClearInterval();
            $button.click();
        }
    },
    fnBoxAlert: function(message, modalType, flag){
        var clase = '', 
            ventana = '',
            $boxAlert = '';
        switch(modalType) {
            case 2: 
                clase = 'alert-warning';
                ventana = '<div class="alert '+clase+'"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button> '+message+' </div>';
                break;
            case 3: 
                clase = 'alert-error';
                ventana = '<div class="alert '+clase+'"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button> '+message+' </div>';
                
                break;
            case 4:
                clase = 'alert-info';
                ventana = '<div class="alert '+clase+'"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button> '+message+' </div>';
                break;
            default: 
                clase = 'alert-block alert-success'; 
                ventana = '<div class="alert '+clase+'"><button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button><i class="icon-ok green"></i> '+message+' </div>';
                break;
        }
            
            var box = ventana;
            $boxAlert = $('#page-content');

        if (Global.intervalID > 0) {
            Global.fnClearInterval();
        }

        if (flag == 4) {
            $('#box-message').empty().html(box);
        } else {
            if ($boxAlert.find('.alert').length) {
                $boxAlert.find('.alert').remove();
            }
            $boxAlert.prepend(box);
        }
        Global.intervalID = Global.fnRemoveLoading();
    },
    fnGritterNotification: function(title, message) {
        var $gritterBox = $('.gritter-item-wrapper');
        if ($gritterBox.length) {
            $gritterBox.parent().remove();
        }
        $.gritter.add({
            title: title,
            text: message,
            class_name: 'hover gritter-regular'
        });
    },
    fnGritterError: function(title, message) {
        $.gritter.add({
            title: title,
            text: message,
            class_name: 'gritter-error'
        });
    },
    fnOpenModalDialog: function(id, tagsHtml, buttons) {
        var data = '', $dialog;
        if (id != '') {
            var $html = jQuery(id), cache = $html.data('html'), dataObj;

            if (cache && cache.id == id) {
                data = cache.html;
            } else {
                Global.dataDialog = $html.clone();
                dataObj = {
                    id : id,
                    html : Global.dataDialog.html()
                }
                $html.data('html', dataObj).empty();
                
                data = Global.dataDialog.html();
            }
        } else {
            data = tagsHtml;
        }
        
        $dialog = bootbox.dialog('<div id="box-message"></div>'+data, buttons);
        Global.fnSetSlimScroll($dialog.find('form'), 350);

        return $dialog;
    },
    /**
     * Remueve el atributo checked de todos los checkbox seleccionados y quita la clase .selected del elemento padre 'tr'
     * @param $div tabber 
     */
    fnRemoveAllCheckboxes: function($div){
        $div.find('table input:checked').prop('checked', false);
    },
    fnSetSlimScroll: function($div, maxHeight, opa) {
        var opacity = opa || 0.5;
        var alto = $div.height();
        if (alto > maxHeight) {
            $div.slimScroll({height: maxHeight, railVisible: true, alwaysVisible: true, opacity: opacity});
        }
    },
    fnSetOverlayTable: function($div) {
        return $div.find('div.overlay-table').removeClass('none').css('height', $div.find('table').height()+'px');
    },
    fnBuscar: function(){
        if ($('div.modal-footer a').hasClass('btn-success')){
            $('<i class="icon-search bigger-110"></i>').prependTo($('div.modal-footer').find('.btn-success'));
        }
    },
    fnGuardar: function(){
        if ($('div.modal-footer:last a').hasClass('btn-primary')) {
            $('div.modal-footer:last').find('.btn-primary').prepend('<i class="icon-save bigger-125"></i>');
        }  
    },   
    fnCerrar: function(){
        if ($('div.modal-footer:last a').hasClass('btn-danger')){
            $('div.modal-footer:last').find('.btn-danger').prepend('<i class="icon-remove bigger-125"></i>')
        }  
    },
    fnSetTabActive: function(path) {
        var $li = $('#'+path).addClass('active').parent().parent();
        if ($li.length) {
            $li.addClass('open active');
        }
    },
    fnDisableActionsButtomDialog: function() {
        var $modalFooter = $('div.modal-footer');
        if ($modalFooter.find('#bg-disabled').length) {
            $modalFooter.find('#bg-disabled').removeClass('hidden');
        } else {
            var height = $modalFooter.height() + parseFloat($modalFooter.css('paddingTop')) + parseFloat($modalFooter.css('paddingBottom'));
            $modalFooter.prepend('<div id="bg-disabled" style="height: '+height+'px"></div>');
        }
    },
    fnRemoveDisableActionsButtomDialog: function() {
        $('div.modal-footer #bg-disabled').addClass('hidden');
    },
    fnHideActionsButtomDialog: function(){
    	$('div.modal-footer .btn-primary').addClass('hidden');
    },
    fnShowActionsButtomDialog: function(){
    	$('div.modal-footer .btn-primary').removeClass('hidden');
    }
}

Global.run();

jQuery.fn.getCheckboxValues = function(){
    var values = [],i = 0;
    this.each(function(){
        values[i++] = $(this).val();
    });
    return values;
}

function resetForm(nform){
    var pagina = $('#' + nform + ' #paginar').val();
    document.getElementById(nform).reset();
    $('#' + nform + ' #paginar').val(pagina);
    $('#' + nform + ' #estado').val('ACTIVO');
}

jQuery.fn.unlockinputs = function(){
    this.each(function(){
        $(this).prop('disabled', false);
    });
}

jQuery.fn.lockinputs = function(){
    this.each(function(){
        $(this).prop('disabled',true);
    });
}

function removeOptionOfSelect(selectId, valor){
    var $option = 0;
    $('#'+selectId+' option').each(function(idx, el){
        $option = $(el);
        if(parseInt($option.val()) == valor){
            $option.remove();
            return false;
        }
    });
}

function addOptionOfSelect(selectId, value, text){
    var elem = document.getElementById(selectId);
    if(elem.value == 0){
       elem.remove();
    }
    $('#'+selectId).append('<option value="'+value+'">'+text+'</option>')
}

function fnCheckedBox() {
    var $this = $(this),
    $main_checkbox = $this.closest('table').find('input.check-box'),
    $tbody = $this.closest('tbody'),
    checkeds = $tbody.find(':checked').length;

    if($this.is(':checked')){
        $this.prop('checked', true);
        var boxes = $tbody.find(':checkbox').length;

        if(boxes == checkeds){
            $main_checkbox.prop('checked', true);
        }
    } else {
        $this.prop('checked', false);
        if($main_checkbox.is(':checked')){
            $main_checkbox.prop('checked' ,false);
        }
    }
}

function fnSelectedAllCheckboxes(){
    var $this = $(this),
    $tabpanel = $this.closest('.tab-pane')  || $this.closest('div.tabbertab'),
    $boxes = $tabpanel.find('tbody :checkbox'),
    checkeds = $tabpanel.find('tbody :checked').length;

    //Si el total de filas checkeadas es igual al total de filas que se muestra en la tabla.
    if($boxes.length == checkeds) {
        //Remueve el atributo checked y quita la clase .selected de la fila que le corresponde
        $boxes.prop('checked', false).closest('tr');//.removeClass('selected');
        //Cambia la descripcion del tooltip y remueve el atributo cheked
        $this.prop('checked', false);
    } else {
        $this.prop('checked', true);
        $boxes.prop('checked', true);
    }
}

//$this => Solo un elemento dentro del nodo o elemento HTML 'table'
function toogleActionButtons($this){
    var $menu_div = $this.closest('div.tab-pane').find('div.nav-menu');
    //Botones: activar, eliminar, suprimir
    return $menu_div.find('.del-selecionado');
}

//$div_main => $('div.tabbertab')
function removeActionButtons($div_main){
    return $div_main.find('.del-selecionado, .suprimir-selecionado, .act-selecionado').addClass('none');
}

function addHandler($selector, event, funcion){
    $selector.on(event,funcion);
}

function fnReload(){
    location.reload();
}

function marcAll(form){
    checkboxes = document.getElementsByTagName('input'); 
        for(i=0;i<checkboxes.length;i++) 
        {
            if(checkboxes[i].type == "checkbox")
            {
                checkboxes[i].checked=form.checked;
            }else{
                console.log('chota contigo');
            }
        }
} 

function paginadorSetCurrentValue( $tbl ){
    $tbl.closest('div.tabbertab').find('select.cbo-paginador option').each(function(id,el){
        var $elem = $(el);
        if($elem.val() == $tbl.attr('index')){
            $elem.prop('selected', true);
            return false;
        }
    });
}

//estado = ELIMINADO | ACTIVO
function setComboBoxPaginador($div_main, estado, reload_data){
    var arr = {
        cbo : 0, 
        total : 0,
        options : '', 
        $tbl : ''
    };

    if(estado == 'ACTIVO'){
        arr.cbo = parseInt($div_main.find('b.a').attr('pag'));
        arr.total = parseInt($div_main.find('b.a').text());
        arr.$tbl = $div_main.find('tbody.tbl-data-activos');
    }
    else{
        arr.cbo = parseInt($div_main.find('b.e').attr('pag'));
        arr.total = parseInt($div_main.find('b.e').text());
        arr.$tbl = $div_main.find('tbody.tbl-data-eliminados');
    }
    
    if(arr.total > 0){
        for(var i=1; i <= arr.cbo; i++){
            arr.options += '<option value="'+i+'">'+i+'</option>'
        }
    }
    else{
        arr.options = '<option value="0">0</option>';
    }
    
    $div_main.find('select.cbo-paginador').html(arr.options);
    
    //Cuando se recarga los datos que no se ejecute
    if(!reload_data){
        paginadorSetCurrentValue( arr.$tbl );
    }
}
/*
function hideRptaMsg($msg){
    if(!$msg.hasClass('none')){
        $msg.addClass('none');
    }
}*/

/**
 * Te devuelve el texto de la opcion seleccinada de un control <select> -seleccionar-
 * @param idControl el id del control select del formulario
 * @return La cadena de texto del control <select> -seleccionar-
 */
function getTextOfSelect(idControl){
    var control = document.getElementById(idControl);
    return control.item(control.options.selectedIndex).textContent;
}

/**
 * Actualiza el texto del control <select> - Select - 
 * @param idSelector El id del control <select> - Select - 
 * @param val El atributo value de la etiqueta option 
 * @param text El texto a actualizar
 */
function setTextOfSelect(idSelector, val, text){
    var elem = document.getElementById(idSelector), n = 0;
    console.log(elem, elem.options.length);
    while(n < elem.options.length){
        if(elem[n].value == val){
            elem[n].textContent = text;
            break;
        }
        n++;
    }
}

jQuery.fn.fnCboPaginador = function( customOptions ){
    var options =  $.extend({}, $.fn.fnCboPaginador.defaultOptions, customOptions);
    this.change(function(){
        var $this = $(this),
        $div_main = $this.closest('div.tabbertab'),
        estado = $div_main.find('table').attr('estado'),
        cols = $div_main.find('table th').length,
        $tbl_data = null,
        current = $this[0].value,
        optional = '';
        
        if(estado == 'ACTIVO'){
            $tbl_data = $div_main.find('tbody.tbl-data-activos');
        }
        else{
            $tbl_data = $div_main.find('tbody.tbl-data-eliminados');
        }
        
        if(typeof $div_main.find('table').attr('area-search') != 'undefined'){
            optional = '&group=on';
        }

        var $old_data = $tbl_data.find('tr').append('<input type="hidden" class="index" value="'+$tbl_data.attr('index')+'" />');
        var $cache = $tbl_data.data('cache');
        if($cache){
            if($cache.find('.index').val() == current){
                $tbl_data.data('cache',$tbl_data.find('tr')).html($cache).attr('index', current);
                $('input.xy').click(fnCheckedBox);
                var $editar = $('span.editar');
                if($editar.length){
                    $editar.click(editar);
                }
                $('.btn-edit').tipsy({
                    gravity: 'w'
                });
                return false;
            }
        }
        $tbl_data.html('<tr><td colspan="'+cols+'"><img src="public/image/ajax-loader.gif" /></td></tr>');
        $.ajax({
            url : AJAX_PATH + '/' + options.path,
            type    : 'post',
            data    : 'do='+$this.attr('action')+'&current='+current+'&estado='+estado+optional,
            dataType: 'json',
            success: function(rec){
                if(rec['load']){
                    $tbl_data
                    .data('cache', $old_data)
                    .html(rec['data'])
                    .attr('index', current);
                    $('input.xy').click(fnCheckedBox);
                    var $editar = $('span.editar');
                    if($editar.length){
                        $editar.click(editar);
                    }
                    $('.btn-edit').tipsy({
                        gravity: 'w'
                    });
                }
                else{
                    alert(rec['error_message']);
                }
            }
        });
    });
}

jQuery.fn.fnMessageDialog = function(options){
    var arr = {
        $this : $(this),
        title : function(){return (options.title == '') ? 'V2contact dice:' : options.title},
        html : options.html,
        close : function(){
            $(this).closest('#dialog').remove();
        },
        top: function(){
            return  $(window).scrollTop() + 140;
        }
    };
    
    var $popup = arr.$this.find('#dialog:last');
    //Si hay un MessageDialog existente lo eliminarÃ¡
    if($popup.length){
        $popup.remove();
    }

    $('<div id="dialog" style="top:'+arr.top()+'px"><div id="dialog-title" class="thead-gradient"><h3>'+arr.title()+'</h3></div><div id="dialog-message">'+arr.html+'</div><div id="dialog-buttonpane"><span id="close-dialog" class="button2">Cerrar</span></div></div>')
    .find('#close-dialog').click(arr.close).end().appendTo(this);
}

jQuery(document).ready(function() {
    jQuery('.desaparece').hover(function(){
        $(this).animate({opacity:0});
    },function(){
        $(this).animate({opacity:1});
    });
});

jQuery('#cuenta, #cuenta2').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
    var $ventanita = Global.fnOpenModalDialog('#open-popup-cuentas-bancarias','', [{
        "label" : "Cerrar ",
        "class" : "btn-small btn-danger"
        }]);  
});
