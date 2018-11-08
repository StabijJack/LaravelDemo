<a class="btn btn-primary info" href="{{ route('oneToManyOwner.index') }}" role="button">Show All</a>
@if ($oneToManyOwner->id > 0)
    <a class="btn btn-primary info" href="{{ route('oneToManyOwner.show', $oneToManyOwner->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('oneToManyOwner.edit', $oneToManyOwner->id) }}" role=" button"> Edit</a>
    @include('onetomany.owner.destroy')
@endif