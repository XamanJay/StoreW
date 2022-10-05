
@extends('layouts.layout')
@section('content')

<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<form action="/categories" method="POST" >
    @csrf


<div id="tours" class="container-fluid header font__Griffy P_center" style="margin-top:0px">
    <div class="row" style="padding:10px;background-color: #d9edf7;margin-bottom: 20px;">

        <div class="col-md-12" > 
            
            <div>
                <hr>
                <p style="text-align: center;margin-bottom: 2px;margin-top: 2px;">
                    <label> ::::: CATEGORIAS ::::: </label>
                </p>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                    <label for="">Nombre </label>
                        <input placeholder="" autofocus id="Nombre" name="Nombre" class="form-control" type="text" value="" required  >
            </div>
            <div class="col-md-4">
                        <label for="">Código </label>
                        <input id="Codigo" name="Codigo" class="form-control" type="text" value=""   >
            </div>
            <div class="col-md-4">
                <label for="">CPadre </label>
                <input id="CPadre" name="CPadre" class="form-control" type="text" value=""   >
            </div>
        </div>
       



        




       <div class="form-group  col-sm-6" >
        <label for="guardar" class="label-form">&nbsp;</label><br>
        
        <button type="submit" class="btn btn-primary">::::: G U A R D A R :::::</button>
    </div>
                                       
        <div class="form-group  col-sm-6" >
        <label for="reset" class="label-form">&nbsp;</label><br>
         <input type="reset" class="btn btn-primary"  value=" ::::: R E S E T ::::: ">
        </div>



		
    </div>
                        
    
</div>


</form>


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->	







@endsection