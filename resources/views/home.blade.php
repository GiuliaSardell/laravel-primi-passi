<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="container">
      <div class="row">

        <h1>HOME</h1>

        <ul class="nav">   
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts')}}">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('opportunity')}}">Opportunity</a>
          </li>
        </ul>

      </div>
    </div>

    <main>
      <div class="container">
        <div class="row">
        
          <p>
            These are our articles:
            <ul>
              @foreach ($articles as $article)
                <li>
                  {{$article}}
                </li>
              @endforeach  
            </ul>
          </p>
              
        </div>
      </div>
    </main>

  </header>
</body>
</html>