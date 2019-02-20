<form action="{{ route('oneToOneRight.store') }}" method="POST">
    @csrf
    @include('databaserelations.onetoone.right.allfields')        
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
