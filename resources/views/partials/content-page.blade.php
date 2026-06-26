<?php // Page/pagina ?>

@php(the_content())
@include('partials.action-boxes')

@if ($pagination())
  <nav class="page-nav" aria-label="Page">
    {!! $pagination !!}
  </nav>
@endif
