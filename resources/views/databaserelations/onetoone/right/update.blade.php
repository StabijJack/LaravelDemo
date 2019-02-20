<form action="{{ route('oneToOneRight.update', $oneToOneRight->id) }}"" method="POST">
    @method('PATCH')
    @csrf
    @include('databaserelations.onetoone.right.allfields')        
    <button type="submit" class="btn btn-primary">wyziging opslaan</button>
  </form>
