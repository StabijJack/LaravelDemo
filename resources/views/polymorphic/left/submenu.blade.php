    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerLeft.show', $polymorphicOwnerLeft->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('polymorphicOwnerLeft.edit', $polymorphicOwnerLeft->id) }}" role=" button"> Edit</a>
    @include('polymorphic.left.destroy')