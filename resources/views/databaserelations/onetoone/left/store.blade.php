<form action="{{ route('onetoonestore', ['id'=>$oneToOneRight->id]) }}" method="POST">
    @csrf
    @include('databaserelations.onetoone.left.allfields')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
