<form action="{{ route('onetoonestore', ['id'=>$oneToOneRight->id]) }}" method="POST">
    @csrf
    @include('onetoone.onetooneleft.allfields')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
