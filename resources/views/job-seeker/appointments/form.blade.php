<div class="row">
    <div class="col-lg-12 col-mt-4">
        <h4>Countries</h4>
    </div>


    <div class="col-lg-12 col-mt-4">
        <div class="check-inline">
        @foreach ($countries as $country)
            <div class="form-check-inline">
                <input type="checkbox" name="countries[]" id="Country_{{$country['id']}}" value="{{$country['id']}}" class=" form-check-input">
                <label class="form-check-label" for="Country_{{$country['id']}}"> {{$country['name']}} </label>
            </div>
            @endforeach
        </div>
    </div>

    <span class="text-danger">{{$errors->first('countries')}}</span>
</div>

<div class="row">
    <div class="col-lg-12 col-mt-4">
        <h4>Job Types</h4>
    </div>

    <div class="col-lg-12 col-mt-4">
        @foreach ($jobTypes as $job_type)
        <div class="form-check-inline">
            <input type="checkbox" name="job_types[]" id="job_type_{{$job_type['id']}}" value="{{$job_type['id']}}" class="form-check-input">
            <label class="form-check-label" for="job_type_{{$job_type['id']}}"> {{$job_type['name']}} </label>
        </div>
        @endforeach
    </div>
    <span class="text-danger">{{$errors->first('countries')}}</span>
</div>





<div class="row">
    <div class="col-lg-12 col-mt-4">
        <label class="form-check-label">Available Slots</label>
    </div>

    <div class="slots"></div>

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

@push('scripts')
<script>
    $(document).ready(function(){
        var select = $('select[name="consultant_id"]');
        if(select.data('default')){
            getSlots(select.data('default'))
        }
    })

    $('select[name="consultant_id"]').on('change',function(event) {
        $('#slot_error').text('')
        getSlots($(this).val())
    })

    function getSlots(consultant){

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $.ajax({

        type:'POST',

        url: '/consultant/'+consultant+'/slots',
        data : {default_slot: $('select[name="consultant_id"]').data('slot')},
        success:function(data){

            if (data.success) {
                $('.slots').html(data.slots);
            }

        }

        });
    }
</script>
@endpush
