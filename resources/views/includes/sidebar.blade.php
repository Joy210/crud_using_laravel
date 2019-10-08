<h2>Recent News</h2>
<hr>
<div class="list-group">
    @foreach ($post as $item)
    <a href="{{url('details/'.$item->id)}}" class="list-group-item list-group-item-action">
        {{$item->title}}
    </a>
    @endforeach
</div>