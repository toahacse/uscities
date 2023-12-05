<button type="{{ $type }}" class="btn btn-sm bg-{{$bg}} float-{{ $float }} ml-1 {{$class}}" id="{{$id}}">
    @if (!empty($icon))
    <i class="fas fa-{{$icon}}"></i>
    @endif
    {{ $title }}
</button>
