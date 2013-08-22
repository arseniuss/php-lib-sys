<form class="form-horizontal" role="form">
    <div>
        <div class="input-group col-md-6">
            <span class="input-group-addon">Meklēt</span>
            <input type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">Sākt!</button>
            </span>
        </div>
        <div id="sourceRadios" class="col-md-6">
            <div class="radio">
                <label>
                    <input type="radio" name="sourceRadio" id="sourceRadio1" value="book" checked>
                    Grāmatas
                </label>
            </div>
            <div class="hidden pull-right" for="sourceRadio1">
                <div class="radio">
                    <label>
                        <input type="radio" name="placeRadio" id="placeRadio1" value="title" checked>
                        Nosaukums
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="placeRadio" id="placeRadio2" value="author">
                        Autors
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="placeRadio" id="placeRadio3" value="year">
                        Gads
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="placeRadio" id="placeRadio4" value="publisher">
                        Izdevniecība
                    </label>
                </div>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="sourceRadio" id="sourceRadio2" value="publisher">
                    Izdevniecība
                    <div class="hidden pull-right" for="sourceRadio2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="placeRadio" id="placeRadio5" value="name">
                                Nosaukums
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="placeRadio" id="placeRadio6" value="city">
                                Pilsēta
                            </label>
                        </div>
                    </div>
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="sourceRadio" id="sourceRadio3" value="user">
                    Lietotājs
                    <div class="hidden pull-right" for="sourceRadio3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="placeRadio" id="placeRadio7" value="name">
                                Vārds
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="placeRadio" id="placeRadio8" value="surname">
                                Uzvārds
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="placeRadio" id="placeRadio9" value="birth_year">
                                Dzimšanas datums
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="placeRadio" id="placeRadio10" value="city">
                                Pilsēta
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="placeRadio" id="placeRadio11" value="address">
                                Adrese
                            </label>
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <tr><th>#</th><th>Nosaukums</th><th>Autors</th><th>Gads</th><th>Izdevējs</th><th>Eksemplāri</th><th>#</th></tr>
        </table>
    </div>
</form>