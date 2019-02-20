<form action="{{ route('manyToManyOwnerLeft.update', $manyToManyOwnerLeft->id) }}"" method="POST">
    @method('PATCH')
    @csrf
    @include('databaserelations.manytomany.left.allfields')        
    <button type="submit" class="btn btn-primary">Wijziging opslaan</button>
  </form>
