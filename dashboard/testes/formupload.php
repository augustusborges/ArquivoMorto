<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title></title>

        <links>
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../assets/css/dropzone.min.css" />
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
        <link rel="stylesheet" href="css/dropzone.css" />
        </links>

    </head>
    <body>
        
        <form action="upload.php" class="dropzone" id="my-dropzone">
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>

        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/dropzone.js"></script>
        <script  type="text/javascript">
            $(document).ready(function() { 
                
                Dropzone.autoDiscover = false;
                $("#my-dropzone").dropzone({
                    //url: "/arquivos",
                    addRemoveLinks : true,
                    removedfile: function(file) {

                        var name = file.name;    
                        //name = name.replace(/\s+/g, '-').toLowerCase();    /*only spaces*/
                        $.ajax({
                            type: 'POST',
                            url: 'delete.php?id='+name,
                            data: "id="+name,
                            dataType: 'html',
                            success: function(data) {
                                $("Arquivo deletado com sucesso").html(data);
                            }
                        });


                        var _ref;
                        if (file.previewElement) {
                            if ((_ref = file.previewElement) != null) {
                                _ref.parentNode.removeChild(file.previewElement);
                            }
                        }
                        return this._updateMaxFilesReachedClass();        
                    },
                    maxFilesize: 0.5,
                    dictDefaultMessage:'<span class=\"bigger-150 bolder\"><i class=\"ce-icon fa fa-caret-right red\"></i> Arraste as Notas Fiscais</span> para carregar \
                            <span class=\"smaller-80 grey\">(ou click)</span> <br /> \
				            <i class=\"upload-icon ace-icon fa fa-cloud-upload blue fa-3x\"></i>',
                    dictResponseError: 'Erro ao fazer o upload !'
                });
            });
            
            
            Dropzone.options.myDropzone = {
                init: function() {
                    thisDropzone = this;
                    $.get('upload.php', function(data) {
                        $.each(data, function(key,value){
                            var mockFile = { name: value.name, size: value.size };
                            thisDropzone.emit("addedfile", mockFile);
                            thisDropzone.emit("thumbnail", mockFile, "/daab/intranet/testes/arquivos/"+value.name);
                        });
                    });

                    thisDropzone.on("addedfile", function(file) {

                        var openButton = Dropzone.createElement("<button class='btn btn-sm btn-success'>Abrir</button>"); 
                        var _this = this;
                        
                        openButton.addEventListener("click", function(e) {
                            e.preventDefault();
                            e.stopPropagation();
                            window.open("/daab/intranet/testes/arquivos/"+file.name);
                        }); 
                        file.previewElement.appendChild(openButton);
                    }); 
                }
            };
        </script>
    </body>
</html>