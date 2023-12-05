<span>
    <form action="{{$url}}" method="post">
        @csrf
        <button id="{{ $id }}"
            class="{{ $class }} btn btn-outline bg-danger btn-icon text-danger border-danger btn-sm border-2 rounded-round legitRipple mr-1" onclick="return confirm('Are You Sure!')" data-popup="tooltip" title="{{ $tooltip }}" data-original-title="{{ $tooltip }}">
            <i class="fas fa-{{ $icon }}"></i>
            {{ $title }}
        </button>
    </form>
</span>