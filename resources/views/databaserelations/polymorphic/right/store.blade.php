<form action="{{ route('polymorphicOwnerRight.store') }}" method="POST">
    @csrf
    @include('databaserelations.polymorphic.right.allfields')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
