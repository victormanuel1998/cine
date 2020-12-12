@extends('layouts.app')

@section('content')
<div class="row col-12">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://0701.static.prezi.com/preview/v2/j65wcnic5l34fsdqzf7ozeq5ct6jc3sachvcdoaizecfr3dnitcq_3_0.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text" style="color: black;">Listado de todas las Funciones Disponibles</p>
          <a href="{{ route('functions.index') }}" class="btn btn-primary">Funciones</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://www.foromarketing.com/wp-content/uploads/2017/11/Tarifa-plana-para-ir-al-cine-por-menos-de-10-euros-al-mes.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text" style="color: black;">Salas Disponibles</p>
        <a href="{{ route('rooms.index') }}" class="btn btn-primary">Salas</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScCY_HK2yT3eShg9SbkaEl-Xnlb_5p6b8npg&usqp=CAU" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text" style="color: black;">entradas Disponibles</p>
        <a href="{{ route('entrances.index') }}" class="btn btn-primary">entradas</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://img2.freepng.es/20180306/rte/kisspng-watercolor-painting-film-cinema-vector-popcorn-5a9e8cbc51ac86.3089247015203401563346.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text" style="color: black;">PRODUCTOS</p>
        <a href="{{ route('consumablesindex') }}" class="btn btn-primary">entradas</a>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="http://1.bp.blogspot.com/-7A-0TlFoTYg/Ub3ldZNnQtI/AAAAAAAABM8/jzzbYknpEcM/s1600/descarga+(5).jpg"alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text" style="color: black;">PELICULAS</p>
        <a href="{{ route('movies.index') }}" class="btn btn-primary">peliculas</a>
      </div>
  </div>       
</div>

                                  
@endsection
