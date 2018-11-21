<form action="{{ route('oneToManyOwner.store') }}" method="POST">
    @csrf
    @include('onetomany.owner.allfields')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
