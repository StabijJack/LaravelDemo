    <a class="btn btn-primary info" href="{{ route('manyToManyOwnerRight.show', $manyToManyOwnerRight->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('manyToManyOwnerRight.edit', $manyToManyOwnerRight->id) }}" role=" button"> Edit</a>
    @include('databaserelations.manytomany.right.destroy')
