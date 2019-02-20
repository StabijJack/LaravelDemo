<form action="{{ route('oneToOneLeft.update', $oneToOneLeft->id) }}"" method="POST">
    @method('PATCH')
    @csrf
    @include('databaserelations.onetoone.left.allfields')        
    <button type="submit" class="btn btn-primary">Wijziging opslaan</button>
  </form>
