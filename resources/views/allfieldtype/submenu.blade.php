<a class="btn btn-primary info" href="{{ route('allFieldType.index') }}" role="button">Show All</a>
<a class="btn btn-primary info" href="{{ route('allFieldType.create') }}" role="button"> New</a>
@if ($allFieldType->id > 0)
    <a class="btn btn-primary info" href="{{ route('allFieldType.show', $allFieldType->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('allFieldType.edit', $allFieldType->id) }}" role=" button"> Edit</a>

    <form action="{{ route('allFieldType.destroy', $allFieldType->id) }}" method="POST" style ='display:inline;'>
        @method('DELETE')
        @csrf
        <button class="btn btn-primary">Delete</button>
    </form>
@endif