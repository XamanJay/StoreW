
@extends('layouts.layout')
@section('content')
<!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->		
<div class="Space text-white font__Griffy" style="margin-top:0px">
    <div class="MOVIMIENTO_IZQ_CRECIENDO">
        <p>Whirlpool System</p>
    </div>
</div>




<div id="enjoyers01" class="container header font__Griffy P_center" style="margin-top:5px">
    <div class="row" >
        

            <div style="margin-bottom:0px">
                <h1> CATEGORIAS </h1>
            </div>

            <div class="table-responsive">
                <table id="tableejoyers" class="display table  " style="width:100%"> 
                    <thead>
                        <tr class="">
                            <th><a href="categories/create">Nueva Categoria</a> </th>
                            <th></th>
                            <th></th>
                            <th>CATEGORIAS </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr class="">
                            <th class=""> Nombre </th>
                            <th class=""> Código </th>
                            <th class=""> CategoriaPadre </th>
                            <th class=""> Action </th>
                            <th class=""> Action </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody > 
                        
                        

                        @foreach ($categories as $category )
                            <tr class="">
                                <td class=""> {{ $category->Nombre }}  </td>
                                <td class=""> {{ $category->Codigo }} </td>
                                <td class=""> {{ $category->CPadre }} </td>
                                <td class=""><img src="{{ asset('images/editar.png') }}" title="Editar" height="20px" width="15px"><a href="/categories/{{ $category->id }}/edit">EDIT</a> </td>
                                <td class="">
                                    <form action="/categories/{{ $category->id }}" method="POST"  >
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete {{ $category->Nombre }}</button>
                                    </form>

                                    
                                </td> 

                                
                                
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>   

            <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

            <script>
                $(document).ready(function() {
                $('#tableejoyers').DataTable ( {
                //  "pageLength": 2
                    "paging": false,
                //"searching": false,
                    "order": [[ 1, "asc" ]]
                    } )
                    
                } );
            </script>

   

            <hr>
          
            
    </div>
</div>    



@endsection