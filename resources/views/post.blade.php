<x-layout>
  <x-slot:title>{{ $title }}</x-slot>
  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
              <a href="/posts" class="font-medium text-xs text-blue-600 hover:underline">&laquo; Back to all posts</a>  
              <address class="flex items-center my-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16" src="{{ asset('img/sman6.png') }}" alt="{{ $post->author->name }}">
                        <div>
                            <a href="/authors/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400 mb-1">{{ $post->author->position }}</p>
                            <p class="text-base text-gray-500 dark:text-gray-400 mb-1"><time pubdate datetime="2022-02-08" title="{{ $post->created_at->toDayDateTimeString() }}">{{ $post->created_at->toDayDateTimeString() }}</p>
                            <a href="/posts?category={{ $post->category->slug }}">
                              <div class="flex justify-between items-center mb-5 text-gray-500">
                                <span class="bg-{{ $post->category->color }}-100 text-primary-700 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    {{ $post->category->name }}
                                </span>
                            </a> 
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
            </header>
            <p>{{ $post->body }}</p>
            <h4>Code example</h4>
            <p>Dibawah ini adalah contoh kode nya sebagai berikut :</p>
            <pre><code class="language-python"></code>{{ $post->code }}</pre>

  <!-- Input for the user to try Python code -->
            <div class="mt-8">
              <h3 class="text-xl font-semibold">Mencoba kodenya :</h3>
              <p class="text-sm text-gray-500">Ketik kode Python di bawah ini dan klik tombol "Run Code" untuk melihat hasilnya.</p>
              <label for="python-code" class="block mt-4 text-sm font-medium text-gray-700">Python Code:</label>
              <textarea id="python-code" class="w-full p-4 bg-gray-50 rounded-md border border-gray-300" rows="6">{{ $post->code }}</textarea>
              <button onclick="runPython()" class="px-4 py-2 bg-blue-600 text-white rounded-md">Run Code</button>
              
              <h3 class="mt-2 text-xl font-semibold">Output:</h3>
              <pre id="output" class="p-4 bg-gray-100 rounded-md"></pre>
              <p class="text-yellow-300 text-sm">Note: Ini merupakan framework Skulpt nya terbatas seperti menggunakan print serta operator aritmatika saja.</p>
            </div>

            <div class="mt-6">
              <h3 class="mt-2 text-xl font-semibold">Mencoba run kodenya secara online:</h3>
              <p class="text-sm text-gray-500">Klik link Programmiz di bawah ini:</p>
              <p class="text-sm text-gray-500">Hanya berlaku pada struktur data, functions, dll.</p>
              <a href="https://www.programiz.com/python-programming/online-compiler/" class="text-blue-600 hover:underline">Python Compiler</a>
            </div>
          </article>
    </div>
  </main>
  <!-- Skulpt Integration -->
  <script src="https://cdn.jsdelivr.net/npm/skulpt@1.2.0/dist/skulpt.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/skulpt@1.2.0/dist/skulpt-stdlib.js"></script>
  <script>
    function outf(text) {
      var outputArea = document.getElementById("output");
      outputArea.innerHTML += text;
    }
    
    function runPython() {
      var prog = document.getElementById("python-code").value;
      var outputArea = document.getElementById("output");
      outputArea.innerHTML = ''; // Clear previous output
      
      Sk.configure({ output: outf, read: builtinRead });
      Sk.misceval.asyncToPromise(function() {
          return Sk.importMainWithBody("<stdin>", false, prog, true);
      }).catch(function(err) {
          outputArea.innerHTML = err.toString();
      });
    }
    
    function builtinRead(x) {
      if (Sk.builtinFiles === undefined || Sk.builtinFiles["files"][x] === undefined) {
          throw "File not found: '" + x + "'";
      }
      return Sk.builtinFiles["files"][x];
    }
  </script>
</x-layout>