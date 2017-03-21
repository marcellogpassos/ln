<div class="brown lighten-5">

    <div id="contato" class="container scrollspy">
        <div class="section">

            <div class="row">

                <div class="row section-title">
                    <div class="col s12">
                        <h1 class="center">COMO NOS ENCONTRAR?</h1>
                        <hr>
                    </div>
                </div>
                <!-- End section title -->

                <div class="row section-body">
                    <div class="col s12">

                        <div class="row">

                            <div class="col s12 m6">

                                <hr>

                                <div class="item-contato endereco">
                                    <div class="key">
                                        <h2>Endere&ccedil;o</h2>
                                    </div>
                                    <div class="value">
                                        <p class="light">Rua Benício de Oliveira Lima, 310. José Américo de Almeida</p>
                                        <p class="light">58073-030. João Pessoa - PB.</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="item-contato telefones">
                                    <div class="key">
                                        <h2>Telefones</h2>
                                    </div>
                                    <div class="value">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="light">(83) 3264-1773</p>
                                            </div>
                                            <div class="col s6">
                                                <p class="light">(83) 98800 4397</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row" style="margin: 0">
                                    <div class="col s12 m6 email-col">
                                        <div class="item-contato email">
                                            <div class="key">
                                                <h2>E-mail</h2>
                                            </div>
                                            <div class="value">
                                                <p class="light">contato@lnesteticaecabelo.com.br</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="item-contato redes-sociais">
                                            <div class="key">
                                                <h2>Redes Sociais</h2>
                                            </div>
                                            <div class="value">
                                                <div class="row" style="margin: 0">
                                                    <div class="col s6 m6 left">
                                                        <a href="https://www.facebook.com/EsteticistaLiviaNobrega" target="_blank">
                                                            <i class="fa fa-facebook-official fa-2x"
                                                               aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col s6 m6 right">
                                                        <a href="https://www.instagram.com/esteticistalivianobrega/" target="_blank">
                                                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="item-contato horarios">
                                    <div class="key">
                                        <h2>Hor&aacute;rios de Funcionamento</h2>
                                    </div>
                                    <div class="value">
                                        <ul>
                                            <li class="light"><strong>Segunda-feira:</strong> 14:00 - 18:00 </li>
                                            <li class="light"><strong>Ter&ccedil;a-feira a S&aacute;bado:</strong> 8:00 - 18:00 *</li>
                                            <li class="light">* N&atilde;o fechamos na hora do almo&ccedil;o</li>
                                        </ul>
                                    </div>
                                </div>

                                <hr>

                            </div>

                            <div class="col s12 m6">
                                <div id="map" class="card"></div>
                                <script type="text/javascript">

                                    var map;
                                    function initMap() {

                                        var myLatLng = {lat: -7.1674548, lng: -34.855971};

                                        var map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 16,
                                            center: myLatLng
                                        });

                                        var marker = new google.maps.Marker({
                                            position: myLatLng,
                                            map: map,
                                            title: 'Nossa localização'
                                        });

                                    }

                                </script>
                                <script async defer
                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoEuSjtlXXglgL7YsJlkIteaN-f_SPdpY&callback=initMap">
                                </script>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- End section body -->

            </div>

        </div>
    </div>

</div>