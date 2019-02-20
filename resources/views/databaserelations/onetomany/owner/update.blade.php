<form action="{{ route('oneToManyOwner.update', $oneToManyOwner->id) }}"" method="POST">
    @method('PATCH')
    @csrf
    @include('databaserelations.onetomany.owner.allfields')        
    <button type="submit" class="btn btn-primary">Wijziging opslaan</button>
  </form>
