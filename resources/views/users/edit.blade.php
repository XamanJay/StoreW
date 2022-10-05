@extends('layouts.users')
@section('content_users')


<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<form action="/userws/{{ $users->id }}" method="POST" >
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
                        <input placeholder="" autofocus id="firstname" name="firstname" class="form-control" type="text" value="{{ $users->firstname }}" required  >
                </div>
                <div class="col-md-6">
                        <label for="">Apellidos </label>
                        <input id="lastname" name="lastname" class="form-control" type="text" value="{{ $users->lastname }}"   >
            </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                    <label for="">Usuario </label>
                    <input id="username" name="username" class="form-control" type="text" value="{{ $users->username }}"   >
                </div>

                
                <div class="col-sm-6">
                    <label for="">Password  </label>
                    <input id="password" name="password" class="form-control" type="password" value="{{ $users->password }}"   >
                </div>
        </div>
        <div class="row">  
                <div class="form-check col-sm-3">
                    <label class="form-check-label">
                        <br>
                        <input class="form-check-input" type="checkbox" name="active" checked value="{{ $users->active }}"> Active
                    </label>
                </div>
                <div class="form-group  col-sm-3">
                    <label for="" class="label-form">Tipo</label>
                    
                    <select id="type" name="type" size="1" class="form-select form-select">    
                        <option value="{{ $users->type }}">{{ $users->type }}</option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                       
                      </select>
                </div>
                
                <div class="form-group  col-sm-6">
                    <label for="" class="label-form">Email</label>
                    <input id="email" name="email" class="form-control" type="text" value="{{ $users->email }}"   >
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