
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
    
  
      
    

         {{$slot}}

         <div class="flex w-full justify-center gap-4  ">
            <div>
              <a href="{{ route('developer') }}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-8">developer</button></a>
            </div>

                    <div>
                      <a href="{{ route('soccorritore') }}"><button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mt-8">soccorritore</button></a>
                    </div>

         
         </div>
      
         
       
        
    
  
</body>
</html>