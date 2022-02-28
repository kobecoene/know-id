@extends('templates.main')

@section('content')
    <div class="contactContainer">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="illustration">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" viewBox="0 0 444.341 455.176">
                        <defs>
                            <clipPath id="clip-path">
                                <rect id="Rectangle_64" data-name="Rectangle 64" width="314.445" height="344.046" fill="#7d56a6"/>
                            </clipPath>
                        </defs>
                        <g id="Component_6_3" data-name="Component 6 – 3" transform="translate(0 157.223) rotate(-30)" opacity="0.3">
                            <g id="Group_54" data-name="Group 54" clip-path="url(#clip-path)">
                                <path id="Path_11" data-name="Path 11" d="M243.831,26.48a12.485,12.485,0,0,1,12.485-12.488H364.162c102.82,0,194.115,40.129,194.115,171.568-.459,133.739-86.217,172.481-189.5,172.481H256.316a12.485,12.485,0,0,1-12.485-12.488Z" transform="translate(-243.831 -13.992)" fill="#7d56a6"/>
                            </g>
                        </g>
                    </svg>

                </div>
            </div>

            <div class="col-lg-6">
                <h2>Contacteer ons</h2>
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="form-group">
                        <label for="subject">Onderwerp</label>
                        <input type="text" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Bericht</label>
                        <textarea class="form-control" id="message" rows="7"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-2">Verstuur</button>
                </form>
            </div>
        </div>
    </div>
@endsection
