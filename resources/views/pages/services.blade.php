@extends('layouts.app')
@section('content')
<h1>My Github Profile</h1>

    {{-- adding the github finder files  --}}
<body>
    <div id="profile"></div>
    <footer class="mt-5 p-3 text-center bg-light">Nasirul Islam &copy;</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    // all the JS script goes down here
    // Using ES6 classes
    class GitHub {
    constructor() {
        this.client_id = env('CLIENT_ID', null);
        this.client_secret = env('CLIENT_SECRET', null);
        this.repos_count = 10;
        this.repos_sort = 'created: asc';
    }

    // get user method
    // creatign an asynchronous function
    // will be creating two request
    // 1> get the user
    // 2> get the repos
    async getUser(user) {
        const profileResponse = await fetch(`https://api.github.com/users/mfsiat?client_id=${this.client_id}&client_secret=${this.client_secret}`);

        const repoResponse = await fetch(`https://api.github.com/users/mfsiat/repos?per_page=${this.repos_count}&sort=${this.repos_sort}&client_id=${this.client_id}&client_secret=${this.client_secret}`);

        const profile = await profileResponse.json();
        const repos = await repoResponse.json();

        return {
        profile,
        repos
        }
    }
    }


    // UI class
    class UI {
    constructor() {
        this.profile = document.getElementById("profile");
    }

    // Display Profile
    showProfile(user) {
        this.profile.innerHTML = `
        <div class="card card-body mb-3">
            <div class="row">
            <div class="col-md-3">
                <img class="img-fluid mb-2" src="${user.avatar_url}">
                <a href="${user.html_url}" target="_blank" class="btn btn-primary btn-block mb-4">View Profile</a>
            </div>
            <div class="col-md-9">
                <span class="badge badge-primary">Public Repos: ${user.public_repos}</span>
                <span class="badge badge-secondary">Public Gists: ${user.public_gists}</span>
                <span class="badge badge-success">Followers: ${user.followers}</span>
                <span class="badge badge-primary">Following: ${user.following}</span>
                <br><br>
                <ul class="list-group">
                <li class="list-group-item>Company: ${user.company}</li>
                <li class="list-group-item>Website: ${user.blog}</li>
                <li class="list-group-item>Location: ${user.location}</li>
                <li class="list-group-item>Member Since: ${user.created_at}</li>
                </ul>
            </div>
            </div>
        </div>
        <h3 class="page-heading mb-3"> Latest Repos</h3>
        <div id="repos"></div>
        `;
    }

    // Show user repos
    showRepos(repos) {
        let output = "";

        repos.forEach(function(repo) {
        output += `
            <div class="card card-body mb-2">
            <div class="row">
                <div class="col-md-6">
                <a href="${repo.html_url}" target="_blank">${repo.name}</a>
                </div>
                <div class="col-md-6">
                <span class="badge badge-primary">Stars: ${repo.stargazers_count}</span>
                <span class="badge badge-secondary">Watchers: ${repo.watchers_count}</span>
                <span class="badge badge-success">Forks: ${repo.forks_count}</span>
                <span class="badge badge-success">Language: ${repo.language}</span>
                </div>
            </div>
            </div>
        `;
        });

            // Output repos
            document.getElementById("repos").innerHTML = output;
        }
    }

    // Init GitHub
    const github = new GitHub;

    // init UI
    const ui = new UI;

    // Search input
    const searchUser = document.getElementById("searchUser");
    // Show profile
    const userText = "mfsiat";
    github.getUser(userText).then(data => {
        ui.showProfile(data.profile);
        ui.showRepos(data.repos);
    });
</script>
</body>
@endsection
