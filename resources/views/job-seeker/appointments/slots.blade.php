@foreach ($avaialbleSlots as $slot)
<div class="col-lg-2">
    <div class="mb-3">
        <div class="form-check slot-label">
            <label class="form-check-label" for="slot_{{$slot['id']}}">
                {{$slot['date']}}
                <span>from {{$slot['time_from']}} to {{$slot['time_to']}}</span>
            </label>
            <input type="radio" name="slot_id" id="slot_{{$slot['id']}}" value="{{$slot['id']}}"
                class=" form-check-input" {{ old('slot_id')==$slot['id'] ? 'checked' : null}}>
        </div>
    </div>
</div>
@endforeach