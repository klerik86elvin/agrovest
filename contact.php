<?php
include_once 'template/head.php';
?>
<!-- header-->
<?php
include_once 'template/header.php';
?>
<!-- header end-->

<section class="standart_page_section">
    <div class="container">
        <!-- brc-->
        <div class="breadcrumbs not_border">
            <ul>
                <li>
                    <a href="#">Ana səhifə</a>
                </li>
                <li>
                    <a href="#">Əlaqə </a>
                </li>
            </ul>
        </div>
        <!-- brc end-->
    </div>
    <div class="standart_page_content contact_page_content">
        <div class="contact_container">
            <div class="map_box" id="map"></div>
            <div class="contact_form_box">
                <div class="contact_box">
                    <div class="contact_left">
                        <h4>Əlaqə</h4>
                        <div class="contact_list">
                            <ul>
                                <li>
                                    <div class="contact_ico">
                                        <img src="assets/images/phone.svg" alt="">
                                    </div>
                                    <div class="contact_info">
                                        <a href="tel:(+994 12) 425 50 90">(+994 12) 425 50 90</a>
                                        <a href="tel:(+994 55) 409 89 99">(+994 55) 409 89 99</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact_ico">
                                        <img src="assets/images/mail.svg" alt="">
                                    </div>
                                    <div class="contact_info">
                                        <a href="mailto:info@agrowestdc.az">info@agrowestdc.az</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact_ico">
                                        <img src="assets/images/location.svg" alt="">
                                    </div>
                                    <div class="contact_info">
                                        <p>AR, Bakı şəh., Sabunçu r-nu, Bakıxanov qəs., Bünyatov küç. 12</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="socials">
                            <a href="#" target="_blank">
                                <img src="assets/images/fb.svg" alt="">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/images/insta.svg" alt="">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/images/twitter.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="contact_right">
                        <h4>Bizə Yazın</h4>
                        <div class="contact_form form_elements">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Ad">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Soyad">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Epoçt">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea placeholder="Müraciətin mətni"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="form_submit">Göndər</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(40.394871, 49.850675),
            zoom: 16,
            panControl: false,
            zoomControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false,
            rotateControl: false
        };
        var map = new google.maps.Map(document.getElementById("map"), mapProp);

    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCZWy2YH-P1SUd4wbCz4gteGoX3aXSd1c&callback=myMap"></script>
<?php
include_once 'template/footer.php';
?>