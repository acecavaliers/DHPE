<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link{{ request()->is('patient*') ? ' active' : '' }}" href="/patient">Patients</a>
            <a class="nav-item nav-link{{ request()->is('crud*') ? ' active' : '' }}" href="/crud">Accounts</a>
            <a class="nav-item nav-link{{ request()->is('illness*') ? ' active' : '' }}" href="/illness">Illness</a>
            <a class="nav-item nav-link{{ request()->is('symptoms*') ? ' active' : '' }}" href="/symptoms">Symptoms</a>
        </div>
    </div>
</nav>
