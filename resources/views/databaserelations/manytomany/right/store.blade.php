<form action="{{ route('manyToManyOwnerRight.store') }}" method="POST">
    @csrf
    @include('databaserelations.manytomany.right.allfields')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
