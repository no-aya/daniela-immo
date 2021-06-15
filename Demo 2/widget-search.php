<aside class="widget widget-search-property">
    <h5>Rechercher une propriété</h5>
    <form action="" method="post">
    <div class="row">
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item custom-select">
                <select class="selectpicker" title="Location" data-hide-disabled="true" data-live-search="true">
                    <option>Palmeraie</option>
                    <option>Médina</option>
                    <option>Route Ouarzazte</option>
                    <option>Bab Doukkala</option>
                    <option>Guéliz</option>
                    <option>Route de Fès</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item custom-select">
                <select class="selectpicker" title="Type" data-hide-disabled="true" data-live-search="true">
                    <option>Villa</option>
                    <option>Appartement</option>
                    <option>Riad</option>
                    <option>Terrain</option>
                    <option>Commerce</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item">
                <input type="text" name="min-area" placeholder="Surface min. (m²)">
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item">
                <input type="text" name="max-area" placeholder="Surface max. (m²)">
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item  custom-select">
                <select class="selectpicker" title="N. de chambres" data-hide-disabled="true">
                    <optgroup label="1">
                        <option label="1">1 Chambre</option>
                        <option>2 Chambres</option>
                        <option>3 Chambres</option>
                        <option>4 Chambres</option>
                        <option>5 Chambres</option>
                    </optgroup>
                </select>
            </div>
        </div>
        <div class="col-md-6 col-sm-3 col-xs-12">
            <div class="find-home-item custom-select">
                <select class="selectpicker" title="N. de salles de bain" data-hide-disabled="true">
                    <option>1 Salles de bain</option>
                    <option>2 Salles de bains</option>
                    <option>3 Salles de bains</option>
                    <option>4 Salles de bains</option>
                    <option>5 Salles de bains</option>
                </select>
            </div>
        </div>
        <div class="col-md-10 col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-md-12 col-sm-7 col-xs-12">
                    <div class="find-home-item">
                        <!-- shop-filter -->
                        <div class="shop-filter">
                            <div class="price_filter">
                                <div class="price_slider_amount">
                                    <input type="submit" value="Échelle des prix :" />
                                    <input type="text" id="amount" name="price" placeholder="Précisez le prix" />
                                </div>
                                <div id="slider-range"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-5 col-xs-12">
                    <div class="find-home-item">
                        <a class="button-1 btn-block btn-hover-1" href="#" onClick="javascript:this.form.submit();">Rechercher</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</aside>