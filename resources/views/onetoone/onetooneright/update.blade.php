<form action="{{ route('oneToOneRight.update', $oneToOneRight->id) }}"" method="POST">
    @method('PATCH')
    @csrf
    @include('onetoone.onetooneright.allfields')        
    <button type="submit" class="btn btn-primary">wyziging opslaan</button>
  </form>
