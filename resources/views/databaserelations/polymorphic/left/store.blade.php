<form action="{{ route('polymorphicOwnerLeft.store') }}" method="POST">
    @csrf
    @include('databaserelations.polymorphic.left.allfields')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
