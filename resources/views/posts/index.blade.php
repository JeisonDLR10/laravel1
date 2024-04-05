<x-layouts.app title="Blog">

    

</x-layouts.app>

  <header class="px-6 py-4 space-y-2 text-center">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Blog</h1>
    <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="{{route('posts.create')}}" >Crear Nuevo Post</a>
  </header>
    

  <main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">
    @foreach ($posts as $post)
        <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">

          <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">
            <a href="{{route('posts.show', $post) }}">
          {{$post->titulo}} </a>
          </h2>
          <div class="flex justify-between">
            <h4><a  href="{{route('posts.edit', $post) }}"  class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a></h4>

            <form >
              @csrf
              @method('delete')
              <button type="submit" class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
          </form>

          </div>

        </div>
      @endforeach
  </main>


      
  
    




  

  


    
 
