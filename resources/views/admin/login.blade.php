@extends('layouts.login')
@section('content_login')
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="SpaceMini font__Griffy" style="margin-top:0px">
    <div>
        <p></p>
    </div>
</div>
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="container" id="enjoyer" style="margin-top:0px">
    <form method="POST" action="userw" name="login_form">
        @csrf   
        @method('head')
        <div class="row">
            <div class="col-sm-12">
                
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <p class="SpaceMini font__Griffy" style="margin-top:0px">L O G I N</p>
                    <div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <strong>Enjoyer: </strong><input type="text" id="enjoyer" name="enjoyer" class="form-control" placeholder="" > 
            </div>
            <div class="col-sm-6">
                <strong>Password: </strong><input type="password" id="passswword" name="passswword" class="form-control"> 
            </div>
        </div>
       
        
        <div class="row">
            <div class="col-sm-12">
                
                <p class="SpaceMini font__Griffy" style="margin-top:0px"> &nbsp; </p>
                
            </div>
        </div>

        

        

        <div class="row">
            <div class="col-sm-4">
                    
                    <div class="input-group mb-3">
                       
                       
                        
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="input-group mb-3">
                       
                       
                        
                    </div>
                                
            </div>
            <div class="col-sm-4">
                             
                <button type="button" value="" class="form-control btn btn-warning " id="activate" name="B01" onClick="ValidaCampos()"><strong>:::LOG IN:::</strong> </button>    
            </div>
        </div>
        <hr>

        
    
    </form>
        

</div>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	



<script> 
	function ValidaCampos()  {
        
        let jvi_texto_correcto = /[\d\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_numero_correcto = /[\D\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_numero_correcto1 = /[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
		let jvi_textoynumero_correcto = /[\'\"\(\)\%\$\!\#\&\<\>\+\*\=\?\¿\¡\[\]\{\}\/\@]/;
       
        
        
        if (login_form.enjoyer.value  == "")   {
            alert("El campo: Usuario, no debe estar vacío, favor de verificar ");    login_form.enjoyer.focus(); return false;
        }  

        if (login_form.passswword.value  == "")   {
            alert("El campo: Password, no debe estar vacío, favor de verificar ");    login_form.passswword.focus(); return false;
        }  


        
       
        login_form.B01.disabled = true; 
		document.login_form.submit();	  
    }
    
</script>



<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		




<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="SpaceMini text-white font__Griffy" style="margin-top:100px">
    <p>&nbsp;</p>
    </div>












@endsection