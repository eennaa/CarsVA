<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        

        <title>Cars</title>

    </head>
    <body>
       @foreach($cars as $car)
          <ul>
            <li>
                {{ $car->title}} -  {{ $car->producer}} -  {{ $car->number_of_doors}}
            </li>            
          </ul>
        @endforeach      
      
    </body>
</html>
