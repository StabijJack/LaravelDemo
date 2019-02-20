<div class="form-group">
  <label for="bigInteger">bigInteger</label>
  <input type="number" name="bigInteger" id="bigInteger" class="form-control" value="{{ $allFieldType->bigInteger }}" aria-describedby="bigIntegerhelp">
  <small id="bigIntegerhelp" class="text-muted">bigInteger</small>
</div>
<div class="form-group">
  <label for="binary">binary</label>
  <input type="text" name="" id="binary" class="form-control" value="{{ $allFieldType->binary }}" aria-describedby="binaryhelp">
  <small id="binaryhelp" class="text-muted">binary</small>
</div>
<div class="form-group">
  <label for="boolean">boolean</label>
  <input type="text" name="boolean" id="boolean" class="form-control" value="{{ $allFieldType->boolean }}" aria-describedby="boolean">
  <small id="boolean" class="text-muted">boolean</small>
</div>
<div class="form-group">
  <label for="char">char</label>
  <input type="text" name="char" id="char" class="form-control" value="{{ $allFieldType->char}}" aria-describedby="charhelp">
  <small id="charhelp" class="text-muted">char</small>
</div>
<div class="form-group">
  <label for="date">date</label>
  <input type="date" name="date" id="date" class="form-control" value="{{ $allFieldType->date}}" aria-describedby="datehelp">
  <small id="datehelp" class="text-muted">date</small>
</div>
<div class="form-group">
  <label for="dateTimeTz">dateTimeTz</label>
  <input type="datetime" name="dateTimeTz" id="dateTimeTz" class="form-control" value="{{ $allFieldType->dateTimeTz }}" aria-describedby="dateTimeTzhelp">
  <small id="dateTimeTzhelp" class="text-muted">dateTimeTz</small>
</div>
<div class="form-group">
  <label for="decimal">decimal</label>
  <input type="number" name="decimal" id="decimal" class="form-control" value="{{ $allFieldType->decimal }}" aria-describedby="decimalhelp">
  <small id="decimalhelp" class="text-muted">decimal</small>
</div>
<div class="form-group">
  <label for="double">double</label>
  <input type="number" name="double" id="double" class="form-control" value="{{ $allFieldType->double }}" aria-describedby="doublehelp">
  <small id="doublehelp" class="text-muted">double</small>
</div>
<div class="form-group">
  <label for="enum">enum</label>
    <select class="form-control" name="enum" id="enum" aria-describedby="enumhelp">
      @foreach (getEnumValues('all_field_types','enum') as $enum)
          <option value="{{ $enum }}" 
            @if ($enum == $allFieldType->enum) selected @endif
          >{{ $enum }}</option>
      @endforeach
    </select>
  <small id="enumhelp" class="text-muted">enum easy of hard</small>
</div>
<div class="form-group">
  <label for="float">float</label>
  <input type="number" name="float" id="float" class="form-control" value="{{ $allFieldType->float }}" aria-describedby="floathelp">
  <small id="floathelp" class="text-muted">float</small>
</div>
<div class="form-group">
  <label for="integer">integer</label>
  <input type="number" name="integer" id="integer" class="form-control" value="{{ $allFieldType->integer }}" aria-describedby="integerhelp">
  <small id="integerhelp" class="text-muted">integer</small>
</div>
<div class="form-group">
  <label for="ipAddress">ipAddress</label>
  <input type="text" name="ipAddress" id="ipAddress" class="form-control" value="{{ $allFieldType->ipAddress }}" aria-describedby="ipAddresshelp">
  <small id="ipAddresshelp" class="text-muted">ipAddress</small>
</div>
<div class="form-group">
  <label for="json">json</label>
  <textarea name="json" id="json" class="form-control" aria-describedby="jsonhelp">
      {{ $allFieldType->json }}
  </textarea>
  <small id="jsonhelp" class="text-muted">json</small>
</div>
<div class="form-group">
    <label for="longText">longText</label>
    <textarea name="longText" id="longText" class="form-control" aria-describedby="longTexthelp">
        {{ $allFieldType->longText }}
    </textarea>
    <small id="longTexthelp" class="text-muted">longText</small>
  </div>
  