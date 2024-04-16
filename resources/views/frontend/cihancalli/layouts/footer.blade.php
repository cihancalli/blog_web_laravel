@include('frontend.cihancalli.widgets.sections.action')
@include('frontend.cihancalli.widgets.sections.about')
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
                    2024
                </div>
            </div>
            <div class="col-auto">
                @include('frontend.cihancalli.links.footer-link')
            </div>
        </div>
    </div>
</footer>

@include('frontend.cihancalli.links.bootstrap-footer-link')
</body>
</html>
