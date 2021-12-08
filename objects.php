<!DOCTYPE html>
<html lang="az">

<head>
    <title>HOME PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-language" content="az" />
    <meta charset="utf-8">
    <link rel="icon shortcut" href="assets/images/favico.png" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/css/default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/objects.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <script src="assets/js/jquery-latest.js"></script>

    <style>
        section {
            padding: 50px 0;
            border-bottom: 1px solid #dedede;
            position: relative;
            float: left;
            width: 100%;
        }

        section h2 {
            color: #444343;
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 40px;
            text-transform: uppercase;
        }

        .element_container {
            position: relative;
            float: left;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .element_name {
            color: #444343;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 16px;
        }
    </style>

</head>

<body>

    <section class="dropdowns">
        <div class="container">
            <div class="full dropdowns">
                <h2>Dropdowns</h2>
                <div class="dropdowns full">
                    <div class="row">
                        <!--dropdown fade-->
                        <div class="col-md-4">
                            <div class="element_container">
                                <p class="element_name">Dropdown fade</p>
                                <div class="custom_dropdown">
                                    <span class="dropdown_open d-fade">Open drop</span>
                                    <div class="dropdown_drop">
                                        <ul>
                                            <li>
                                                <a href="#">Drop link 1</a>
                                            </li>
                                            <li>
                                                <a href="#">Drop link 2</a>
                                            </li>
                                            <li>
                                                <a href="#">Drop link 3</a>
                                            </li>
                                            <li>
                                                <a href="#">Drop link 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--dropdown fade end-->
                        <!--dropdown slide-->
                        <div class="col-md-4">
                            <div class="element_container">
                                <p class="element_name">Dropdown slide</p>
                                <div class="custom_dropdown">
                                    <span class="dropdown_open d-slide">Open drop</span>
                                    <div class="dropdown_drop">
                                        <ul>
                                            <li>
                                                <a href="#">Drop link 1</a>
                                            </li>
                                            <li>
                                                <a href="#">Drop link 2</a>
                                            </li>
                                            <li>
                                                <a href="#">Drop link 3</a>
                                            </li>
                                            <li>
                                                <a href="#">Drop link 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--dropdown slide end-->
                        <!--dropdown with icon-->
                        <div class="col-md-4">
                            <div class="element_container">
                                <p class="element_name">Dropdown with icon</p>
                                <div class="custom_dropdown">
                                    <span class="dropdown_open d-slide">
                                        <div class="drop_img">
                                            <img src="assets/css/obj_images/mexico.svg" alt="">
                                        </div>
                                        Open drop
                                    </span>
                                    <div class="dropdown_drop">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <div class="drop_img">
                                                        <img src="assets/css/obj_images/spain.svg" alt="">
                                                    </div>
                                                    Drop link 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="drop_img">
                                                        <img src="assets/css/obj_images/flag.svg" alt="">
                                                    </div>
                                                    Drop link 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="drop_img">
                                                        <img src="assets/css/obj_images/belgium.svg" alt="">
                                                    </div>
                                                    Drop link 3
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--dropdown with icon end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dropdowns">
        <div class="container">
            <div class="full dropdowns">
                <h2>Form elements</h2>
                <div class="form_elements full">
                    <div class="row">
                        <!--standart input-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Input</label>
                                <input type="text" placeholder="Type text...">
                            </div>
                        </div>
                        <!--standart inpute end-->
                        <!--standart input-->
                        <div class="col-md-4">
                            <div class="form-group inp_with_img">
                                <label>Input with image</label>
                                <input type="text" placeholder="Type text...">
                                <button type="button" class="open_smallimg"></button>
                                <div class="fin_popover">
                                    <img src="https://cfex.az/front/img/pass.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--standart inpute end-->
                        <!--select-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Chosen select</label>
                                <div class="select-container">
                                    <select name="" id="" class="chosen-select">
                                        <option value="0">Select</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--select end-->
                        <!--select-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Normal select</label>
                                <div class="select-container">
                                    <select name="" id="" ">
                                        <option value=" 0">Select</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--select end-->
                        <!--nice select-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nice select</label>
                                <div class="select-container">
                                    <select name="" id="" class=" nice-select">
                                        <option value=" 0">Select</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--nice select end-->
                        <!--datepicker input-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Datepicker</label>
                                <input type="text" class="calendar" placeholder="Type text...">
                            </div>
                        </div>
                        <!--datepicker input end-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Counter</label>
                                <div class="mehsul_counter">
                                    <button class="num_counter numeric_down"></button>
                                    <input type="number" name="" placeholder="" class="numeric_inp numeric" min="0" max="100" value="1">
                                    <button class="num_counter numeric_up"></button>
                                </div>
                            </div>
                        </div>
                        <!--datepicker input-->

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Textarea</label>
                                <textarea placeholder="Type text..."></textarea>
                            </div>
                        </div>
                        <!--datepicker input end-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tables" style="padding-bottom: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Data table</h2>
                    <div class="data_tables">

                        <table id="di_table" class="table standart_table   data_table">
                            <thead>
                                <tr>
                                    <th>Patient Name</th>
                                    <th>Phone</th>
                                    <th>Registration Date</th>
                                    <th>Service</th>
                                    <th>Doctor</th>
                                    <th>Payment Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>
                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>
                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>
                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>
                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>
                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>
                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>
                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>
                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>
                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>
                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>
                                <tr>
                                    <td>Cive Slauw Kevin</td>
                                    <td>(704) 555-0127</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Liver function tests </td>
                                    <td>Dr. Samantha</td>
                                    <td><span>Paid</span></td>
                                </tr>



                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="buttons">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Buttons</h2>
                </div>
                <div class="col-md-4" style="display: flex;">
                    <a href="#" class="button btn_bordered">button</a>
                    <div class="space"></div>
                    <a href="#" class="button btn_filled">button</a>
                    <div class="space"></div>
                    <a href="#" class="button btn_filled btn_icon"> <i class="btn_plus"></i> button</a>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/chosen.jquery.js"></script>
    <script src="assets/js/jquery.nice-select.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables.bootstrap4.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/objects.js"></script>
    <script src="assets/js/main.js"></script>



</body>

</html>