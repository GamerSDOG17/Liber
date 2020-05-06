@extends('layouts.app')

  @section('content')
  <title>{{ config('app.name', 'Liber') }}</title>
  <form class="overflow-auto">
    <form>
    <div class="form-group">
    <h1 style=" text-align: left; color: black" class="ml-5 mt-5">Bem vindo, Usuário!</h1>

    <div style="text-align: right;" >
    <button type="button"class="btn btn-light mr-5 btn-lg"> <a href="#" class="card-link" data-toggle="modal" data-target="#perfilModalAluno">Meu Perfil</a></button>
<<<<<<< HEAD
    <button type="button"class="btn btn-light mr-5 btn-lg"> <a href="{{ route('chat') }}">Participar Sessão</a></button>
    </div>
    </div>  
    </form>
              
    <div style="background-color: black">
      <hr>
        <div class="ml-5" style="color: white; font-size:25px;"> Sessões Visitadas:</div>
      <hr>
=======
    <button type="button"class="btn btn-light mr-5 btn-lg"> <a href="#">Participar Sessão</a></button>
    </div>
    </div> 
    </form>
              
    <div class="w3-bar  w3-black mt-2 mb-3">
        <div class="w3-bar-item w3-left"> Sessões Visitadas:</div>
>>>>>>> 710d482cd7235aa3529e5a11820e6028ff5868c2
     </div>

     <form class="form-group">
        <div class="form-row">
        <div class="form-group col-md-6">
<<<<<<< HEAD
        <ul style="border:1px solid black; background-color:black;" class="list-group w-100 p-3 mh-50">
            <li style="border:1px solid black;" class="list-group-item">Nome da Sessão: </li>
            <li style="border:1px solid black;" class="list-group-item">Criador: </li>
            <li style="border:1px solid black;" class="list-group-item">Suas Postagens: </li>
            <li style="border:1px solid black;" class="list-group-item">Personagens: </li>
            <li style="border:1px solid black;" class="list-group-item">Encerramento da sessão: </li>
       </ul>
       <button style="margin-left: 250px;" class="form-group btn btn-link" type="button">  
        <a href="#"  data-toggle="modal" data-target="#sairModal">
        <svg class="bi bi-x-circle" width="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"/>
            </svg>
          </a>
      </button> 

        </div>

        <div class="form-group col-md-6" >
        <ul style="border: 1px solid black; background-color:black;" class="list-group w-100 p-3 mh-50 ">
            <li style="border:1px solid black;" class="list-group-item">Nome da Sessão: </li>
            <li style="border:1px solid black;" class="list-group-item">Criador: </li>
            <li style="border:1px solid black;" class="list-group-item">Suas Postagens: </li>
            <li style="border:1px solid black;" class="list-group-item">Personagens Usados: </li>
            <li style="border:1px solid black;" class="list-group-item">Encerramento da sessão: </li>
        </ul>
        <button style="margin-left: 250px;" class="form-group btn btn-link" type="button">
          <a  href="#"  data-toggle="modal" data-target="#sairModal">  
            <svg class="bi bi-x-circle" width="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"/>
              </svg>
            </a>
        </button>
        </div>
        </div>
     </form>
 
           
            
           
            
            
        
    </form>
</form>


<div class="modal " tabindex="-1" role="dialog" id="sairModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sair da sessão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Deseja sair desta sessão agora ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
        <button type="button" class="btn btn-primary">Excluir</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="perfilModalAluno" tabindex="-1" role="dialog" width="50px">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Seu Perfil</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div style=text-align:center; class="modal-body">
            <h3>Insira uma imagem: </h3>
            <label for="perfilImgAluno" class="custom-file-upload" id="perfilTela">
                <input id="perfilImgAluno" type="file">
                <svg class=" bi bi-person-square" width="15em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
              </svg>
            </label>
            <hr>
            <form>
                <div class="form-group row">
                  <label for="inputNome" style="font-size: 25px; color:black;" class="col-sm-2 col-form-label mb-1">Nome: </label>
                  <div class="col-sm-10">
                    <input style="font-size:20px; color:black;" type="text" class="form-control col-md-6" id="InputTexto" placeholder="Nome">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputEscola" style="font-size: 25px; color:black" class="col-sm-2 col-form-label mb-3">Escola: </label>
                  <div class="col-sm-10">
                    <input style="font-size: 20px; color:black" type="text" class="form-control col-md-6" id="inputEscola" placeholder="Escola">
                  </div>
                  <label for="inputEmail" style="font-size: 25px; color:black" class="col-sm-2 col-form-label mb-1">E-mail: </label>
                  <div class="col-sm-10">
                    <input style="font-size: 20px; color:black" type="text" class="form-control col-md-6" id="inputEmail" placeholder="E-mail">
                  </div>  
                </div>
              </div> 
              </form>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="mb-1 btn btn-primary">Salvar Mudanças</button>
        </div>
      </div>
    </div>
  </div>
</div> 

  
=======
        <ul class="list-group w-100 p-3 mh-50">
            <li class="list-group-item">Nome da Sessão: </li>
            <li class="list-group-item">Criador: </li>
            <li class="list-group-item">Suas Postagens: </li>
            <li class="list-group-item">Personagens: </li>
            <li class="list-group-item">Encerramento da sessão: </li>
            <button class="btn btn-classic " type="submit">  
                <svg class="bi bi-x-circle" width="4em" height="10em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"/>
                  </svg>
    
        </ul>

        </div>

        <div class="form-group col-md-6" >
        <ul class="list-group w-100 p-3 mh-50 ">
            <li class="list-group-item">Nome da Sessão: </li>
            <li class="list-group-item">Criador: </li>
            <li class="list-group-item">Suas Postagens: </li>
            <li class="list-group-item">Personagens Usados: </li>
            <li class="list-group-item">Encerramento da sessão: </li>
            <button class="btn btn-classic " type="submit">  
                <svg class="bi bi-x-circle" width="4em" height="10em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"/>
                  </svg>
    
        </ul>
        </div>
        </div>
 
           
            
           
            
            
        
    </form>
</form>

<div class="modal" id="perfilModalAluno" tabindex="-1" role="dialog" width="50px">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Seu Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div style=text-align:center; class="modal-body">
            <p>Insira uma imagem: </p>
            <label for="perfilImgAluno" class="custom-file-upload" id="perfilTela">
                <input id="perfilImgAluno" type="file">
                <svg class=" bi bi-person-square" width="15em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 1H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1V2a1 1 0 00-1-1zM2 0a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V2a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
              </svg>
            </label>
            <hr>
            <form>
                <div class="form-group row">
                  <label for="inputNome" class="col-sm-2 col-form-label mb-1">Nome: </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control mt-2 col-md-6" id="InputTexto" placeholder="Nome">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-2 col-form-label mb-3">Escola: </label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control mt-2 col-md-6" id="inputPassword" placeholder="Escola">
                  </div>
                  <label for="inputEmail" class="col-sm-2 col-form-label mb-1">Email: </label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control mt-2 col-md-6" id="inputEmail" placeholder="Email">
                  </div>  
                </div>
              </form>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="mb-1 btn btn-primary">Salvar Mudanças</button>
        </div>
      </div>
    </div>
  </div>

>>>>>>> 710d482cd7235aa3529e5a11820e6028ff5868c2



 
</body>
</html>


<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
@endsection