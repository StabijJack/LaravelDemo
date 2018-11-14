<form action="{{ route('manyToManyPivot.update', $manyToManyPivot->id) }}"" method="POST">
    @method('PATCH')
    @csrf
    @include('manytomany.pivot.allfields')        
    <button type="submit" class="btn btn-primary">wyziging opslaan</button>
  </form>
