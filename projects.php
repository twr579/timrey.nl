<?php include('includes/header.php'); ?>
    <div class="content">
        <section>
            <h1>my projects</h1>
            <h2>click on a project to get more info</h2>
            <div id="accordion">
                <h2>> timrey.nl</h2>
                <div>
                    <p>A personal website created with HTML, CSS, jQuery, and PHP. You're looking at it right now!</p>
                </div>
                <h2>> mit dem Zug</h2>
                <div>
                    <img class="right no-overhang" src="images/mitdemzug.webp" alt="The results section of mit dem Zug" width="353" height="188" />
                    <p>
                        Mit dem Zug (German for "by train") is a website created with React and Redux and deployed to Google Cloud via Docker. I'm interested in German language and culture, so I wanted to learn more about the German railway system and get some concrete language practice by deploying my first website in German. However, websites telling travelers in Germany how to get from Point A to Point B by train already abound (just look at Google Maps!). I wanted to implement a unique idea that appeals to the spontaneous traveler. Hence, mit dem Zug. Simply search for a train station in Germany and input a time limit (in hours in minutes), and the site makes a series of API calls within an algorithm to find all stations reachable within the given time. The results section includes the name and photo of each station, the trip length, and further details about the trains and transfers required to get there.
                    </p>
                    <a href="//mit-dem-zug-sxinc232ga-uc.a.run.app/">check out the site</a>
                    <a href="//mit-dem-zug-de-uuc3zyggfa-uc.a.run.app">guck die Webseite mal</a>
                    <a href="//github.com/twr579/mit-dem-zug">view source code</a>
                    
                </div>
                <h2>> Feedback Friend</h2>
                <div>
                    <img class="left no-overhang" src="images/feedbackfriend.webp" alt="A form allowing users to create a survey by adding free-response and multiple choice questions." width="367" height="184" />
                    <p>
                        A survey creation and distribution software sponsored by Oracle. My team spent spring 2022 planning the application's basic design and features, determining team roles, and laying out a roadmap for development. In the fall, we began coding. As a member of the frontend team, my responsibilities included creating a dashboard page, a survey creation page, and a page to take the survey, and assisting on a page to display aggregate results. The survey creation page allows the user to create surveys from scratch or from existing templates. They can change the survey name, add, edit, and delete free-response and multiple choice questions, including a drag-and-drop feature to change question order, preview the created survey, and select a list of contacts to which to email a link to the survey. All changes are autosaved. On the dashboard page, users can see all their draft, active, and completed surveys. From here, any survey can be deleted, drafts can be edited, active surveys can be toggled to completed to prevent further responses, and buttons on active and completed surveys redirect the user to the results page for that survey. The page for taking a survey is straightforward, with the addition of an input field before the survey loads prompting the recipient to enter their email for verification. I was also active in assisting with the creation of the SQL schema, documenting required API calls, and creating and debugging Flask functions.
                    </p>
                    <a href="//feedbackfriend.ennissalam.com/">check out the site</a>
                    <a href="//github.com/twr579/Feedback-Friend-Prototype">view source code</a>
                </div>
                <h2>> timtreks.com</h2>
                <div>
                    <img class="right no-overhang" src="images/timtreks.webp" alt="The cover of the timtreks.com website. A green hill dominates the background. White text reading 'Tim Treks, hiking the Hill Country since 2021' lies over it, with a button below saying 'Read my Blog'" width="380" height="218" />
                    <p>
                        A dynamic, single-page hiking blog made with HTML, CSS, Bootstrap, jQuery, AngularJS, PHP, and SQL. Read about my hiking adventures at state parks throughout the Texas Hill Country. Look at pictures I've taken and trail maps for each park. Sort articles by recency or rating. See where I've been on a simple Esri ArcGIS web map.
                    </p>
                    <a href="//timtreks.com/">check out the site</a>
                    <a href="//github.com/twr579/timtreks.com">view source code</a>
                </div>
                <h2>> Resource Manager</h2>
                <div>
                    <p>
                        A website created with JavaScript (React.js, Material UI, Next.js, NextAuth.js, and Bcrypt.js), Python Flask, and MongoDB. Upon signing in, users can create new projects or join existing ones, check-in or checkout hardware resources for the projects they have joined, and view public datasets. As a member of a five person team, I was responsible for creating the frontend for the sign in / sign up and resource management pages. I also implemented user authentication, encryption, and comprehensive error checking for forms, and integrated the frontend with the backend.
                    </p>
                    <a href="//ee-461-website.vercel.app/auth/signin">check out the site</a>
                    <a href="//github.com/Software-lab-team/Software_lab">view source code</a>
                </div>
                <h2>> Android Weather App</h2>
                <div>
                    <p>
                        A weather app created in Android Studio with Java and a weather API. Features include updates every minute, displaying the current temperature, humidity, wind speed, and pressure, the sunrise and sunset times for the current day, hourly temperatures for the next 12 hours, high and low temperatures for the next week, and a changing background based on whether the weather is rainy, cloudy, or sunny.
                    </p>
                    <a href="//github.com/twr579/Android-Weather-App">view source code</a>
                </div>
                <h2>> Drum Kit GUI</h2>
                <div>
                    <img class="left no-overhang" src="images/drumkit.webp" alt="The drum kit GUI. Two buttons at the top allow switching between acoustic and electric drums. A text box lets users search for songs on YouTube. There are labels for different parts of the drumkit, with buttons below that show which keyboard keys to press." width="329" height="171" />
                    <p>
                        A basic keyboard-controlled drum kit made in Python with the Tkinter and pyglet libraries. Features include switching between acoustic and electric modes and typing the name of a song into a search bar to play along with it on YouTube.
                    </p>
                    <a href="//github.com/twr579/Drum-Kit-GUI">view source code</a>
                </div>
                <h2>> Castle Zombie</h2>
                <div>
                    <img class="right no-overhang" src="images/zombie.webp" alt="A zombie sprite from the game. A helmeted zombie, mouth open with jagged teeth, prepares to bite the player." width="248" height="276" />
                    <p>
                        A first-person shooter video game programmed in C/C++ on a LaunchPad TM4C123 microcontroller. Created in spring 2020, I returned to this project the following fall to create a detailed technical description of how it works.
                    </p>
                    <a href="//www.youtube.com/watch?v=wAYFZkJp2UM">watch a demo</a>
                    <a href="//drive.google.com/file/d/1NzdqMkaaTJFjX1L68sQ-nWX6oqYiBCW8/view?usp=sharing">read the technical description</a>
                    <a href="//github.com/twr579/Castle-Zombie">view source code</a>
                </div>
            </div>
        </section>
    </div><!-- END .content -->
<?php include('includes/footer.php'); ?>