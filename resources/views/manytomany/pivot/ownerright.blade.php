  <div class="form-group">
    <label for="manyToManyOwnerRight">manyToManyOwnerRight</label>
      <select class="form-control" name="many_to_many_owner_right_id" id="manyToManyOwnerRight" aria-describedby="manyToManyOwnerRighthelp">
        @foreach ($manyToManyOwnerRights as $manyToManyOwnerRight)
          @if($manyToManyPivot->table == null)
            <option value="{{ $manyToManyOwnerRight->id }}" >{{ $manyToManyOwnerRight->course }}</option>
          @else 
            <option value="{{ $manyToManyOwnerRight->id }}" @if ($manyToManyPivot->manyToManyOwnerRight->id == $manyToManyOwnerRight->id) selected @endif >{{ $manyToManyOwnerRight->course }}</option>
          @endif        
        @endforeach
      </select>
  </div>
  <small id="manyToManyOwnerRighthelp" class="text-muted">manyToManyOwnerRight</small>
