
    <?php require "config.php" ?>
    <?php require "navbar.php" ?>
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contact Us</h1>
            <p>
            WE ARE WHERE WE SHOULD BE AT ..... SURELY ACTING TO YOUR SERVICE

            </p>
        </div>
    </div>
    <div class="container-fluid bg-light">
        <div class="col-md-12 m-auto text-center">
    <div  style="width: 100%; height: 300px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3385.1668852370067!2d35.86207431491083!3d31.956368981227417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x243d3fc7d15078c8!2zMzHCsDU3JzIyLjkiTiAzNcKwNTEnNTEuNCJF!5e0!3m2!1sen!2sjo!4v1653377295811!5m2!1sen!2sjo" width="100%" height="370" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxAnimall: 18,
            attribution: 'Animall Telmplte | Template Design by <a href="https://templatemo.com/">Templatemo</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery ?? <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            AnimallOffset: -1
        }).addTo(mymap);
       
        L.marker([ 31.955724,  35.864930]).addTo(mymap)
            .bindPopup("<b>Animall</b> eCommerce Template<br />Location.").openPopup();

        mymap.scrollWheelAnimall.disable();
        mymap.touchAnimall.disable();
    </script>

    <!-- Ena Map -->








    <!-- Start Contact -->
    
    <div class="container py-1 " style="border:solid 1px #41717145 ;margin:8% auto;">
        <div class="row py-5">
        <?php
if(isset($_POST['submit'])):
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql="INSERT INTO contact( name_visitor, email_visitor, subject, message) VALUES (?,?,?,?)";
$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name,$email,$subject,$message]);

echo "<div class='alert alert-primary' role='alert'>Dear $name we have received your message we will contact you soon</div>";
// "<script>alert('Dear $name we have received your message we will contact you soon') </script>";
endif;
?>
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Subject</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <input type="submit" class="btn btn-success btn-lg px-3" name="submit" value="Let???s Talk">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->
   

    <!-- Start Footer -->
    <?php include "footer.php" ?>