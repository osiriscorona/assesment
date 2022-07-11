<ul class='list-decimal'>
    @foreach($childs as $child)
        <li>
            {{ $child->title }}
            @if(count($child->childs) > 0)
                @include('entries.childs', ['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
