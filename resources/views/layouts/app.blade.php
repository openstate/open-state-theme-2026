<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
      echo '<meta name="twitter:card" content="summary">', "\r\n  ";
      if (strpos($_SERVER['REQUEST_URI'], 'civicrm/petition/sign') !== false && isset($_GET['sid']) && $_GET['sid'] == '2') {
          echo '<meta property="og:image" content="https://openstate.eu/wp-content/uploads/sites/14/2025/03/Petitie-lobbyregister.webp">';
          echo '<meta property="og:title" content="Petitie: Maak lobby transparant!">' . "\r\n  ";
      } elseif(!is_front_page()) {
          echo '<meta property="og:title" content="' . ltrim(wp_title('', false)) . '">' . "\r\n  ";
          $ogimage = '<meta property="og:image" content="https://openstate.eu/wp-content/themes/open-state-theme/dist/images/logo-open-state-foundation-og.png">';
          if (isset($post_id)) {
            $image = get_the_post_thumbnail_url($post_id);
            if ($image) {
             $ogimage = '<meta property="og:image" content="' . esc_url($image) . '">';
            }
          }
          echo $ogimage;
      } else {
          echo '<meta property="og:image" content="https://openstate.eu/wp-content/themes/open-state-theme/dist/images/logo-open-state-foundation-og.png">';
          echo '<meta property="og:title" content="Open State Foundation">' . "\r\n  ";
      }
    ?>

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
  </body>
</html>
