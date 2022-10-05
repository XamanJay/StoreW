@extends('layouts.users')
@section('content_users')






<div id="enjoyers01" class="container header font__Griffy P_center" style="margin-top:5px">
    <div class="row" >
        

            <div style="margin-bottom:0px">
                <h1> U S U A R I O S </h1>
            </div>

            <div class="table-responsive">
                <table id="tableejoyers" class="display table  " style="width:100%"> 
                    <thead>
                        <tr class="">
                            <th><a href="userws/create">Nuevo Usuario</a> </th>
                            <th></th>
                            <th></th>
                            <th>USUARIOS </th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr class="">
                            <th class=""> Nombre </th>
                            <th class=""> Apellidos </th>
                            <th class=""> Usuario </th>
                            <th class=""> Email </th>
                            <th class=""> Type </th>
                            <th class=""> Action </th>
                            <th class=""> Action </th>
                            
                            
                        </tr>
                    </thead>
                    <tbody > 
                        
                        

                        @foreach ($users as $user )
                            <tr class="">
                                <td class=""> {{ $user->firstname }}  </td>
                                <td class=""> {{ $user->lastname }} </td>
                                <td class=""> {{ $user->username }} </td> 
                                <td class=""> {{ $user->email }} </td>
                                <td class=""> {{ $user->type }} </td>                                                                                <!-- userws/{userw}/edit   -->
                                <td class=""><img src="{{ asset('images/editar.png') }}" title="Editar" height="20px" width="15px"><a href="/userws/{{ $user->id }}/edit">EDIT</a> </td>
                                @if ($user->type == 'admin')
                                <td class=""> &nbsp; </td> 
    
                                @elseif ($user->type == 'user')

                                <td class="">
                                    <form action="/userws/{{ $user->id }}" method="POST"  >
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete {{ $user->firstname }}</button>
                                    </form>

                                    
                                </td> 

                                
                               
                               
                                @else
                                <td class=""> &nbsp; </td> 
                                @endif
                                
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