@php
    use App\Models\Slider;
    $listslider= Slider::where(['status'=>1, 'position'=>'slideshow'] )->get();

@endphp

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($listslider as $rowslider)
        @if ($loop->first)
            <div class="carousel-item active">
                <img src="{{ asset('images/slider/'.$rowslider->img) }}" class="d-block w-100" alt="First slide">
            </div>
        @else
        <div class="carousel-item">
                <img src="{{ asset('images/slider/'.$rowslider->img) }}" class="d-block w-100" alt="First slide">
            </div>
        @endif
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>