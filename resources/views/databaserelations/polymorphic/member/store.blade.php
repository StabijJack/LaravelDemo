<form action="{{ route('polymorphicMember.store') }}" method="POST">
    @csrf
    @include('databaserelations.polymorphic.member.ownerleft')        
    @include('databaserelations.polymorphic.member.allfields')        
    @include('databaserelations.polymorphic.member.ownerright')        
    <button type="submit" class="btn btn-primary">Nieuwe opslaan</button>
</form>
