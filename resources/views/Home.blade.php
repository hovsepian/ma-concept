@extends('Layouts.app')

@section('content')

    <div class="banner">
        <div class="container-fluid banner_content">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner_content_titles">
                        <h1> WIR <span>BAUEN</span></h1>
                        <h1>IHRE VISION</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="credentials" id="credentials">
        <h2 class="text-center">REFERENZEN</h2>
        <div class="container-fluid">
            <div class="credentials_items">
                @foreach($credentials as $credential)
                    <div class="credentials_items_item" data-id=".cr-slide-{{$credential->id}}">
                        <img src="{{asset('/storage/').'/'.$credential->thumbnail}}" width="100%" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="services" id="services">
        <h2 class="text-center">DIENSTLEISTUNGEN</h2>
        <div class="container-fluid">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4">
                        <div class="services_item" data-id=".slide-{{$service->id}}">
                            <img src="{{url('/storage/').'/'.$service->thumbnail}}" width="100%" alt="">
                            <div class="services_item_desc">
                                <h4>{{$service->title}}</h4>
                                <p>{{$service->description}}</p>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="about" id="about">
        <h2 class="text-center">ÜBER UNS</h2>
        <div class="container-fluid about_container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Wir Bauen Ihre Visionen</h3>
                    <p>Die Grundvoraussetzung für erfolgreiches Bauen ist die Wahl des richtigen Partners.Ein Partner
                        dem Sie Vertrauen schenken können und der Ihre Wünsche, Visionen und Ideen am Projekt richtig
                        umsetzen kann. Sicherheit, Zuverlässigkeit, Transparenz,umsichtige Planung und gutes
                        Zeitmanagement , sowie langfristige und sichere Investitionen sind die Grundbausteine einer
                        erfolgreichen Zusammenarbeit.</p>
                    <h3>Unsere Aufgabe ist es</h3>
                    <p>Zukünftige Bauherren entsprechend ihrer Wünsche, Ansprüche und dem beabsichtigten Bauvorhaben im
                        Rahmen des persönlich gesetzten Budgets ausführlich zu beraten und zu betreuen. Zudem bieten wir
                        und mit unseren sorgfältig ausgesuchten und geprüften Partnern eine solide Plattform für die
                        Realisierung Ihres Traumhauses. Unser Hauptaugenmerk liegt dabei auf der handwerklichen
                        Umsetzung Ihres Bauvorhabens. Wertbeständigkeit ist für uns kein Fremdwort, sondern
                        Selbstverständligkeit und täglich umgesetzte Philosophie. Mit unserem breiten Portfolio bedienen
                        wir regionale und überregionale Kunden. Unser Leistungsspektrum erstreckt sich von
                        Einzelleistungen nach Maß bis zur komplexen Gesamtlösung aus einer Hand - von Kleinaufträgen bis
                        hin zu anspruchsvollen Großprojekten. Fordern Sie uns!</p>
                </div>
                <div class="col-12 col-sm-6">
                    <img src="{{url('/img/service.jpg')}}" width="100%" alt="">
                </div>
                <div class="col-12 col-sm-6">
                    <img src="{{url('/img/service.jpg')}}" width="100%" alt="">
                </div>
                <div class="col-12 col-sm-6">
                    <h3>Zu unserem Leistungsspektrum gehören:</h3>
                    <h5>Zu unserem Leistungsspektrum gehören:</h5>
                    <ul>
                        <li>Erstellung von Rohbauten für Mehr- Doppel- Einfamilienhäuser,
                            Landwirtschaftliche- Gewerbliche Hallen und Bauten
                        </li>
                        <li>Ausführung von Beton- uns Stahlbeton-Arbeiten</li>
                        <li>Ausführung aller Maurerarbeiten</li>
                        <li>Altbausanierung / Energetische Sanierung mit Abbruch</li>
                        <li>Grundlagenermittlung</li>
                        <li>Entwurfsplanung</li>
                        <li>Bauleitung</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contact">
        <div class="container-fluid">
            <div class="contact_section">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="contact_type">
                                    <div class="flex">
                                        <div>
                                            <div class="phone"></div>
                                        </div>
                                        <div>
                                            <p>Telefonnummer</p>
                                            <p>+49 151 217 667 38 <img src="{{asset('/img/whatsapp.svg')}}" alt=""></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact_type">
                                    <div class="flex">
                                        <div>
                                            <div class="email"></div>
                                        </div>
                                        <div>
                                            <p>E-Mail-Addresse</p>
                                            <p>info@ma-concept.de</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact_type">
                                    <div class="flex">
                                        <div>
                                            <div class="location"></div>
                                        </div>
                                        <div>
                                            <p>Standort</p>
                                            <p><a href="" class="map_">Auf der karte anzeigen</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <img src="{{asset('/img/close.svg')}}" class="close" alt="">
                                <iframe width="100%" height="450" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                              </div>

                        </div>
                        <div class="contact_section_form">
                            <h3>KONTAKT</h3>
                            <form method="POST" action="{{url('/submit-form')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="@error('name')is-invalid @enderror" name="name" id="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="@error('email')is-invalid @enderror" name="email" id="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="auftrags">Auftrags Nr</label>
                                        <input type="text"  class="@error('auftrags')is-invalid @enderror"  name="auftrags" id="auftrags">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefon">Telefon</label>
                                        <input type="text" class="@error('phone')is-invalid @enderror" name="phone" id="telefon">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="nachricht">Nachricht</label>
                                        <textarea name="nachricht" class="@error('nachricht')is-invalid @enderror" dirname="nachricht" id="nachricht" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="contact_submit" type="submit">Senden</button>
                                    </div>
                                    <div class="col-md-12">
                                       @if(session('success'))
                                           <p>{{session('success')}}</p>
                                      @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup_overlay"></div>
    <div class="popup">
        <h3></h3>
        <div class="popup_slider">
            @foreach($services as $serv)
                @foreach($serv->photos as $photo)
                    <div class="slide-<?=$serv->id?>">
                        <img src="{{url('/storage/').'/'.$photo}}" alt="">
                    </div>
                @endforeach
            @endforeach
        </div>

        <img src="{{asset('/img/close.svg')}}" class="close" alt="">
        <p></p>
    </div>

    <div class="cr_popup">
        <h3></h3>
        <div class="cr_popup_slider">
            @foreach($credentials as $credential)
                @foreach($credential->photos as $photo)
                    <div class="cr-slide-<?=$credential->id?>">
                        <img src="{{url('/storage/').'/'.$photo}}" alt="">
                    </div>
                @endforeach
            @endforeach
        </div>
        <img src="{{asset('/img/close.svg')}}" class="close" alt="">
    </div>

@endsection
