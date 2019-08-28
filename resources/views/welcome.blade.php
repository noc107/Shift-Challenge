@extends('template')

@section('main-section')
    <div class="my-5">
        <div class="h6 test-title">Discover your perspective</div>
        <p class="test-subtitle">
            Complete the 7 min test and get a detailed report of your lenses on the world.
        </p>
    </div>
    <form action="{{ route('save') }}" method="POST">
        @csrf
        @foreach ($questions as $question)
            <div class="container">
                <div class="row">
                    <div class="col-6 offset-3 border">
                        <div class="question-box">
                            <p class="text-center test-subtitle bold">{{ $question->question }}</p>
                            <div class="container">
                                <div class="col-10 offset-1">
                                    <div class="demo">                                      
                                            <label class="radio-inline text-danger text-disagree">Disagree</label>
                                            <input type="radio" id="radio-1-{{ $question->id }}" name="optradio-{{ $question->id }}" value="1" required><label for="radio-1-{{ $question->id }}"><span></span></label>
                                            <input type="radio" id="radio-2-{{ $question->id }}" name="optradio-{{ $question->id }}" value="2"><label for="radio-2-{{ $question->id }}"><span></span></label>
                                            <input type="radio" id="radio-3-{{ $question->id }}" name="optradio-{{ $question->id }}" value="3"><label for="radio-3-{{ $question->id }}"><span></span></label>
                                            <input type="radio" id="radio-4-{{ $question->id }}" name="optradio-{{ $question->id }}" value="4"><label for="radio-4-{{ $question->id }}"><span></span></label>
                                            <input type="radio" id="radio-5-{{ $question->id }}" name="optradio-{{ $question->id }}" value="5"><label for="radio-5-{{ $question->id }}"><span></span></label>
                                            <input type="radio" id="radio-6-{{ $question->id }}" name="optradio-{{ $question->id }}" value="6"><label for="radio-6-{{ $question->id }}"><span></span></label>
                                            <input type="radio" id="radio-7-{{ $question->id }}" name="optradio-{{ $question->id }}" value="7"><label for="radio-7-{{ $question->id }}"><span></span></label>                                    
                                            <label class="radio-inline text-success text-agree">Agree</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        @endforeach
        <div class="container pb-5">
            <div class="row">
                <div class="col-6 offset-3 border">
                    <div class="question-box">
                        <p class="text-center test-subtitle bold">Your Email</p>
                        <span class="pb-5">
                            <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
                        </span>
                    </div>
                </div>
            </div>
        </div> 
        <div class="container">
            <div class="row">
                <div class="col text-center save-button-position">
                    <button class="btn-sm btn-primary center" type="submit">Save & Continue</button>
                </div>
            </div>
        </div>
    </form>
@endsection
