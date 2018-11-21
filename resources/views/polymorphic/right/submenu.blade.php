<a class="btn btn-primary info" href="{{ route('polymorphicOwnerRight.index') }}" role="button">Show All</a>
<a class="btn btn-primary info" href="{{ route('polymorphicOwnerRight.create') }}" role="button"> New</a>
@if ($polymorphicOwnerRight->id > 0)
    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerRight.show', $polymorphicOwnerRight->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('polymorphicOwnerRight.edit', $polymorphicOwnerRight->id) }}" role=" button"> Edit</a>
    @include('polymorphic.right.destroy')
@endif