<a class="btn btn-primary info" href="{{ route('oneToOneLeft.index') }}" role="button">Show All</a>
<a class="btn btn-primary info" href="{{ route('oneToOneLeft.create') }}" role="button"> New</a>
@if ($oneToOneLeft->id > 0)
    <a class="btn btn-primary info" href="{{ route('oneToOneLeft.show', $oneToOneLeft->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('oneToOneLeft.edit', $oneToOneLeft->id) }}" role=" button"> Edit</a>

    <form action="{{ route('oneToOneLeft.destroy', $oneToOneLeft->id) }}" method="POST" style ='display:inline;'>
        @method('DELETE')
        @csrf
        <button class="btn btn-primary">Delete</button>
    </form>
@endif