
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bazar CHERISH</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>
<body>
    

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded ">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
          <a href="https://www.cherish.mx" class="flex items-center">
              <img src="https://www.cherish.mx/wp-content/uploads/2021/11/logo.png.webp" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
          </a>
          <button id="movil-menu" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white ">
              <li>
                <a href="https://www.cherish.mx/c/juguetes-sexuales" class="block py-2 pr-4 pl-3 text-gray-900 rounded md:bg-transparent md:text-blue-700 md:p-0 " aria-current="page">Ir a la tienda</a>
              </li>
            
              
            </ul>
          </div>
        </div>
      </nav>



      <!--Form para bazar-->
      <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

            
            @if(session()->has('success'))

            <div class="max-w-sm w-full lg:max-w-full lg:flex">
              <div class="border-r border-b border-l text-green-700 border-white  lg:border-t lg:border-white bg-green-100 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                  <div class="text-gray-900 font-bold text-xl mb-2">¡Felicidades! Te ganaste un regalo.</div>
                  <p class="text-gray-700 text-base"> {{ session()->get('success') }} </p>
                </div>
              </div>
            </div>
            @endif
     
            @if(session()->has('message'))
            <div class="p-4 mb-4 text-sm text-gray-700 bg-yellow-400 rounded-lg" role="alert">
                {{ session()->get('message') }}
            </div>
            @endif
  
 


        



        <h2 class="text-base bg-[#ffffff] text-[#021d49] ">Suscríbete y podrás ganarte un regalo. ¡Cada 50 personas habrá alguien premiado!</h2>

        <div class="w-full max-w-100">
            <form method="post" action="{{ route('store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" id="store-client" name="store-client"  >
              @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="firstname">
                Nombre(s)
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Tu nombre">
                @error('name')
                <br>
                <small>*{{ $message }}</small>
                <br>
                @enderror
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">
                Apellido(s)
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastname" name="lastname" type="text" placeholder="Tu apellido">
                @error('lastname')
                <br>
                <small>*{{ $message }}</small>
                <br>
                @enderror
              </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="tucorreo@correo.com">
                @error('email')
                <br>
                <small>*{{ $message }}</small>
                <br>
                @enderror
              </div>
           
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Participar
                </button>
            </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
            &copy;MatchInn Venture S.A.P.I. de C.V. 2022.
            </p>
        </div>
      </div>

</body>
</html>