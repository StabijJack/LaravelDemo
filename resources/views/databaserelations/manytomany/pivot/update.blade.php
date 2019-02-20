<form action="{{ route('manyToManyPivot.update', $manyToManyPivot->id) }}"" method="POST">
    @method('PATCH')
    @csrf
    @include('databaserelations.manytomany.pivot.ownerleft')        
    @include('databaserelations.manytomany.pivot.allfields')        
    @include('databaserelations.manytomany.pivot.ownerright')        
    <button type="submit" class="btn btn-primary">wyziging opslaan</button>
  </form>
