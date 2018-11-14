<form action="{{ route('manyToManyOwnerLeft.destroy', $manyToManyOwnerLeft->id) }}" method="POST" style ='display:inline;'>
    @method('DELETE')
    @csrf
    <button class="btn btn-primary">Delete</button>
</form>
