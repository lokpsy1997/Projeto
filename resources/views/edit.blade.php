@extends('layouts.app', ['activePage' => 'Produto.edit', 'titlePage' => __('Lista')])

@section('content')



    <div class="content">
        <div class="container-fluid">




            <div class="content">
                <div class="container-fluid">





                    <div class="row">
                        <div class="col-md-6">


                            <div class="card ">
                                {{-- <div class="card-header card-header-danger">
                                <h4 class="card-title">{{ __('Altere sua Senha') }}</h4>
                                <p class="card-category">{{ __('Senha ') }}</p>
                            </div> --}}

                                <div class="card-header card-header-danger">


                                    <div class="row">
                                        <div class="col-lg-12 margin-tb">
                                            <div class="pull-left">
                                <h4 class="card-title">{{ __('Produto') }}</h4>
                                <p class="card-category">{{ __('Alterar Dados do Produto ') }}</p>

                                            </div>
                                            <div class="pull-right">
                                                <a href="{{ route('Produto.index') }}"
                                                    title="Voltar">
                                                    <i class="material-icons text-info">
                                                        arrow_back
                                                        </i> </a>
                                            </div>
                                        </div>
                                    </div>


                                </div>



                                <div class="card-body ">


                                    <div class="card mt-5">
                                        <div class="card-header">

                                        </div>

                                        <div class="card-body">





                                            <form method="POST" action="{{ route('Produto.update', $produto->id) }}" >
                                                @csrf
                                                @method('PUT')


                                                <div class="form-group  ">

                                                    <label for="name">Categoria</label>

                                                        <? use App\Models\estoque\produto\categoria\Categoria; $Categoria = Categoria::all() ?>

                                                    <div style="margin-left: 0%" class="row">

                                                    <select type="text" class="form-control " style="width: 90%"  name="categoria" id="categoria" required>
                                                        <option value="{{$produto->categoria}}"> {{$produto->categoria}}</option>
                                                        @foreach($Categoria as $Categoria)
                                                        <option value="{{$Categoria->nome}}">{{$Categoria->nome}}</option>
                                                        @endforeach

                                                      </select>

                                                      <a href="{{ route('CategoriaProduto.create') }}">
                                                      <i class="material-icons text-warning " >
                                                        playlist_add
                                                    </i>
                                                      </a>

                                                </div>
                                                <span class="text-danger" id="categoria-error" >  </span>



                                                </div>

                                                <div class="form-group  ">
                                                    @csrf
                                                    <label for="name">Tipo Medida</label>
                                                    <select class="form-control" name="und_medida" id="und_medida" required>
                                                        <option value="{{$produto->und_medida}}">{{$produto->und_medida}}</option>
                                                        <option value="Kg">Kg</option>
                                                        <option value="Grama">Gramas</option>
                                                        <option value="Unidade">Unidade</option>
                                                        <option value="Litro">Litro</option>
                                                        <option value="miligramas">ml</option>
                                                    </select>
                                                    <span class="text-danger" id="und_medida-error" >  </span>

                                                </div>


                                                <div class="form-group">
                                                    @csrf
                                                    <label for="name">Produto</label>
                                                    <input type="text" class="form-control" name="produto" id="produto" value="{{$produto->produto}}" />
                                                    <span class="text-danger" id="produto-error" >  </span>
                                                </div>



                                                <div class="form-group">
                                                    @csrf
                                                    <label for="name">Descrição</label>
                                                    <input type="text" class="form-control" name="descricao"  value="{{$produto->descricao}}" />
                                                </div>

                                                <button type="submit" class="btn btn-block btn-primary">Alterar</button>
                                            </form>












                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        @endsection
