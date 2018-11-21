<a class="btn btn-primary info" href="{{ route('polymorphicOwnerLeft.index') }}" role="button">Show All</a>
<a class="btn btn-primary info" href="{{ route('polymorphicOwnerLeft.create') }}" role="button"> New</a>
@if ($polymorphicOwnerLeft->id > 0)
    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerLeft.show', $polymorphicOwnerLeft->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('polymorphicOwnerLeft.edit', $polymorphicOwnerLeft->id) }}" role=" button"> Edit</a>
    @include('polymorphic.left.destroy')
@endif