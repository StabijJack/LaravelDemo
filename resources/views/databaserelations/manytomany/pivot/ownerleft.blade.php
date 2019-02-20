<div class="form-group">
  <label for="manyToManyOwnerLeft">manyToManyOwnerLeft</label>
      <select class="form-control" name="many_to_many_owner_left_id" id="manyToManyOwnerLeft" aria-describedby="manyToManyOwnerLefthelp">
        @foreach ($manyToManyOwnerLefts as $manyToManyOwnerLeft)
          @if($manyToManyPivot->id == 0)
            <option value="{{ $manyToManyOwnerLeft->id }}" >{{ $manyToManyOwnerLeft->name }}</option>
          @else
            <option value="{{ $manyToManyOwnerLeft->id }}" @if ($manyToManyPivot->manyToManyOwnerLeft ->id == $manyToManyOwnerLeft->id) selected @endif >{{ $manyToManyOwnerLeft->name }}</option>
          @endif 
        @endforeach
      </select>
  </div>
  <small id="manyToManyOwnerLefthelp" class="text-muted">manyToManyOwnerLeft</small>
  