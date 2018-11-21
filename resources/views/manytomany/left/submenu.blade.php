    <a class="btn btn-primary info" href="{{ route('manyToManyOwnerLeft.show', $manyToManyOwnerLeft->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('manyToManyOwnerLeft.edit', $manyToManyOwnerLeft->id) }}" role=" button"> Edit</a>
    @include('manytomany.left.destroy')
