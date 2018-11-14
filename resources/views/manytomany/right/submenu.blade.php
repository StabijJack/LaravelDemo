<a class="btn btn-primary info" href="{{ route('manyToManyOwnerRight.index') }}" role="button">Show All</a>
<a class="btn btn-primary info" href="{{ route('manyToManyOwnerRight.create') }}" role="button">New</a>
@if ($manyToManyOwnerRight->id > 0)
    <a class="btn btn-primary info" href="{{ route('manyToManyOwnerRight.show', $manyToManyOwnerRight->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('manyToManyOwnerRight.edit', $manyToManyOwnerRight->id) }}" role=" button"> Edit</a>
    @include('manytomany.right.destroy')
@endif