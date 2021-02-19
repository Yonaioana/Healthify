<div class="book_apointment_area">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-7">
                <div class="popup_box ">
                    <div class="popup_inner">
                        <h3>
                            Book an
                            <span>Appointment</span>
                        </h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-12">
                                    <select class="form-select wide" id="default-select" class="">
                                        <option data-display="Please select doctor to visit">Please select doctor to visit </option>
<?php

                                        require_once "dbconnect.php";

                                        $link = connectdb();

                                        $query = "SELECT first_name, last_name
                                                  FROM employees
                                                  JOIN doctor ON (doctor.employee_id = employees.employee_id)";

                                        $res = mysqli_query($link, $query);
                                        $i = 1;
                                        while ($row = mysqli_fetch_array($res)) {
?>
                                            <option value="<?php echo $i; ?>"><?php echo $row[0] . ' ' . $row[1]; ?></option>
<?php
                                        }
?>
                                    </select>
                                </div>
                                <div class="col-xl-9">
                                    <input type="text"  placeholder="Your name ">
                                </div>
                                <div class="col-xl-3">
                                    <input type="text"  placeholder="Your age">
                                </div>
                                <div class="col-xl-6">
                                    <input type="text"  placeholder="Phone number ">
                                </div>
                                <div class="col-xl-6">
                                    <input type="email"  placeholder="Email Address">
                                </div>
                                <div class="col-xl-6">
                                    <input class="datepicker" placeholder="Appointment Date">
                                </div>
                                <div class="col-xl-6">
                                    <input class="timepicker" placeholder="Suitable time">
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="boxed-btn3">Make an Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>