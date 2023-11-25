
<!--questo è il layout principale in cui richiamerò i componenti-->


<!<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/javascript.js')
</head>
<body class="bg-slate-900">
    
   

    {{$slot}}
    
  
</body>
</html>