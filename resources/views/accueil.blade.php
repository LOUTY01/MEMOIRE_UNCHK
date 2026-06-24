<ul class="navbar-nav mx-auto">

<li class="nav-item">
    <a class="nav-link" href="{{ route('accueil') }}">
        Accueil
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('services') }}">
        Services
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('propos') }}">
        À propos
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('rendezvous') }}">
        Rendez-vous
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('contact') }}">
        Contact
    </a>
</li>

</ul>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const message = document.getElementById('message-recherche');

    if (message) {

        setTimeout(function () {
            message.style.transition = "0.5s";
            message.style.opacity = "0";

            setTimeout(function () {
                message.remove();
            }, 500);

        }, 5000);
    }

});
</script>