/* http://github.com/mindmup/bootstrap-wysiwyg */
/*global jQuery, $, FileReader*/
/*jslint browser:true*/
(function ($) {
	'use strict';
	var readFileIntoDataUrl = function (fileInfo) {
		var loader = $.Deferred(),
			fReader = new FileReader();
		fReader.onload = function (e) {
			loader.resolve(e.target.result);
		};
		fReader.onerror = loader.reject;
		fReader.onprogress = loader.notify;
		fReader.readAsDataURL(fileInfo);
		return loader.promise();
	};
	$.fn.cleanHtml = function () {
		var html = $(this).html();
		return html && html.replace(/(<br>|\s|<div><br><\/div>|&nbsp;)*$/, '');
	};
	$.fn.wysiwyg = function (userOptions) {
		var editor = this,
			selectedRange,
			options,
			toolbarBtnSelector,
			updateToolbar = function () {
				if (options.activeToolbarClass) {
					$(options.toolbarSelector).find(toolbarBtnSelector).each(function () {
						try {
							var command = $(this).data(options.commandRole);
							if (document.queryCommandState(command)) {
								$(this).addClass(options.activeToolbarClass);
							} else {
								$(this).removeClass(options.activeToolbarClass);
							}
						}catch(e){}
					});
				}
			},
			execCommand = function (commandWithArgs, valueArg) {
				var commandArr = commandWithArgs.split(' '),
					command = commandArr.shift(),
					args = commandArr.join(' ') + (valueArg || '');
				var rpta = document.execCommand(command, 0, args);
				updateToolbar();
				return rpta;
			},
			bindHotkeys = function (hotKeys) {
				$.each(hotKeys, function (hotkey, command) {
					editor.keydown(hotkey, function (e) {
						if (editor.attr('contenteditable') && editor.is(':visible')) {
							e.preventDefault();
							e.stopPropagation();
							execCommand(command);
						}
					}).keyup(hotkey, function (e) {
						if (editor.attr('contenteditable') && editor.is(':visible')) {
							e.preventDefault();
							e.stopPropagation();
						}
					});
				});
			},
			getCurrentRange = function () {
				try {
					var sel = window.getSelection();
					if (sel.getRangeAt && sel.rangeCount) {
						return sel.getRangeAt(0);
					}
				} catch(e){}
			},
			saveSelection = function () {
				selectedRange = getCurrentRange();
				//globalSelectorRange = selectedRange;
			},
			restoreSelection = function () {
				try {
					var selection = window.getSelection();
					if (selectedRange) {// || globalSelectorRange
						selectedRange = selectedRange;// || globalSelectorRange;
						try {
							selection.removeAllRanges();
						} catch (ex) {
							document.body.createTextRange().select();
							document.selection.empty();
						}

						selection.addRange(selectedRange);
					}
				} catch(e){}
			},
			insertFiles = function (files) {
				editor.focus();
				$.each(files, function (idx, fileInfo) {
					if (/^image\//.test(fileInfo.type)) {
						$.when(readFileIntoDataUrl(fileInfo)).done(function (dataUrl) {
							execCommand('insertimage', dataUrl);
						}).fail(function (e) {
							options.fileUploadError("file-reader", e);
						});
					} else {
						options.fileUploadError("unsupported-file-type", fileInfo.type);
					}
				});
			},
			markSelection = function (input, color) {
				restoreSelection();
				if (document.queryCommandSupported('hiliteColor')) {
					document.execCommand('hiliteColor', 0, color || 'transparent');
				}
				saveSelection();
				input.data(options.selectionMarker, color);
			},
			bindToolbar = function (toolbar, options) {
				toolbar.find(toolbarBtnSelector).click(function () {
					restoreSelection();
					editor.focus();
					execCommand($(this).data(options.commandRole));
					saveSelection();
				});
				toolbar.find('[data-toggle=dropdown]').click(restoreSelection);
				toolbar.find('#open-box-create-table').click(function(){
					var $data = Global.fnOpenModalDialog('#popup-create-table','', [{
                        "label" : " Crear ",
                        "class" : "btn-small btn-primary",
                        'href'  : 'callback',
                        "callback": function() {
                            $('#form-create-table').submit();
                        }
                    },
                    {
                        "label" : " Cerrar ",
                        "class" : "btn-small btn-danger"
                    }]);
                    $data.closest('div.bootbox').css({'z-index': 1052}).next().css({'z-index': 1051});
                    $data.find('form').on('submit', fnInsertTable);
                    Global.fnGuardar();
                    Global.fnCerrar();
				}).end().find('#list-email-val').on('click', 'li', fnAddVarToEmailTemplate);

				toolbar.find('input[type=text][data-' + options.commandRole + ']').on('webkitspeechchange change', function () {
					var newValue = this.value; /* ugly but prevents fake double-calls due to selection restoration */
					this.value = '';
					restoreSelection();
					if (newValue) {
						editor.focus();
						execCommand($(this).data(options.commandRole), newValue);
					}
					saveSelection();
				}).on('focus', function () {
					var input = $(this);
					if (!input.data(options.selectionMarker)) {
						markSelection(input, options.selectionColor);
						input.focus();
					}
				}).on('blur', function () {
					var input = $(this);
					if (input.data(options.selectionMarker)) {
						markSelection(input, false);
					}
				});
				toolbar.find('input[type=file][data-' + options.commandRole + ']').change(function () {
					restoreSelection();
					if (this.type === 'file' && this.files && this.files.length > 0) {
						saveSelection();
						fnCustomUploadImage(toolbar.closest('form'));
					}
					this.value = '';
				});
			},
			initFileDrops = function () {
				editor.on('dragenter dragover', false)
					.on('drop', function (e) {
						var dataTransfer = e.originalEvent.dataTransfer;
						e.stopPropagation();
						e.preventDefault();
						if (dataTransfer && dataTransfer.files && dataTransfer.files.length > 0) {
							//insertFiles(dataTransfer.files);
							$('#frm-nuevo-email :file').val(dataTransfer.files[0].name);
							fnCustomUploadImage($('#frm-nuevo-email'));
						}
					});
			},
			fnInsertTable = function(e) {
				e.preventDefault();
				var $this = $(this), data = $this.serializeArray(), b = '', c = '', table = '', i, j, td;
				
				for (i=0; i < data.length; i++) {
					if(data[i].name == 'borde') b = 'border="1"';
					if(data[i].name == 'centrado') c = 'align="center"';
				};
				
				table = '<table '+b+' '+c+' cellpadding="'+data[2].value+'">';
				for (i=0; i < data[0].value; i++) {
					table += '<tr>';
					td = '';
				  	for (j=0; j < data[1].value; j++) {
						td += '<td>ESCRIBIR</td>';
				  	}
				  	table += td+'</tr>';
				}
				table += '</table>';
				restoreSelection();
				saveSelection();
				execCommand('insertHTML', table);
				$('.bootbox:last').modal('hide');
			},
			fnCustomUploadImage = function($form){
				var $do = $form.find('input.doit'), $bootbox = $form.closest('div.bootbox')
				$('#bar-progress-image').removeClass('hidden');
				$bootbox.append('<div id="email-mini-overlay"></div>').find('#email-mini-overlay').css('height', $bootbox.height()+'px');
				$do.val('uploadImage');
				$form.off('submit');
				
				Plantilla.fileUpload = new FileUploadProgress({
					url: 			AJAX_PATH + '/ajax.upload.progress.php',
					boxCancelUpload:$form.find('div.cancel-upload'),
					formUpload:		$form,
					boxProgress:	$form.find('#file_upload_progress_mail'),
					classHidden: 	'hidden',
					complete: function() {
						setTimeout("$('#bar-progress-image').addClass('hidden')", 2000);
						$bootbox.find('#email-mini-overlay').remove();
						$do.val('nuevoEmail');
					},
					cancel: function(){
						$('#bar-progress-image').addClass('hidden');
						$bootbox.find('#email-mini-overlay').remove();
					}
				});
				
				Plantilla.fileUpload.Init();
				$form.submit();
				
				$('#popup-nuevo-email').off('click').on('click', function(){
		        	Plantilla.fileUpload.uploadError();
		        	$bootbox.find('#email-mini-overlay').remove();
		        });
		        $('#sm-mail').off('click').on('click', function(){
		        	Plantilla.fileUpload.finishUpload(true);
		        	fileUploaded = true;
		        });
		        $('#insertImage').off('click').on('click', function(){
		        	editor.focus();
		        	var rpta = document.execCommand('insertImage', 0, pathFileUploaded);
					updateToolbar();
		        });
		        $form.on('submit', Plantilla.fnPlantillaAccion);
			},
			fnAddVarToEmailTemplate = function() {
				var $this = $(this), value = $this.find('a').text();
				restoreSelection();
				saveSelection();
				if(!execCommand('insertHTML', '<span>'+value+'</span>')) {
					Global.fnBoxAlert('Ups.. primero debe elegir el lugar donde lo insertará.',2,4);
				}
			};
		options = $.extend({}, $.fn.wysiwyg.defaults, userOptions);
		toolbarBtnSelector = 'a[data-' + options.commandRole + '],button[data-' + options.commandRole + '],input[type=button][data-' + options.commandRole + ']';
		bindHotkeys(options.hotKeys);
		if (options.dragAndDropImages) {
			initFileDrops();
		}
		bindToolbar($(options.toolbarSelector), options);
		editor.attr('contenteditable', true)
			.on('mouseup keyup mouseout', function () {
				saveSelection();
				updateToolbar();
			});
		$(window).bind('touchend', function (e) {
			var isInside = (editor.is(e.target) || editor.has(e.target).length > 0),
				currentRange = getCurrentRange(),
				clear = currentRange && (currentRange.startContainer === currentRange.endContainer && currentRange.startOffset === currentRange.endOffset);
			if (!clear || isInside) {
				saveSelection();
				updateToolbar();
			}
		});
		return this;
	};
	$.fn.wysiwyg.defaults = {
		hotKeys: {
			'ctrl+b meta+b': 'bold',
			'ctrl+i meta+i': 'italic',
			'ctrl+u meta+u': 'underline',
			'ctrl+z meta+z': 'undo',
			'ctrl+y meta+y meta+shift+z': 'redo',
			'ctrl+l meta+l': 'justifyleft',
			'ctrl+r meta+r': 'justifyright',
			'ctrl+e meta+e': 'justifycenter',
			'ctrl+j meta+j': 'justifyfull',
			'shift+tab': 'outdent',
			'tab': 'indent'
		},
		toolbarSelector: '[data-role=editor-toolbar]',
		commandRole: 'edit',
		activeToolbarClass: 'btn-info',
		selectionMarker: 'edit-focus-marker',
		selectionColor: 'darkgrey',
		dragAndDropImages: false,
		fileUploadError: function (reason, detail) { console.log("File upload error", reason, detail); }
	};
}(window.jQuery));
