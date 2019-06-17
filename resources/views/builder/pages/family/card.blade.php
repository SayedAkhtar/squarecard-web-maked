<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
        <img src="{{asset("images/".$data->image)}}" class="card-img h-100" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body pb-2">
            <h5 class="card-title text-capitalize">{{$data->name}}</h5>
                <div class="d-flex justify-content-sm-between">
                    <small class="text-capitalize">
                        @if($data->age != null || $data->age != 0)
                            {{$data->age}}
                        @else
                            {{ __("Age")}}
                        @endif
                    </small>
                    <small class="text-capitalize">
                        @if($data->relation_name != null)
                            {{$data->relation_name}}
                        @else
                            {{ __("Relation")}}
                        @endif 
                    </small>
                </div>
                <div class="d-flex justify-content-sm-between text-capitalize">
                    <small>
                        @if($data->profession != null || $data->profession != 0)
                            {{$data->profession}}
                        @else
                            {{ __("Profession")}}
                        @endif
                    </small>
                    <small>
                        @if($data->maritial_status != null || $data->maritial_status != 0)
                            {{$data->maritial_status}}
                        @else
                            {{ __("Maritial Status")}}
                        @endif
                    </small>
                </div>
                <div class="text-capitalize">
                    <small>
                        @if($data->about != null || $data->about != 0)
                            {{$data->about}}
                        @else
                            {{ __("About")}}
                        @endif
                    </small>
                </div>
                <div class="row pt-4 d-flex justify-content-end">
                    <a href="{{url()->current()}}/edit/{{$data->id}}" class="btn btn-submit">Edit</a>
                    <form action="{{url()->current()}}/delete/{{$data->id}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-submit" value="Delete">
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>