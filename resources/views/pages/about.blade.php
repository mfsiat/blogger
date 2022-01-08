@extends('layouts.app')
@section('content')

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inconsolata', sans-serif;
  font-size: 1.3rem;
}

a {
  color: #333;
  text-decoration: none;
}

a:hover {
  color: firebrick;
  text-decoration: underline;
}

.container {
  max-width: 1100px;
  margin: auto;
  overflow: auto;
  padding: 0 2rem;
}

.main-header {
  height: 55vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 2rem;
}

.main-header h1 span {
  color: #b50d10;
}

.main-header p {
  font-size: 2rem;
}

</style>

<header class="main-header">
    <h1><span>Md. Nasirul Islam</span> Portfolio</h1>
    <p>
      Web and Native App Developer
    </p>
  </header>
  <main class="container">
    <!-- Bio  -->
    <section class="card">
      <img src="img/pt.png" alt="" />
      <div>
        <h3>Hello, this is me</h3>
        <p>
          Love Esports and passionate about coding. Can write JavaScript, PHP, Java, Python.
        </p>
        <h4>Check Out My Links</h4>
        <a href="https://www.linkedin.com/in/nasirul-islam-4708ab153/" target="_blank"
          ><i
            class="fab fa-linkedin"
            style="margin-bottom: 2rem"
            title="LinkedIn"
          ></i
        ></a>
        <a href="https://twitter.com/SiatIslam" target="_blank"
          ><i
            class="fab fa-twitter"
            style="margin-bottom: 2rem"
            title="Twitter"
          ></i
        ></a>
        <a href="https://github.com/mfsiat" target="_blank"
          ><i
            class="fab fa-github"
            style="margin-bottom: 2rem"
            title="GitHub"
          ></i
        ></a>
        <a href="https://www.hackerrank.com/nasirul_islam" target="_blank"
          ><i
            class="fab fa-hackerrank"
            style="margin-bottom: 2rem"
            title="Hackerrank"
          ></i
        ></a>
        <a href="https://stackoverflow.com/users/10308630/md-nasirul-islam" target="_blank"
          ><i
            class="fab fa-stack-overflow"
            style="margin-bottom: 2rem"
            title="Stack-overflow"
          ></i
        ></a>
        <a href="https://www.reddit.com/user/mfsiat" target="_blank"
          ><i
            class="fab fa-reddit"
            style="margin-bottom: 2rem"
            title="Reddit"
          ></i
        ></a>
        <h4>My Other Websites</h4>
        <ul>
          <li>
            <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            <a href="https://nasirblog.000webhostapp.com/" target="_blank">Personal Website</a>
          </li>
          <li>
            <i class="fas fa-blog" aria-hidden="true"></i>
            <a href="https://nasirblog.epizy.com/" target="_blank">Blog</a>
          </li>
          <li>
            <i class="fab fa-blogger" aria-hidden="true"></i>
            <a href="https://poradhin.blogspot.com/" target="_blank">Poem Blog</a>
          </li>
          <li>
            <i class="fab fa-wordpress" aria-hidden="true"></i>
            <a href="https://explorersiat.wordpress.com/" target="_blank">WordPress</a>
          </li>
          <li>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <a href="mailto:nasirul.islam@northsouth.edu" target="_blank">nasirul.islam@northsouth.edu</a
            >
          </li>
        </ul>
      </div>
    </section>
    <!-- Education info  -->
    <section class="card" data-aos="fade-left">
      <img src="img/edu.png" alt="" />
      <div>
        <h3>Education</h3>
        <ul>
          <li><strong>North South University</strong>, Dhaka</li>
          <ol>
            BSc in Computer Science and Engineering
          </ol>
          <li><strong>Govt Science College</strong>, Dhaka</li>
          <ol>
            HSC
          </ol>
          <li><strong>Dhanmondi Govt Boys High School</strong>, Dhaka</li>
          <ol>
            SSC
          </ol>
        </ul>
        <h3>Address</h3>
        <p>
          <i class="fas fa-home" aria-hidden="true"></i> Tejkuni Para, Dhaka
        </p>
      </div>
    </section>
    <section class="card" data-aos="fade-right">
      <img src="img/skills.png" alt="" />
      <div>
        <h3>Skills</h3>
        <h4>Programming Languages</h4>
        <i class="fab fa-js" title="JavaScript"></i>
        <i class="fab fa-node" title="Node.js"></i>
        <i class="fab fa-php" title="PHP"></i>
        <i class="fab fa-java" title="Java"></i>
        <i class="fab fa-python" title="Python"></i>
        <i class="fab fa-html5" title="HTML5"></i>
        <i class="fab fa-css3" title="CSS3"></i>
        <h4>Frameworks</h4>
        <i class="fab fa-laravel" title="Laravel"></i>
        <i class="fab fa-react" title="React"></i>
        <!-- <i class="fab fa-angular" title="Angular"></i> -->
        <h4>Other Tools</h4>
        <i class="fab fa-git" title="Git"></i>
        <i class="fab fa-bitbucket" title="Bitbucket"></i>
        <i class="fab fa-trello" title="Trello"></i>
        <h4>Operating System</h4>
        <i class="fab fa-linux" title="Linux"></i>
        <i class="fab fa-windows" title="Windows"></i>
        <h3>Workflow</h3>
        <ul>
          <li>Software Development</li>
          <li>Web & Native Mobile App Development</li>
        </ul>
      </div>
    </section>
    <!-- uni projects -->
    <section class="card" data-aos="fade-left">
      <img src="img/project1.jfif" alt="" />
      <div>
        <h3>Final Year Project</h3>
        <h4>BusKoi</h4>
        <p>
          An android app which shows the users location and seat vacancy of
          public Transport via an IOT device.
        </p>
        <i class="fab fa-github"></i
        ><a href="https://github.com/mfsiat/BusKoi" target="_blank"> GitHub link</a>
      </div>
    </section>
    <!-- personal projects part 1-->
    <section class="card" data-aos="fade-right">
      <img src="img/project2.jfif" alt="" />
      <div>
        <h3>Personal Projects</h3>
        <h4>Blogger</h4>
        <p>My blog made in <strong>laravel, MySQL, HTML</strong>.</p>
        <i class="fab fa-chrome"></i>
        <a href="http://nasirblog.000webhostapp.com/" target="_blank"> Live link</a>
        <h4>Lets_chat</h4>
        <p>
          A simple chat application, where users can log in to separate room
          and chat with the room members. We used <strong>socket.io, React, Express</strong>.
        </p>
        <i class="fab fa-chrome"></i>
        <a href="https://mfsiat-rchat.netlify.com/" target="_blank"> Live link</a>
        <h4>ApexTracker</h4>
          <p>A simple app that shows the apex-legends game players stats.</p>
        <i class="fab fa-chrome"></i>
        <a href="https://desolate-inlet-79375.herokuapp.com/" target="_blank"> Live link</a>
      </div>
    </section>
    <!-- personal projects  part 2-->
    <section class="card" data-aos="fade-left">
      <img src="img/project2.jfif" alt="" />
      <div>
        <h3>Personal Projects</h3>
        <h4>LyricsFinder</h4>
        <p>A simple lyrics search web app, built on <strong>React, MusicXmatch API</strong>.</p>
        <i class="fab fa-chrome"></i>
        <a href="https://lrcfinder.herokuapp.com/" target="_blank">Live link</a>
        <h4>To Do app Using react-native</h4>
        <p>
          My first to do app using <strong>react-native</strong>.
        </p>
        <i class="fab fa-chrome"></i>
        <a href="https://github.com/mfsiat/reactToDoApp" target="_blank">GitHub Link</a>
        <h4>To view my other projects, please visit my GitHub page</h4>
        <i class="fab fa-github"></i>
        <a href="https://github.com/mfsiat/" target="_blank">GitHub Link</a>
      </div>
    </section>
<!-- Footer  -->
    <div class="footer">Md. Nasirul Islam &copy</div>
  </main>



@endsection
