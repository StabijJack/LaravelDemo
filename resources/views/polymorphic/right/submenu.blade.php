    <a class="btn btn-primary info" href="{{ route('polymorphicOwnerRight.show', $polymorphicOwnerRight->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('polymorphicOwnerRight.edit', $polymorphicOwnerRight->id) }}" role=" button"> Edit</a>
    @include('polymorphic.right.destroy')
