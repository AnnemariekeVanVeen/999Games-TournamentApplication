@extends('layouts.userpanel')

@section('content')
    <div class="container userdashboard">
        <div class="userdashboard-inner d-flex align-items-center userdashboard-inner-height">
            <div class="user-quickselect-width">
                <div class="row ">
                    <div class="col title-margin">
                        <h1>Snel selectie</h1>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <form action="{{ route('usersdashboard.destroy', ['usersdashboard' => $user]) }}"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button class="scnd-btn"><input class="" type="submit" value="Uitschrijven"
                                                            onclick="return confirm ('Weet je zeker dat je je wilt uitschrijven voor het NK?')">
                            </button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col selection-col">
                        <a href="{{ route('gameSchedule') }}">
                            <div class="selection-outer">
                                <div class="selection-inner">
                                    <svg class="selection-img" width="90" height="100">
                                        <path id="roster_icon"
                                              d="M73,56H48V81H73ZM68,1V11H28V1H18V11H13A9.955,9.955,0,0,0,3.05,21L3,91a10,10,0,0,0,10,10H83A10.029,10.029,0,0,0,93,91V21A10.029,10.029,0,0,0,83,11H78V1ZM83,91H13V36H83Z"
                                              transform="translate(-3 -1)"/>
                                    </svg>
                                    <h2 class="selection-title">Spelschema</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col selection-col">
                        <a href="{{ route('leaderboard') }}">
                            <div class="selection-outer">
                                <div class="selection-inner">
                                    <svg class="selection-img" width="90" height="100">
                                        <path id="settings_icon"
                                              d="M83,11H62.1a14.941,14.941,0,0,0-28.2,0H13A10.029,10.029,0,0,0,3,21V91a10.029,10.029,0,0,0,10,10H83A10.029,10.029,0,0,0,93,91V21A10.029,10.029,0,0,0,83,11ZM48,11a5,5,0,1,1-5,5A5.015,5.015,0,0,1,48,11ZM58,81H23V71H58ZM73,61H23V51H73Zm0-20H23V31H73Z"
                                              transform="translate(-3 -1)"/>
                                    </svg>
                                    <h2 class="selection-title">Ranglijst</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col selection-col">
                        <a href="{{ route('verify') }}">
                            <div class="selection-outer">
                                <div class="selection-inner">
                                    <svg class="selection-img" width="100" height="100">
                                        <path id="settings_icon"
                                              d="M91.889,3H14.111A11.108,11.108,0,0,0,3,14.111V91.889A11.108,11.108,0,0,0,14.111,103H91.889A11.108,11.108,0,0,0,103,91.889V14.111A11.108,11.108,0,0,0,91.889,3Zm-50,77.778L14.111,53l7.833-7.833L41.889,65.056,84.056,22.889l7.833,7.889Z"
                                              transform="translate(-3 -3)"/>
                                    </svg>
                                    <h2 class="selection-title">Valideren</h2>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col selection-col">
                        <a href="{{ route('usersdashboard.edit', ['usersdashboard' => $user]) }}">
                            <div class="selection-outer">
                                <div class="selection-inner">
                                    <svg class="selection-img" width="97.271" height="100" viewBox="0 0 97.271 100">
                                        <path id="settings_icon"
                                              d="M88.067,56.9a38.963,38.963,0,0,0,.35-4.9,38.966,38.966,0,0,0-.35-4.9l10.55-8.25a2.523,2.523,0,0,0,.6-3.2l-10-17.3a2.513,2.513,0,0,0-3.05-1.1l-12.45,5a36.531,36.531,0,0,0-8.45-4.9L63.367,4.1A2.438,2.438,0,0,0,60.917,2h-20a2.438,2.438,0,0,0-2.45,2.1l-1.9,13.25a38.414,38.414,0,0,0-8.45,4.9l-12.45-5a2.439,2.439,0,0,0-3.05,1.1l-10,17.3a2.465,2.465,0,0,0,.6,3.2l10.55,8.25a39.653,39.653,0,0,0-.35,4.9,39.652,39.652,0,0,0,.35,4.9L3.217,65.15a2.523,2.523,0,0,0-.6,3.2l10,17.3a2.513,2.513,0,0,0,3.05,1.1l12.45-5a36.531,36.531,0,0,0,8.45,4.9l1.9,13.25a2.438,2.438,0,0,0,2.45,2.1h20a2.438,2.438,0,0,0,2.45-2.1l1.9-13.25a38.415,38.415,0,0,0,8.45-4.9l12.45,5a2.439,2.439,0,0,0,3.05-1.1l10-17.3a2.523,2.523,0,0,0-.6-3.2ZM50.917,69.5A17.5,17.5,0,1,1,68.417,52,17.519,17.519,0,0,1,50.917,69.5Z"
                                              transform="translate(-3 -1)"/>
                                    </svg>
                                    <h2 class="selection-title">Profiel instellingen</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
