@extends('template')

@section('main-section')
    <div class="row my-5">
        <div class="col-md-6 border-top border-left border-bottom">
            <div class="result-title">
                <div class="h4 bold">Your Perspective</div>
                <p class="title-text">
                    Your perspective type is {{ $perspective }}
                </p>
            </div>
        </div>
        <div class="col-md-6 border-top border-right border-bottom">
            <div class="row result-box">
                @foreach ($result as $dimension)
                    <div class="col-sm-3 dimension-text">
                        {{ $dimension['info']['left'] }} ({{ $dimension['info']['left_shortening'] }})
                    </div>
                    @if ($dimension['winner'] === "left")
                        <div class="col-sm-3 perspective-bar-left perspective-bar-full"></div>
                        <div class="col-sm-3 perspective-bar-right perspective-bar-empty"></div>
                    @else
                        <div class="col-sm-3 perspective-bar-left perspective-bar-empty"></div>
                        <div class="col-sm-3 perspective-bar-right perspective-bar-full"></div>
                    @endif
                    <div class="col-sm-3 dimension-text">
                            {{ $dimension['info']['right'] }} ({{ $dimension['info']['right_shortening'] }})
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
    
@endsection