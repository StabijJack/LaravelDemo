<form action="{{ route('oneToOneRight.store') }}" method="POST">
    @csrf
    @include('onetoone.right.allfields')        
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
