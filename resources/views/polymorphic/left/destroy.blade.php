<form action="{{ route('polymorphicOwnerLeft.destroy', $polymorphicOwnerLeft->id) }}" method="POST" style ='display:inline;'>
    @method('DELETE')
    @csrf
    <button class="btn btn-primary">Delete</button>
</form>
