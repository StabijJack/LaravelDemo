<form action="{{ route('manyToManyPivot.store') }}" method="POST">
    @csrf
    <input type="hidden" name="origin" value={{ $origin }}>
    @include('databaserelations.manytomany.pivot.ownerleft')        
    @include('databaserelations.manytomany.pivot.allfields')        
    @include('databaserelations.manytomany.pivot.ownerright')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
