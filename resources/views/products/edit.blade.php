@extends('layouts.layout')
@section('content')


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<form action="/products/{{ $products->id }}" method="POST" enctype="multipart/form-data" >
    @csrf
    @method('PUT')


<div id="tours" class="container-fluid header font__Griffy P_center" style="margin-top:0px">
    <div class="row" style="padding:10px;background-color: #d9edf7;margin-bottom: 20px;">

        <div class="col-md-12" > 
            
            <div>
                <hr>
                <p style="text-align: center;margin-bottom: 2px;margin-top: 2px;">
                    <label> ::::: EDIT USERS ::::: </label>
                </p>
                <hr>
            </div>
        </div>

        
        <div class="row">
            <div class="col-md-6">
                    <label for="">Nombre.  </label>
                        <input placeholder="" autofocus id="Nombre" name="Nombre" class="form-control" type="text" value="{{ $products->Nombre }}" required  >
                </div>
                <div class="col-md-6">
                        <label for="">SKU </label>
                        <input id="SKU" name="SKU" class="form-control" type="text" value="{{ $products->SKU }}"   >
            </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                    <label for="">Precio </label>
                    <input id="Precio" name="Precio" class="form-control" type="text" value="{{ $products->Precio }}"   >
                </div>

                
                <div class="col-sm-6">
                    <label for="">Descripcion  </label>
                    <input id="Descripcion" name="Descripcion" class="form-control" type="text" value="{{ $products->Descripcion }}"   >
                </div>
        </div>
        <div class="row">  
                <div class="form-group col-sm-6">
                    <label for="image_path" class="label-form">Imagen de Producto</label>
                    <input id="image_path" name="image_path" class="form-control"  type="file" >
                
                </div>
                
                
                <div class="form-group col-sm-6">
                    <label for="">Categorias</label>
                    <select name="id_categories" class="form-select"> 
                        
                      @foreach ($categoriess as $categorieess )    
                                    <option value="{{ $categorieess->id }}">{{ $categorieess->Nombre }}</option>
                                @endforeach
                  </select>
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