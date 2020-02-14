<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clothes</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- JS -->
    <script src="{{ asset('/js/app.js') }}"></script>
</head>
<body>
    <div class="container">
     <div class="row">
         <div class="col">
             <h1>Clothes List</h1>
         </div>
     </div>
    </div>
    <div class="container">
        <div class="row">
            
            @forelse ($products as $product )
                <div class="col-4">
                    
                        <div class="card">
                            <img class="card-img-top" src="{{ asset($product->image) }}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">{{ $product->type}}</h4>
                                <ul>
                                    <li>{{ $product->color}}</li>
                                    <li>{{ $product->size}}</li>
                                </ul>
                            </div>
                    
                </div>
                </div>
            @empty 
                <h1>NO RESULT!</h1>

            @endforelse
                    
             @forelse ($collection as $item)
                 
             
                 
             @endforelse
        </div>
    </div>

    
</body>
</html>