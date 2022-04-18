<?php require 'Layout/header.php' ?>
<style>
    #carousel{
        font-family: 'Montserrat', sans-serif;
    }
    #carousel h5{
        color: black;
    }
    #carousel p{
        color: black;
    }
    #announcement{
        padding: 6% 4%;
        background-color: #F7F7F7;
    }
    #announcement button{
        margin: 10px;
    }
    #dortluk{
        text-align:center;
        padding: 5% 13%;
    }
    #dortluk img{
        cursor: pointer;
        width: 40%;
        margin-bottom: 10px;
    }
    #dortluk p{
        font-size: 12px;
        padding: 0 3%;
        color: black;
    }   
</style>
<section id="carousel">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="images/img2.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>Our Patients Whose Needs Are Our Priority</h3>
                <p style="padding: 0 4%;">Appointment priority application was started at MHRS for our citizens over 65 years old, cancer patients, orphans, risky pregnant and disabled citizens whose needs are our priority. Certain daily quotas of our physicians are automatically allocated to these citizens. Our citizens who have a "priority" record in the records of the Ministry of Health can make an appointment by taking advantage of the quota reserved for them.</p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="images/img3.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h3>Our Patients Whose Needs Are Our Priority</h3>
                <p style="padding: 0 4%;">Appointment priority application was started at MHRS for our citizens over 65 years old, cancer patients, orphans, risky pregnant and disabled citizens whose needs are our priority. Certain daily quotas of our physicians are automatically allocated to these citizens. Our citizens who have a "priority" record in the records of the Ministry of Health can make an appointment by taking advantage of the quota reserved for them.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/im.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h3>Our Patients Whose Needs Are Our Priority</h3>
                <p style="padding: 0 4%;">Appointment priority application was started at MHRS for our citizens over 65 years old, cancer patients, orphans, risky pregnant and disabled citizens whose needs are our priority. Certain daily quotas of our physicians are automatically allocated to these citizens. Our citizens who have a "priority" record in the records of the Ministry of Health can make an appointment by taking advantage of the quota reserved for them.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- 
    *
    *
 -->
 <section id="announcement">
    <h3>#Announcments</h3>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Announcment1
    </button>
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Announcment2
    </button><br>
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Announcment3
    </button>
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Announcment4
    </button>
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Announcment5
    </button>
    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Announcment6
    </button>

    <!-- Modal -->
    <div class="modal fade modal-dialog modal-dialog-scrollable modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p style="color: black;">The Central Physician Appointment System (MHRS), which provides examination appointment services to all health institutions and organizations affiliated to the Ministry of Health, continues to be renewed and increase the quality of service in the light of advanced technologies.
            MHRS, which has been providing uninterrupted service to all of Turkey since 2010, has implemented a new application in response to the increasing demand for appointments. In order to respond to the intensified demand at MHRS, to increase the rate of benefiting from the MHRS facility by reminding the appointments, and to reopen the examination hours for appointments by canceling them when necessary, it has implemented the appointment reminder/cancellation services with SMS and voice call, according to the citizens' preferences, 1 day before the appointment date. Thus, citizens who cancel their examination appointments that they cannot attend will contribute to the benefit of other citizens from MHRS.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
 </section>
 <!-- 
     *
     *
  -->
<section id="dortluk">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img src="images/time.svg" alt="">
                <h5>Quik Appointment</h5>
                <p>You can instantly make an appointment with the physician you want from the mobile application, the Web and the Alo182 Appointment line.</p>
            </div>
            <div class="col-lg-3">
            <img src="images/location.svg" alt="">
                <h5>Nearest Hospital</h5>
                <p>You can find the nearest hospital to you by sharing your location information via Mobile Application and Web.</p>
            </div>
            <div class="col-lg-3">
            <img src="images/steteskop.svg" alt="">
                <h5>The Doctor you want</h5>
                <p>It is up to you to make an appointment with the doctor you want on MHRS.</p>
            </div>
            <div class="col-lg-3">
            <img src="images/what.svg" alt="">
                <h5>what do i have?</h5>
                <p>You can enter your complaint and get specific diagnostic recommendations and an outpatient clinic appointment.</p>
            </div>
        </div>
    </div>
</section>  
<?php require 'Layout/footer.php' ?>