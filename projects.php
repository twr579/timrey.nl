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
                <h2>> Feedback Friend</h2>
                <div>
                    <img class="right no-overhang" src="images/feedback-friend.webp" alt="A form allowing users to create a survey by adding free-response and multiple choice questions." width="384" height="208" />
                    <p>
                        A survey creation and distribution software sponsored by Oracle. My team spent fall 2022 planning the application's basic design and features, determining team roles, and laying out a roadmap for development. We will begin coding in the spring. As a member of the frontend team, I developed a prototype in React.js for creating, taking, and viewing the results of surveys.
                    </p>
                    <a href="//github.com/twr579/Feedback-Friend-Prototype">view source code</a>
                </div>
                <h2>> Resource Manager</h2>
                <div>
                    <p>
                        A website created with JavaScript (React.js, Material UI, Next.js, NextAuth.js, and Bcrypt.js), Python Flask, and MongoDB. Upon signing in, users can create new projects or join existing ones, check-in or checkout hardware resources for the projects they have joined, and view public datasets. As a member of a five person team, I was responsible for creating the frontend for the sign in / sign up and resource management pages. I also implemented user authentication, encryption, and comprehensive error checking for forms, and integrated the frontend with the backend.
                    </p>
                    <a href="//ee-461-website.vercel.app/auth/signin">check out the site</a>
                    <a href="//github.com/Software-lab-team/Software_lab">view source code</a>
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