@extends('layouts.app')

@section('content')
    <div class="contact-page">
        <div class="container">
            <div class="row">
                <h1>Contact opnemen</h1>
            </div>
            <div class="row">
                <div class="col-8">
                    <form class="contact-form">
                        <p>Mocht u vragen hebben of een opmerking willen achterlaten, kunt u het
                            contactformulier hieronder invullen.</p>
                        <input type="text" name="first_name" placeholder="Voornaam" required>
                        <input type="text" name="last_name" placeholder="Achternaam" required>
                        <input type="email" name="email" placeholder="emailadres" required>
                        <input type="text" name="subject" placeholder="Onderwerp" required>
                        <textarea name="message" placeholder="Uw bericht"></textarea>
                        <button class="ter-btn" type="submit">Verzenden</button>
                    </form>
                </div>
                <div class="col-4">
                    <div class="right-col">
                        <div class="info-bg">
                            <p>
                                Roll The Dice <br>
                                www.rollthedice.nl <br>
                                <br>
                                Evene 7, 5667 AL Geldrop <br>
                                info@rollthedice.nl <br>
                                NL-5667AL GELDROP <br>
                                +31-6-28 87 06 80 <br>
                            </p>
                        </div>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9949.860935809595!2d5.5584369!3d51.4312494!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d9e0f7d21ec1b91!2sRoll%20The%20Dice!5e0!3m2!1snl!2snl!4v1576156459829!5m2!1snl!2snl" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
