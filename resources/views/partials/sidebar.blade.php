<aside class="aside-painel">
  <div class="brand text-center">
    {!! the_custom_logo() !!}
  </div>
  <hr>
  <nav class="nav-primary">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
</aside>
