<form action="{{ route('manyToManyOwnerRight.destroy', $manyToManyOwnerRight->id) }}" method="POST" style ='display:inline;'>
    @method('DELETE')
    @csrf
    <button class="btn btn-primary">Delete</button>
</form>
