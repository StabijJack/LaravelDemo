<a class="btn btn-primary info" href="{{ route('oneToOneLeft.index') }}" role="button">Show All</a>
@if ($oneToOneLeft->id > 0)
    <a class="btn btn-primary info" href="{{ route('oneToOneLeft.show', $oneToOneLeft->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('oneToOneLeft.edit', $oneToOneLeft->id) }}" role=" button"> Edit</a>
    @include('onetoone.onetooneleft.destroy')
@endif