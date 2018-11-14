<form action="{{ route('manyToManyPivot.store') }}" method="POST">
    @csrf
    <input type="hidden" name="origin" value={{ $origin }}>
    @include('manytomany.pivot.ownerleft')        
    @include('manytomany.pivot.allfields')        
    @include('manytomany.pivot.ownerright')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
