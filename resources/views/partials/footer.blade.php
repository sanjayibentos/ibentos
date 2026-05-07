<footer class="main-footer bg-dark text-white border-0">

    <div class="container-fluid">

        <div class="row align-items-center">

            <!-- Left -->
            <div class="col-md-6">

                <strong class="text-info">
                    © {{ date('Y') }} My Admin Panel
                </strong>

                <span class="ml-2 text-light">
                    | Laravel CRUD Dashboard
                </span>

            </div>

            <!-- Right -->
            <div class="col-md-6 text-md-right mt-2 mt-md-0">

                <!-- Dashboard -->
                <a href="/dashboard"
                   class="text-light mr-3">

                    <i class="fas fa-home"></i>
                    Dashboard

                </a>

                <!-- Posts -->
                <a href="/posts"
                   class="text-light mr-3">

                    <i class="fas fa-file-alt"></i>
                    Posts

                </a>

                <!-- Social Icons -->
                <a href="#"
                   class="text-primary mr-2">

                    <i class="fab fa-facebook fa-lg"></i>

                </a>

                <a href="#"
                   class="text-info mr-2">

                    <i class="fab fa-linkedin fa-lg"></i>

                </a>

                <a href="#"
                   class="text-light">

                    <i class="fab fa-github fa-lg"></i>

                </a>

            </div>

        </div>

        <!-- Bottom -->
        <div class="text-center mt-2">

            <small class="text-secondary">

                Developed by
                {{ auth()->user()->name ?? 'Sanjay' }}

            </small>

        </div>

    </div>

</footer>