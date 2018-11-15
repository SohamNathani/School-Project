<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="assets/css/faculty.css">
  <link rel="shortcut icon" href="assets/Images/SaraswatiLogo.png">
  <title>Faculty</title>
</head>

<body>
  <?php include_once "Includes/nav-bar.php" ?>
  <main>
  <section id="FacultyHead">
    <div class="container text-white">
      <h1 class="text-white FHead-en">Faculty</h1>
      <p class="text-white pl-3 pt-3" style="font-size:1.1rem;">Our school offers experienced teachers<br>They have
        expertise in their respective field of subject and are well experienced</p>
    </div>
  </section>
  <section>
    <div class="container pt-5">
      <nav>
        <div class="nav nav-tabs mx-5" id="nav-tab" role="tablist">
          <a class="nav-item navColor nav-link active" style="font-size:1.2rem;" id="nav-home-tab" data-toggle="tab" href="#nav-home"
            role="tab" aria-controls="nav-home" aria-selected="true">प्राथमिक विद्यालय</a>
          <a class="nav-item navColor nav-link" style="font-size:1.2rem;" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
            role="tab" aria-controls="nav-profile" aria-selected="false">माध्यमिक विद्यालय</a>
          <a class="nav-item navColor nav-link" style="font-size:1.2rem;" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
            role="tab" aria-controls="nav-contact" aria-selected="false">उच्च माध्यमिक विद्यालय</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <table class="table table-striped table-hover text-center">
            <thead class="THead">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Faculty</th>
                <th scope="col">Post</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>श्री अनंत प्रसाद दिवेदी</td>
                <td>प्रधान्चार्य</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>श्रीमती ऋतिकृति सिंह</td>
                <td>सहा. आचार्या</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>श्रीमतीमंजुला गुप्ता</td>
                <td>सहा. आचार्या</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>श्रीमती मीरा सिंह</td>
                <td>सहा. आचार्या</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>श्रीमती पुष्पा ताम्रकार</td>
                <td>सहा. आचार्या</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>श्रीमती ममता शुकला</td>
                <td>सहा. आचार्या</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>श्रीमती पूनम दिवेदी</td>
                <td>सहा. आचार्या</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>श्रीमती रागनी श्रीवास्तव</td>
                <td>सहा आ.प्र.द्वी.</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>श्रीमती रेखा दिवेदी</td>
                <td>सहा आचार्या</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>श्रीमती शालिनी त्रिपाठी</td>
                <td>सहा आचार्या</td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>श्रीमती शारदा गौतम</td>
                <td>सहा आचार्या</td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>श्री मनोज कुमार गुप्ता</td>
                <td>सहा आचार्या</td>
              </tr>
              <tr>
                <th scope="row">13</th>
                <td>श्री विजय सोनी</td>
                <td>कार्या. सहा.</td>
              </tr>
              <tr>
                <th scope="row">14</th>
                <td>श्री पंकज तिवारी</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">15</th>
                <td>श्री पुष्पेन्द्र कुमार गर्ग</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">16</th>
                <td>श्री रमेश कुमार श्रीवास्तव</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">17</th>
                <td>श्री रामशिरोमणि गर्ग</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">18</th>
                <td>श्री रामविश्वास मिश्रा</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">19</th>
                <td>श्री रामजी दिवेदी</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">20</th>
                <td>श्री सुश्मकांत शर्मा</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">21</th>
                <td>श्री सत्यनारायण सोनी</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">22</th>
                <td>श्री अभय कुमार पाण्डेय</td>
                <td>सहा आ. प्र. प्र.</td>
              </tr>
              <tr>
                <th scope="row">23</th>
                <td>श्री अशोक कबीर पंथी</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">24</th>
                <td>श्री अशोक कुमार शर्मा</td>
                <td>सहा आचार्य</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <table class="table table-striped table-hover text-center">
            <thead class="THead">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Faculty</th>
                <th scope="col">Post</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>श्रीमती ललित कुशवाहा</td>
                <td>वरी आचार्य</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>श्री राम्किशोरे मिश्रा</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>श्री अम्बिकेश मिश्रा</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>श्री उतेन्द्र बागरी</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>श्री शिवेंद्र सिंह परिहार</td>
                <td>वरी आचार्य</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>श्री रामजनक त्रिपाठी</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>श्री मकसूदन शर्मा</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>श्री दिनेश कुमार पाण्डेय</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>श्री लवकेश सोनी</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>श्री पारस सेन</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>श्री अजय रजक</td>
                <td>कार्या सहा</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <table class="table table-striped table-hover text-center">
            <thead class="THead">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Faculty</th>
                <th scope="col">Post</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>श्री विजय प्रताप सिंह</td>
                <td>प्रधानाचार्य</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>श्री मुनीश्वर प्रसाद पाठक</td>
                <td>व्याख्याता</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>श्री संतोष कुमार मिश्रा</td>
                <td>व्याख्याता</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>श्री रामपाल कुशवाहा</td>
                <td>व्याख्याता</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>श्री रामू पाण्डेय</td>
                <td>व्याख्याता</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>श्री मुकेश दिवेदी</td>
                <td>व्याख्याता</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>श्री शिवेंद्र सिंह परिहार</td>
                <td>व्याख्याता</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>श्री दुर्गेश कुमार पाण्डेय</td>
                <td>वरी आचार्य</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>श्री अनिल कुमार पाण्डेय</td>
                <td>वरी आचार्य</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>श्री रामसुजान पाठक</td>
                <td>वरी आचार्य</td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>श्री प्रमोद सिंह परिहार</td>
                <td>वरी आचार्य</td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>श्री भीमसेन गुप्ता</td>
                <td>वरी आचार्य</td>
              </tr>
              <tr>
                <th scope="row">13</th>
                <td>श्री कृष्ण कुमार सोनी</td>
                <td>वरी आचार्य</td>
              </tr>
              <tr>
                <th scope="row">14</th>
                <td>श्री सुरेश कुमार शर्मा</td>
                <td>वरी आचार्य</td>
              </tr>
              <tr>
                <th scope="row">15</th>
                <td>श्री सुधेश कुमार दिवेदी</td>
                <td>वरी आचार्य</td>
              </tr>
              <tr>
                <th scope="row">16</th>
                <td>श्री तीरथ प्रसाद मिश्रा</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">17</th>
                <td>श्री प्रभाकर शुकला</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">18</th>
                <td>श्री कमलाकर दिवेदी</td>
                <td>प्रयो सहा</td>
              </tr>
              <tr>
                <th scope="row">19</th>
                <td>सुश्री गोल्डी गुप्ता</td>
                <td>अंश आचार्या</td>
              </tr>
              <tr>
                <th scope="row">20</th>
                <td>श्री ललन प्रताप सिंह</td>
                <td>सहा आचार्य</td>
              </tr>
              <tr>
                <th scope="row">21</th>
                <td>श्री विद्यानरेश सोनी</td>
                <td>सहा आचार्य</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <section class="pb-5">
    <div class="container pt-5">
      <h1 class="HEad text-center py-3">:: Committee ::</h1>
      <table class="table table-striped table-hover text-center">
        <thead class="THead">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Member</th>
            <th scope="col">Post</th>
            <th scope="col">Mobile no.</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>डॉ.राजन सरन श्रीवास्तव</td>
            <td>अध्यक्ष</td>
            <td>07673-232222</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>श्रीमती अंजना टण्डन</td>
            <td></td>
            <td>9406727373</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>चंदन अग्रवाल</td>
            <td>सचिव/व्यवस्थापक</td>
            <td>9425884477</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>डॉ.सचिन गोयल</td>
            <td>सह-सचिव</td>
            <td>9893799077</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>श्रीमती आभा अग्रवाल</td>
            <td>कोषाध्यक्ष</td>
            <td>9425173675</td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>श्री डॉ.साखी गोपाल अग्रवाल</td>
            <td>सदस्य</td>
            <td>07673-232304</td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>श्री बद्री प्रसाद अग्रवाल</td>
            <td></td>
            <td>7697985051</td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>विष्णु ताम्रकार</td>
            <td>सदस्य</td>
            <td>9425470638</td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>संजीव बसंतानी</td>
            <td>सदस्य</td>
            <td>9300076300</td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>उमेश त्रिवेदी</td>
            <td>जिला सचिव</td>
            <td>9993838301</td>
          </tr>
          <tr>
            <th scope="row">11</th>
            <td>विजय प्रताप सिंह</td>
            <td>प्राचार्य</td>
            <td>9993935450</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  </main>
  <?php include_once "Includes/footer.php" ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>