<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="slack.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="vendors/bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="vendors/bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="vendors/bootstrap/js/bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="vendors/mdb/mdb.js"></script> -->
</head>
<body>
    <div class="container border rounded">
        <div class="row">
            <div class="col-5">
                <h2 id="ayo">Ayomanor Blessing</h2>
                <p id="pro">Project Development Manager</p> 
                <p class="border border-primary rounded">Professional Project Development with more than four years of experience in the project development process, involved in software testing, management and development of new projects and business opportunities.</p>
            </div>
            <div class="col-3">
                <img class="border border-dark rounded-circle" src="zuri.png" alt="">
            </div>
            <div class="col-4">
                <p>Ayomanor Blessing <i class="fa fa-user"></i></p>
                <a href="https://zuri.team"></i>https://zuri.team <i class="fa fa-map"></i></a> <br>
                <a href="https://internship.zuri.team">https://internship.zuri.team <i class="fa fa-rotate-right"></i></a>
                <p>08034338286 <i class="fa fa-phone"></i></p>
                <p>Lagos, Nigeria <i class="fa fa-location-arrow"></i></p>


            </div>
        </div>
        <div class="bg-dark text-muted"> Bio</div>
        <div class="row">
           <div class="col-6">
             <h3 id="work">Work Experience</h3>
             <h4>Project Development Manager</h4>
             <span id="date">09/17-02/19</span>
             <ul>
                <li>Successfully managed 3 development projects, and successfully achieved the scheduled goals.</li>
                <li>Develpoed and implemented new marketing and sales plan, and defined the strategy for the next 2 years.</li>
                <li>Reviewed constantly the customers feedbacks, and then suggested ways to inprove the processes and customer services levels which improved the satisfaction rate.</li>
                <li>Ensuere the new clients will grow into a loyal customer base in a specialist niche market by implementing a new loyalty program.</li>
             </ul>
             <h4>Business DevelopmentAssistant</h4>
             <span id="date">09/14-02/16</span>
             <ul>
                 <li>Planned, suoervised and coordinate the activities of project analysis.</li>
                 <li>Improved the communication with the marketing department to better understand the competitive position.</li>
                 <li>carried out I.T instructions on trainees and made sure the understand the problem solving energy of web development.</li>
             </ul>
             <h3>EDUCATION</h3>
             <h4>BS.c Mathematics, MS.c Project Analyst and Development, MS.c Computer Science</h4>
             <p>The University of Abuja</p>
             <span id="date">2008-2012</span>
           </div>
           <div class="col-6">
            <h3>SKILLS</h3>
            <p  class="progress progress-bar text-left" style="width: 70%;">Search Engine Optimization</p>
            <p  class="progress progress-bar text-left" style="width: 80%;">Public Speaking</p>
            <p  class="progress progress-bar text-left" style="width: 70%;">Team work</p>
            <p  class="progress progress-bar text-left" style="width: 70%;">Emotional intelligence</p>
            <p  class="progress progress-bar text-left" style="width: 50%;">Google Analytics</p>
            <p  class="progress progress-bar text-left" style="width: 50%;">Research & Strategy</p>
            <p  class="progress progress-bar text-left"style="width: 80%;">Decision Making</p>
            <p  class="progress progress-bar text-left" style="width: 70%;"> Programming Skills
                <ul>
                    <li>JavaScript</li>
                    <li>Node.JS</li>
                    <li>PHP</li>
                    <li>HTML</li>
                    <li>CSS</li>
                </ul>
            </p>
            <h3>ORGANIZATION</h3>
            <p>Alusoft Technologies <br> (2020-present)</p>
            <p>Association of Private Enterprise Education <br> (2019-present)</p>
            <p>De Boss I.T Firm <br> (2015-2018)</p>
            <h3>HONOURS AND AWARDS</h3>
            <p>Jury Member, Venture Cup Entrepreneurship Competition (2016)</p>
            <p>Programming Academy Competition Award (2018)</p>
            <p>Excellence in Project Development.</p>
           </div>
        </div>

        <form action="form_script.php" method="get">
            <div class="row bg-primary">
                <div class="form-group col-6">
                    <label>First Name</label>
		            <input type="text" placeholder="first name" name="first" style="padding-bottom: 20px;"><br>
                </div>
                <div class="form-group col-6">
                    <label>Last Name</label>
		            <input type="text" placeholder="last name" name="last"><br>
                </div>
                <div class="form-group col-6">
                    <label>Age</label>
		            <input type="number" placeholder="age" name="age"><br>
                </div>
                <div class="form-group col-6">
                    <label>Gender</label>
		            <input type="radio" name="Gender" value="male">male
		            <input type="radio" name="Gender" value="female">female<br>
                </div>
                <div class="form-group col-6">
                    <label>Future Ambition</label>
		            <input type="text" name="ambition"><br>
                </div>
                <div class="form-group col-6">
                    <label>image</label>
		            <input type="file" placeholder="first name" name="first"><br>
                </div>
            </div>
		<button class="btn btn-primary">Submit</button>
	</form>
    </div>
</body>
</html>