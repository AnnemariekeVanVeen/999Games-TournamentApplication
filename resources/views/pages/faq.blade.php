@extends('layouts.app')

@section('content')
    <div class="bg-footer">
        <div class="container">
            <br>
            <div class="head-faq title-margin">
                <h1>FAQ</h1>
            </div>
            <!-- Card 1 --->
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0 d-inline">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed text-decoration-none">
                            <div class="col-11 d-inline-block">Lorem ipsum?</div>
                            <div class="col-1 mb-0 d-inline justify-content-end arrow_down">
                                <img class="arrow_select" src="{{ asset('storage/icons/arrow_down.svg') }}">
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-body">
                        <div class=" col content-card">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 --->
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h5 class="mb-0 d-inline">
                        <a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapse" class="collapsed text-decoration-none">
                            <div class="col-11 d-inline-block">Lorem ipsum dolor sit amet, consetetur?</div>
                            <div class="col-1 mb-0 d-inline justify-content-end arrow_down">
                                <img class="arrow_select" src="{{ asset('storage/icons/arrow_down.svg') }}">
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-body">
                        <div class="col content-card">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 --->
            <div class="card" id="faq-card">
                <div class="card-header" role="tab" id="headingThree">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapse" class="collapsed text-decoration-none">
                            <div class="col-11 d-inline-block">Lorem ipsum dolor sit amet, consetetur sadipscing elitr?</div>
                            <div class="col-1 mb-0 d-inline justify-content-end arrow_down">
                                <img class="arrow_select" src="{{ asset('storage/icons/arrow_down.svg') }}">
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="card-body">
                        <div class="col content-card">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 4 --->
            <div class="card">
                <div class="card-header" role="tab" id="headingFour">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapse" class="collapsed text-decoration-none">
                            <div class="col-11 d-inline-block">Lorem ipsum dolor sit amet?</div>
                            <div class="col-1 mb-0 d-inline justify-content-end arrow_down">
                                <img class="arrow_select" src="{{ asset('storage/icons/arrow_down.svg') }}">
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="card-body">
                        <div class="col content-card">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 5 --->
            <div class="card">
                <div class="card-header" role="tab" id="headingFive">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapse" class="collapsed text-decoration-none">
                            <div class="col-11 d-inline-block">Lorem ipsum dolor sit amet, consetetur?</div>
                            <div class="col-1 mb-0 d-inline justify-content-end arrow_down">
                                <img class="arrow_select" src="{{ asset('storage/icons/arrow_down.svg') }}">
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="card-body">
                        <div class=" col    content-card">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 6 --->
            <div class="card">
                <div class="card-header" role="tab" id="headingSix">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapse" class="collapsed text-decoration-none">
                            <div class="col-11 d-inline-block">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam?</div>
                            <div class="col-1 mb-0 d-inline justify-content-end arrow_down">
                                <img class="arrow_select" src="{{ asset('storage/icons/arrow_down.svg') }}">
                            </div>
                        </a>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="card-body">
                        <div class="content-card">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
                                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
                                takimata sanctus est Lorem ipsum dolor sit amet.
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
