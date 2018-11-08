<a class="btn btn-primary info" href="{{ route('oneToManyMember.index') }}" role="button">Show All</a>
@if ($oneToManyMember->id > 0)
    <a class="btn btn-primary info" href="{{ route('oneToManyMember.show', $oneToManyMember->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('oneToManyMember.edit', $oneToManyMember->id) }}" role=" button"> Edit</a>
    @include('onetomany.member.destroy')
@endif