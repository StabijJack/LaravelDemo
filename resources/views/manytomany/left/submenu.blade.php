<a class="btn btn-primary info" href="{{ route('manyToManyOwnerLeft.index') }}" role="button">Show All</a>
<a class="btn btn-primary info" href="{{ route('manyToManyOwnerLeft.create') }}" role="button">New</a>
@if ($manyToManyOwnerLeft->id > 0)
    <a class="btn btn-primary info" href="{{ route('manyToManyOwnerLeft.show', $manyToManyOwnerLeft->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('manyToManyOwnerLeft.edit', $manyToManyOwnerLeft->id) }}" role=" button"> Edit</a>
    @include('manytomany.left.destroy')
@endif