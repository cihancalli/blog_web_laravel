@include('frontend.person.widgets.sections.action')
@include('frontend.person.widgets.sections.about')
</main>
<!-- Footer-->
<footer class="bg-white py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0">
                    Copyright &copy;
                    <a href="{{route('home')}}">
                        Cihan Çallı
                    </a>
                    2023
                </div>
            </div>
            <div class="col-auto">
                @include('frontend.person.links.footer-link')
            </div>
        </div>
    </div>
</footer>

@include('frontend.person.links.bootstrap-footer-link')
</body>
</html>
