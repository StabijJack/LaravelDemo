<form action="{{ route('manyToManyOwnerRight.update', $manyToManyOwnerRight->id) }}"" method="POST">
    @method('PATCH')
    @csrf
    @include('databaserelations.manytomany.right.allfields')        
    <button type="submit" class="btn btn-primary">Wijziging opslaan</button>
  </form>
