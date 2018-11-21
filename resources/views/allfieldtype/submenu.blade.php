    <a class="btn btn-primary info" href="{{ route('allFieldType.show', $allFieldType->id) }}" role="button"> Show</a>
    <a class="btn btn-primary warning" href="{{ route('allFieldType.edit', $allFieldType->id) }}" role=" button"> Edit</a>
    @include('allfieldtype.destroy')