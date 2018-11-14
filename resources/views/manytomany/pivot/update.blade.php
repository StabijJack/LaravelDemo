<form action="{{ route('manyToManyPivot.update', $manyToManyPivot->id) }}"" method="POST">
    @method('PATCH')
    @csrf
    @include('manytomany.pivot.ownerleft')        
    @include('manytomany.pivot.allfields')        
    @include('manytomany.pivot.ownerright')        
    <button type="submit" class="btn btn-primary">wyziging opslaan</button>
  </form>
