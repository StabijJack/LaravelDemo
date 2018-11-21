<form action="{{ route('polymorphicOwnerRight.destroy', $polymorphicOwnerRight->id) }}" method="POST" style ='display:inline;'>
    @method('DELETE')
    @csrf
    <button class="btn btn-primary">Delete</button>
</form>
