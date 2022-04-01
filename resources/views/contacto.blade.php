<h1>contacto {{ $nombre }}</h1>
<hr>
<h2>Edad: {{ $edad }}</h2>

{{-- Comentario --}} 
<?php /* Comentario */ ?>
<?php // Comentario  ?>



@if(is_null($edad))
   <p>No existe la variable edad</p> 
@else
    Si existe edad y es {{ $edad }}
@endif

<hr>

@for($i=1; $i <= 10; $i++)
    {{ $i }} <br>
@endfor

<hr>

<?php $a=1; ?>

@while($a<=7)
    {{ $a }}
    <?php $a++; ?>
@endwhile