<a class="btn btn-primary info" href="{{ route('polymorphicMember.index') }}" role="button">Show All</a>
<a class="btn btn-primary info" href="{{ route('polymorphicMember.create') }}" role="button"> New</a>
@if ($polymorphicMember->id > 0)
    <a class="btn btn-primary info" href="{{ route('polymorphicMember.show', $polymorphicMember->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('polymorphicMember.edit', $polymorphicMember->id) }}" role=" button"> Edit</a>
    @include('polymorphic.member.destroy')
@endif