<a class="btn btn-primary info" href="{{ route('oneToOneRight.index') }}" role="button">Show All</a>
<a class="btn btn-primary info" href="{{ route('oneToOneRight.create') }}" role="button"> New</a>
@if ($oneToOneRight->id > 0)
    <a class="btn btn-primary info" href="{{ route('oneToOneRight.show', $oneToOneRight->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('oneToOneRight.edit', $oneToOneRight->id) }}" role=" button"> Edit</a>
    @include('onetoone.onetooneright.destroy')
@endif