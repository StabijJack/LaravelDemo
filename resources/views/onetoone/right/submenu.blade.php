    <a class="btn btn-primary info" href="{{ route('oneToOneRight.show', $oneToOneRight->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('oneToOneRight.edit', $oneToOneRight->id) }}" role=" button"> Edit</a>
    @include('onetoone.right.destroy')
