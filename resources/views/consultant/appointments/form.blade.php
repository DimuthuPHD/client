@php
$model_job_seeker_id = isset($model['appointment']['job_seeker_id']) ?
$model['appointment']['job_seeker_id'] : null;
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="job_seekr_id">Job Seeker</label>
            <select name="job_seeker_id" id="" class="form-control">
                <option value="">Select a Job Seeker</option>
                @foreach ($jobSeekers as $jobSeeker)
                <option value="{{$jobSeeker['id']}}" {{old('job_deeker_id', $model_job_seeker_id)==$jobSeeker['id']
                    ? 'selected' : null}}>
                    {{$jobSeeker['full_name']}} -
                    {{$jobSeeker['email']}} - ({{$jobSeeker['address']}})</option>
                @endforeach
            </select>
            <span class="text-danger">{{$errors->first('job_seeker_id')}}</span>
        </div>
    </div>
    <!--end col-->
</div>

@if (isset($model['stasuses']))
<div class="row">
    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label" for="status_id">Status</label>
            <select name="status_id" id="" class="form-control">
                @foreach ($model['stasuses'] as $id => $stasuse)
                <option value="{{$id}}" {{old('slot_id', $model['appointment']['status_id'])==$id ? 'selected' : null}}>
                    {{$stasuse}}</option>
                @endforeach
            </select>
            <span class="text-danger">{{$errors->first('status_id')}}</span>
        </div>
    </div>
    <!--end col-->
</div>
@endif




<div class="row">
    <div class="col-lg-12 col-mt-4">
        <label class="form-check-label">Available Slots</label>
    </div>
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

    @if (isset($model['appointment']['slot']))
    @php
    $model_slot = $model['appointment']['slot'];
    @endphp
    <div class="col-lg-2">
        <div class="mb-3">
            <div class="form-check slot-label">
                <label class="form-check-label" for="slot_{{$model_slot['id']}}">
                    {{$model_slot['date']}}
                    <span>from {{$model_slot['time_from']}} to {{$model_slot['time_to']}}</span>
                </label>
                <input type="radio" name="slot_id" id="slot_{{$model_slot['id']}}" value="{{$model_slot['id']}}"
                    class=" form-check-input" checked>
            </div>
        </div>
    </div>
    @endif
    <span class="text-danger">{{$errors->first('countries')}}</span>
</div>

<div class="col-md-12">
    <div class="mb-3">
        <label class="form-label" for="notes">Notes</label>
        <textarea id="notes" name="notes" rows="4" class="form-control"
            placeholder="Notes :">{!!old('notes')!!}</textarea>
        <span class="text-danger">{{$errors->first('notes')}}</span>
    </div>
</div>
<!--end col-->
<!--end row-->
<div class="row">
    <div class="col-sm-12">
        <input type="submit" id="submit" name="save" class="btn btn-primary" value="Save changes">
    </div>
    <!--end col-->
</div>
<!--end row-->