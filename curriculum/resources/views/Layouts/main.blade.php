
<!--questo è il layout principale in cui richiamerò i componenti-->


<!<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/javascript.js')
</head>
<body class="bg-black">
    
  <x-header/>
      
    <a href="{{ route('developer') }}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-8">developer</button></a>

    <a href="{{ route('soccorritore') }}"><button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mt-8">soccorritore</button></a>
  
  <a href= >soccorritore</a> 

         {{$slot}}
      
        
    
  
</body>
</html>