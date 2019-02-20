    <a class="btn btn-primary info" href="{{ route('manyToManyPivot.show', $manyToManyPivot->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('manyToManyPivot.edit', $manyToManyPivot->id) }}" role=" button"> Edit</a>
    @include('databaserelations.manytomany.pivot.destroy')
