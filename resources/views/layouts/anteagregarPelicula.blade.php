@section agregar 
<div class="card bg-light col-md-7 mt-5 p-3 mx-auto">
    <form action="/agregarPelicula" method="post"> 
        {{csrf_field}} 

        <div class="form-group">
            <label for="title">Titulo:</label>
            <input type="text" class="form-control" name="title" >
        </div>
        <div class="form-group">
        <label for="rating">Rating:</label>
        <input type="text" name="rating" >
        </div>
        </div>

        <div class="form-group">
        <label>Awards:</label>
        <input type="text" name="awards" > 
        </div>

        <div class="form-group">
        <label>realiase_date</label>
        <input type="date" name="realease_date" >
        </div>
        

        <button type="submit" class="btn btn-dark px-4" value="agregarPelicula">
            <i class="far fa-plus-square fa-lg mr-2"></i>
            Agregar Pelicula
        </button>



    </form>
    </div>

@endsection