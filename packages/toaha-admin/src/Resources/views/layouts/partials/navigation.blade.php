<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?= $sidebarHtml ?>
    </ul>
</nav>
@php
    $themeName = Session::get("theme") ?? 'light';
@endphp

@push('js')
<script>
    (function($) {
    $(document).ready(function(){
        let 
            themeName = "{!! $themeName !!}",
            textColor = themeName === 'light' ? "text-light" : "text-white";

        $('.sidebar').find('a[href="'+window.location.href.replace(/^\/|\/$/g, '').split('?')[0]+'"]').addClass('active').addClass(textColor);
        $('.sidebar').find('a[href="'+window.location.href.replace(/^\/|\/$/g, '').split('?')[0]+'"]')
                    .closest('.nav-item-submenu').addClass('nav-item-open');
        $('.sidebar').find('a[href="'+window.location.href.replace(/^\/|\/$/g, '').split('?')[0]+'"]')
                    .closest('.nav-item-submenu').find('ul').show();
    });
})(jQuery)
</script>
@endpush