@extends('adminlte::page')

@section('title', 'Consultar DNI')

@section('content_header')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
@stop
@section('content')
{{-- @if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif --}} <br>
<x-adminlte-card title="PERSONAL" theme="dark" icon="fas fa-id-card">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title pb-2">DNI a consultar : <span class="text-danger">*</span></h3>
                        </div> --}}                        
                        <form action="" id="formulario" method="POST" autocomplete="off">
                            @csrf
                            <div class="card-body">                                
                                <div class="row">                                   
                                  <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- With prepend slot --}}                                    
                                            <x-adminlte-input type="number" name="document" placeholder="Ingrese DNI a consultar.." label-class="text-lightblue">
                                                <x-slot name="prependSlot">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-id-card text-dark"></i>
                                                    </div>
                                                </x-slot>
                                            </x-adminlte-input>  
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                        <div class="row">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-primary" name="btnBuscar" id="btnBuscar" type="submit">
                                                        <i class="fas fa-search"></i>
                                                        Buscar 
                                                    </button>
                                                    <a href="#" id="btnTrim" class="btn btn-primary">
                                                        <i class="fas fa-eraser"></i>
                                                        Limpiar
                                                    </a>                                                                         
                                                </div>                                       
                                        </div>
                                 </div>
                                </div>
                                {{-- @push('js')<script>$(() => $("#drPlaceholder").val(''))</script>@endpush --}}
                                   
                                
                            </div>   
                        </form>
                        <!-- /.form -->
                    </div>
                <!-- /.card -->            
                </div>
                <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        {{-- contener fluid.2 --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title pb-2"><i class="fa fa-poll"></i> RESULTADOS</span></h3>
                                                        
                        </div>                   
                            <div class="card-body" style="background-color: #E9ECEF;"> 
                                                               
                                <div class="row">                                    
                                    <div class="col-md-9">
                                        <div class="row text-end">                                            
                                                                                        
                                        </div>                  
                                    </div>
                                </div>         
                            </div>                
                    </div>
        
                </div>
            </div>
        </div>
        <!-- /.container-fluid.2 -->
    </section> 
</x-adminlte-card>




@stop
@section('footer')
<strong>Municipalidad de Pachacámac - Copyright © 2023</strong>
Todos los derechos reservados.

<div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.5.0-alpha
</div>
@stop