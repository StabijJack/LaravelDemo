<form action="{{ route('oneToOneLeft.update', $oneToOneLeft->id) }}"" method="POST">
    @method('PATCH')
    @csrf
    @include('onetoone.onetooneleft.allfields')        
    <button type="submit" class="btn btn-primary">Wijziging opslaan</button>
  </form>
