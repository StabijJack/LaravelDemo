<a class="btn btn-primary info" href="{{ route('manyToManyPivot.index') }}" role="button">Show All</a>
<a class="btn btn-primary info" href="{{ route('manyToManyPivot.create') }}" role="button">New</a>
@if ($manyToManyPivot->id > 0)
    <a class="btn btn-primary info" href="{{ route('manyToManyPivot.show', $manyToManyPivot->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('manyToManyPivot.edit', $manyToManyPivot->id) }}" role=" button"> Edit</a>
    @include('manytomany.pivot.destroy')
@endif