@extends('layouts.app-professor')

  @section('content')
  <title>{{ config('app.name', 'Liber') }}</title>
 
  
    <form action="telaDeCriacao.blade.php" method="GET"> 
    <form class="container-fluid">
    <h1 style="text-align: center;" class = "display-2 md-6 p-3 mt-5 mr-5 ml-5 p-3  ml-5">Criação de Sessão</h1>
    <br>
    
   
    
          <div class="form-row">
          <div class="form-group col-md-5 w-25 md-6 ml-5">
          <h3>Nome da Sessão:</h3>
          <input style="border: 1px solid black; font-size: 20px; color:black" type="text" class="form-control">
          </div>
          <div class="ml-5">
          <h3>Imagem da Sessão: </h3>
          <form class="md-form">
            <div class="form-group mx-auto">
             <input style="border: 1px solid black; font-size:20px; width:550px; margin:auto; color:black;" type="file" id="fupload" name="fupload" class="fupload form-control">
          </div>
              
            </div>
          </form>
          </div>
          </div>
          <hr style="border: 2px solid black;">
     
     <form>     
     <h2 style="text-align: center;"class = "display-3 md-6 p-3 mt-5 mr-5 ml-5 p-3  ml-5">Criação de Personagens</h2>
     <br>

    
        <div class="form-row">
        <div class="form-group col-md-5 w-25 md-6 ml-5">
        <h3>Nome do Personagem:</h3>
        <input style="border: 1px solid black; font-size: 20px; color:black" type="text" class="form-control">
        <br>
        <h3>Imagem do Personagem: </h3>
        <div class="form-group">
          <input style="border: 1px solid black; font-size: 20px;color:black " type="file" id="upload" name="fupload" class="fupload form-control  p-1 ">
       </div>
        <br>
        <h5><input type="radio" name="radio"> Personagem exclusivo</h5>
        <h5><input type="radio" name="radio"> Narrador</h5>
        </div>
        <div class= "col-md-5 ml-5"data-spy="scroll">
        <h3>Descrição do Personagem: </h3>
        <div class="overflow-auto"><textarea style="border: 1px solid black; font-size: 20px; height:153px; color:black;" class= "form-control input-lg"  rows="5"></textarea></div>
        </div>
        </div> 
   

    <div class="ml-5">
        <button type="reset" class="btn btn-dark">Limpar</button>
        <button type="submit"class="btn btn-dark ml-2">Adicionar</button>
        
          
    </div>
    </form>

    <form class="container-fluid ml-4">
        <h3 style="text-align: left;"class = "mr-5 mt-5">Lista de Personagens</h3>  
        <div class="form-row">
                    
        <ul style="border: 1px solid black; background-color:black" class="list-group list-group-horizonta-x1 overflow-auto col-md-6">
          <li style="border: 1px solid black;"  class = "list-group-item">Cras justo odio</li>
          <li style="border: 1px solid black;" class = "list-group-item">Dapibus ac facilisis in</li>
          <li style="border: 1px solid black;" class = "list-group-item">Morbi leo risus</li>
          <li style="border: 1px solid black;" class = "list-group-item">Porta ac consectetur ac</li>
          <li style="border: 1px solid black;"  class = "list-group-item">Vestibulum at eros</li>
        </ul>
        
        <div class="form-group ">
          <h3><label for="codigo" class="ml-5">Seu código de acesso para convidados:</label></h3>
          <input style="border: 1px solid black; font-size:20px; color:black;" type="text" class="form-control ml-5 mb-5" id="codigo">
        </div>
       </form>
    </form>
      


      
 
      <script src="node_modules/jquery/dist/jquery.js"></script>
      <script src="node_modules/popper.js/dist/umd/popper.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
      @endsection
     

