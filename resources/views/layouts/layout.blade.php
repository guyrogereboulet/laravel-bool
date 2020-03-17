     @include("layouts.partials._header")
      {{-- header --}}
      <header>
        @yield("header")
      </header>
      {{-- /header --}}

      {{-- main --}}
      <main>
       @yield("main")
      </main>
      {{-- /main --}}



      {{-- footer --}}
      <footer>
       @yield("footer")
      </footer>
      {{-- /footer --}}
      @yield("scripts")
      @include("layouts.partials._footer")
