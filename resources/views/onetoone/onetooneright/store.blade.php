<form action="{{ route('oneToOneRight.store') }}" method="POST">
    @csrf
    @include('onetoone.onetooneright.allfields')        
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
