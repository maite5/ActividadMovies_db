@extends('layouts.plantilla')
    @section('fqa')
    "\css\basico.css"
@endsection

 <section id="seccion title, Panel de peliculas">  
  

    <br>
    @section('h1', 'eliminar Peliculas')

    @section('main') 


        <div class="row">
            
        <!--   <form class=" " action="/pais/borrar" method="POST">  -->
                
           <div class="col-6 offset-3"> 
              
            <!--    <div class="card-body">  -->
               
                    <h4 class="ctitle">{{ $peliculas->title }}</h4>
                    <ul>
                        <li><strong>Rating:</strong> {{ $peliculas->rating }}</li>
                        <li><strong>Awards:</strong> {{ $peliculas->awards}}</li>
                        <li><strong>Fecha de extreno:</strong> {{ $peliculas->release_date}}</li>

                    </ul>
                </div>  
                <a href="/pais/borrar/{{ $peliculas->id}}" class="text-danger"><small>Eliminar pelicula</small></a>
            </div>          
        
        </div>  
    </div>
</section>

</section>
  @endsection   

</body>  
</html> 