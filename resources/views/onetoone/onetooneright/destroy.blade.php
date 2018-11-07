<form action="{{ route('oneToOneRight.destroy', $oneToOneRight->id) }}" method="POST" style ='display:inline;'>
    @method('DELETE')
    @csrf
    <button class="btn btn-primary">Delete</button>
</form>
