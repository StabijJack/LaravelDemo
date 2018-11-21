<form action="{{ route('polymorphicOwnerRight.update', $polymorphicOwnerRight->id) }}"" method="POST">
    @method('PATCH')
    @csrf
    @include('polymorphic.right.allfields')        
    <button type="submit" class="btn btn-primary">Wijziging opslaan</button>
  </form>
