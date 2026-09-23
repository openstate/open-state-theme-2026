<!doctype html>
<html @php(language_attributes())>
  <head>

    <!--
      _@####@_                                 @####@,                               *######@@                               ^8@                @@
     @@^     8@   _ ___     ___    _ ___      @@     8 _@@__   __    _@__   ___       @8     8  ___   ___  ___   _ ___     ___@@    ___   _@@__  _    ___    ______
     @8      @@@^88^^^8@ _@8' ^@_'8@***8@      8@@__   '@8'' /^'^8@ '8@'' @#^ ^8@     @@,___  @#^ ^@@  @@   8@ '8@***8@  _@8''8@  =^'^8@  '@8'' 8@  @#^ ^@@ ^@@***@@
     @@      _@= @8    @ @8*####\ @@    @        '^8@@  @@   _@@@@@  @@   @^*###8     @8  '^ @@    @@= @@   @@  @@    @  @8   @@  __@@@@   @@   @@ @@     @@ @@   @@
     8@_     @8  @8   _@ 8@_   _. @@    @     @_    _@  @@  =@   @@  @@   @@    _     @8      @@   @@  @@   @@  @@    @  @@   @@  @8   @   @@   @@  @@   @@  @@   @@
       8#@@>~    @@#@#8   ^#8@#^ .##<  ###    ^8#@@#~   8#@# 8@@#@##  #@#^ 88@#8     >#8<      8#@#~   ^#@@###=.#8# .#8#. 8@@#@## 88@#^##= 8@@#.#8#  8#@#~  #8#. >##
                 @@
                ^^^^

    Benieuwd naar de broncode? Wij houden van open werken, dus de deze website is open source: https://github.com/openstate/open-state-theme-2026/

    Bekijk al onze andere open source repositories op https://github.com/openstate/
    -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
      if ((strpos($_SERVER['REQUEST_URI'], 'civicrm/petition/sign') !== false && isset($_GET['sid']) && $_GET['sid'] == '2') || strpos($_SERVER['REQUEST_URI'], 'petitie-maak-lobby-transparant') !== false) {
          echo '<meta property="og:image" content="https://openstate.eu/wp-content/uploads/sites/14/2025/03/Petitie-lobbyregister.webp">' . "\n";
          echo '    <meta property="og:title" content="Petitie: Maak lobby transparant!">' . "\n";
      } elseif(!is_front_page()) {
          echo '<meta property="og:title" content="' . ltrim(wp_title('', false)) . '">' . "\n";
          $ogimage = '    <meta property="og:image" content="' . Vite::asset('resources/images/open_state_foundation_open_graph.png') . '">' . "\n";
          if (isset($post)) {
            $image = get_the_post_thumbnail_url($post->ID);
            if ($image) {
             $ogimage = '    <meta property="og:image" content="' . esc_url($image) . '">' . "\n";
            }
          }
          echo $ogimage;
      } else {
          echo '<meta property="og:image" content="' . Vite::asset('resources/images/open_state_foundation_open_graph.png') . '">' . "\n";
          echo '    <meta property="og:title" content="Open State Foundation - Zonder transparantie geen democratie">' . "\n";
      }
    ?>
    <meta property="og:site_name" content="Open State Foundation">

    @php(do_action('get_header'))
    @php(wp_head())

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body @php(body_class(array('text-purple-800')))>
    @php(wp_body_open())

    <div id="app" class="flex flex-col min-h-screen">
      <a class="sr-only focus:not-sr-only" href="#main">
        Ga naar inhoud
      </a>

      @include('sections.header')

      <main id="main" class="main">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif

      @include('sections.footer')
      <div class="flex-1 bg-purple-800"></div>
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
