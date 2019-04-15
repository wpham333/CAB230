<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/sample.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <?php include 'PHP/header.php'; ?> 
        
        <div id = "Content">
            <div id="NameOfPark">
                City Botanic Garden
            </div>
            <div id="ParkReview">
                <img src="img/sample/green-5-stars.png" alt="Review" width="250px">
                <span id="review" class="reviewers">50 Reviews</span>
            </div>
            <span id="Location" class="located">Alice St, Brisbane City QLD 4000</span>
            <div id="Pictures">
                <img src="https://maps.googleapis.com/maps/api/staticmap?center=%22-27.4765828,153.0284794%22&zoom=14&size=400x300&sensor=false&key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU" alt="Map">
                <img src="img/sample/garden_1.jpg" alt="Garden1" width="400" height="300">
                <img src="img/sample/garden_2.jpg" alt="Garden2" width="400" height="300">
            </div>
            <div id="PeopleReview">
                <div id="left">
                    <div id="PeopleOne">
                        <div id="PeopleImage">
                            <img src="img/sample/people1.png" width="50" height="50">
                            <label id="people1comment">“Great place to have a nice walk.</label>
                            <div id="PeopleRating">
                            <img src="img/sample/green-5-stars.png" width="100px" height="30px">
                            </div>
                        </div>
                    </div>
                    <div id="PeopleTwo">
                        <div id="PeopleImage">
                            <img src="img/sample/people2.png" width="50" height="50">
                            <label id="people1comment">“Great place to have a nice walk.</label>
                            <div id="PeopleRating">
                            <img src="img/sample/green-5-stars.png" width="100px" height="30px">
                            </div>
                        </div>
                    </div>
                    <div id="PeopleThree">
                        <div id="PeopleImage">
                            <img src="img/sample/people3.png" width="50" height="50">
                            <label id="people1comment">“Great place to have a nice walk.</label>
                            <div id="PeopleRating">
                            <img src="img/sample/green_4_stars.png.png" width="100px" height="30px">
                            </div>
                        </div>
                    </div>
                    <h1>
                        Write a review
                    </h1>
                    <textarea id="myReview"></textarea>
                    <input type="submit" class="btn" value="Submit">
                </div>
                <div id="right">
                    <h1 id="openinghour">Opening hours</h1>
                    <table class="timetable">
                        <tr>
                            <th class="tg-t2cw">Day</th>
                            <th class="tg-t2cw">Hours</th>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">Monday</td>
                            <td class="tg-yw4l">12:00pm - 10:00pm</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">Tuesday</td>
                            <td class="tg-yw4l">12:00pm - 10:00pm</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">Wednesday</td>
                            <td class="tg-yw4l">12:00pm - 10:00pm</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">Thursday</td>
                            <td class="tg-yw4l">12:00pm - 10:00pm</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">Friday</td>
                            <td class="tg-yw4l">12:00pm - 10:00pm</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">Saturday</td>
                            <td class="tg-yw4l">12:00pm - 10:00pm</td>
                        </tr>
                        <tr>
                            <td class="tg-yw4l">Sunday</td>
                            <td class="tg-yw4l">12:00pm - 10:00pm</td>
                        </tr>
                    </table>
                    <div id=informationcontent>
                        <h1>Background</h1>
                        <p id="information">The City Botanic Gardens (formerly the Brisbane Botanic Gardens) is a heritage-listed botanic garden on Alice Street, Brisbane City, City of Brisbane, Queensland, Australia. It was also known as Queen's Park. It is located on Gardens Point in the Brisbane CBD and is bordered by the Brisbane River, Alice Street, George Street, Parliament House and Queensland University of Technology's Gardens Point campus. The Gardens include Brisbane's most mature gardens, with many rare and unusual botanic species. In particular the Gardens feature a special collection of cycads, palms, figs and bamboo. The City Botanic Gardens was added to the Queensland Heritage Register on 3 February 1997. The Queensland Heritage Register describes the Gardens as "the most significant, non-Aboriginal cultural landscape in Queensland, having a continuous horticultural history since 1828, without any significant loss of land area or change in use over that time. It remains the premier public park and recreational facility for the capital of Queensland, which role it has performed since the early 1840s."</p>
                    </div>
                </div>
            </div>
        </div>

            <footer>
        <div id="top">
            <a href="index.html">Home</a>
            <a href="search.html">Registration</a>
            <a href="Sample.html">Write a review</a>
        </div>
        <div id="bottom">
            <p>CopyRight @ 2017 Green View</p>
        </div>
    </footer>
    </body>
</html>